<?php

namespace App\Repositories;

use App\Models\Model;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\RepositoryDataFilter;

abstract class Repository implements RepositoryInterface
{
    /** @var Model $model */
    protected $model = null;
    private $defaultFilter;

    public function __construct(RepositoryDataFilter $filter)
    {
        if (!$this->model) {
            throw new Exception('Model class is not provide!');
        }

        $this->model = app($this->model);
        $this->defaultFilter = $filter;
    }

    private function selectFilter(?RepositoryDataFilter $filter): RepositoryDataFilter
    {
        $selectedFilter = !$filter
            ? $this->defaultFilter->create()
            : $filter;

        return $selectedFilter;
    }

    /**
     * Pass a filter to get a model with filter you passed
     *
     * @param RepositoryDataFilter $filter
     * @return Model
     */
    private function getFilterdModel(?RepositoryDataFilter $filter)
    {
        $selectedFilter = $this->selectFilter($filter);
        $filterdModel = $selectedFilter->apply($this->model);

        return $filterdModel;
    }

    public function all(?RepositoryDataFilter $filter = null): Collection
    {
        $filteredModel = $this->getFilterdModel($filter);
        $returns = $filteredModel->withTrashed()->get();

        return $returns;
    }

    public function get(?RepositoryDataFilter $filter = null): Collection
    {
        $filteredModel = $this->getFilterdModel($filter);
        $return = $filteredModel->get();

        return $return;
    }

    /**
     * Get record by id
     *
     * @param string $id
     * @param array $columns
     * @return Model
     */
    public function getById(string $id, array $columns = ['*'])
    {
        $filter = $this->defaultFilter->create()->columns($columns);
        $filteredModel = $this->getFilterdModel($filter);
        $return = $filteredModel->find($id);

        return $return;
    }

    /**
     * Get lastest added record on model
     *
     * @param array $columns
     * @return Model
     */
    public function newest(array $columns = ['*'])
    {
        $filter = $this->defaultFilter
            ->create()
            ->columns($columns)
            ->sort(RepositoryDataFilter::SORT_COLUMN_DEFAULT, RepositoryDataFilter::SORT_DESCENDING);

        $filteredModel = $this->getFilterdModel($filter);
        $return = $filteredModel->first();

        return $return;
    }

    public function archives(?RepositoryDataFilter $filter = null): Collection
    {
        $filteredModel = $this->getFilterdModel($filter);
        $return = $filteredModel->onlyTrashed()->get();

        return $return;
    }

    public function create($data): void
    {
        $newRecord = new ($this->model)($data);
        $newRecord->saveOrFail();
    }

    public function update(string $id, $data): void
    {
        $record = $this->model->findOrFail($id);

        $record->updateOrFail($data);
    }

    public function archive(string $id): void
    {
        $record = $this->model->findOrFail($id);

        $record->delete();
    }

    public function unArchive(string $id): void
    {
        $record = $this->model->findOrFail($id);

        $record->restore();
    }


    public function delete(string $id): void
    {
        $record = $this->model->findOrFail($id);

        $record->forceDelete();
    }
}

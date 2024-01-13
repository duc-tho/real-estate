<?php

namespace App\Repositories;

use App\Models\Model;
use Carbon\Carbon;
use Exception;

class RepositoryDataFilter
{
    const SORT_COLUMN_DEFAULT = 'id';
    const SORT_ASCENDING = 'asc';
    const SORT_DESCENDING = 'desc';
    const COMPARE_MODE_NOT_EQUAL = 0;
    const COMPARE_MODE_EQUAL = 1;
    const COMPARE_MODE_GT_EQUAL = 2;
    const COMPARE_MODE_LT_EQUAL = 3;
    const CRITERIA_TYPE_AND = 'and';
    const CRITERIA_TYPE_OR = 'or';
    const PAGINATE_DEFAULT_PAGE = 1;
    const PAGINATE_DEFAULT_ITEM_PER_PAGE = 2;

    /**
     * list of query condition to filter data
     *
     * @var array
     */
    private array $criterias = [
        self::CRITERIA_TYPE_AND => [],
        self::CRITERIA_TYPE_OR => [],
    ];

    /**
     * List of sort condition. we can use this for multi sort
     *
     * @var array
     */
    private array $sort = [];

    /**
     * Current page
     *
     * @var integer
     */
    private int $page = self::PAGINATE_DEFAULT_PAGE;

    /**
     * Number of record per page
     *
     * @var integer
     */
    private int $itemPerPage = self::PAGINATE_DEFAULT_ITEM_PER_PAGE;

    /**
     * Filter column you need when query the data, default will get all column
     *
     * @var array
     */
    private $columns = ['*'];

    /**
     * Add "OR" or "AND" condition to filter set
     * Please use constant RepositoryDataFilter::CRITERIA_TYPE_AND, RepositoryDataFilter::CRITERIA_TYPE_OR
     * for criteriaType
     *
     * @param string $criteriaType 'and' | 'or'
     * @param array $value Example ['id', '>', '1']
     * @return void
     */
    private function addCriteria(string $criteriaType, array $value): void
    {
        array_push($this->criterias[$criteriaType], $value);
    }

    /**
     * Add sort condition to filter set
     * Example:
     * - ['id', 'desc']
     * - ['name', 'asc']
     *
     * @param array $value
     * @return void
     */
    private function addSort(array $value): void
    {
        array_push($this->sort, $value);
    }

    /**
     * Create new filter
     *
     * @return self
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Apply data filter to model
     *
     * @param Model $model
     * @return Model
     */
    public function apply($model)
    {
        if (!$model instanceof Model) {
            throw new Exception('Argument is not instance of Model');
        }

        $sortSet = $this->getSortSet();
        $andCriteriaSet = $this->getAndCriteriaSet();
        $orCriteriaSet = $this->getOrCriteriaSet();

        $model = $model
            ->orWhere($andCriteriaSet)
            ->orWhere($orCriteriaSet)
            ->limit($this->itemPerPage)
            ->offset(($this->page - 1) * $this->itemPerPage)
            ->select($this->columns);

        array_map(function ($sortRule) use ($model) {
            [$column, $direction] = $sortRule;

            $model = $model->orderBy($column, $direction);
        }, $sortSet);

        return $model;
    }

    function columns(array $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    public function paginate(int $page, int $itemPerPage = self::PAGINATE_DEFAULT_ITEM_PER_PAGE): self
    {
        $this->page = $page;
        $this->itemPerPage = $itemPerPage;

        return $this;
    }

    public function getSortSet(): array
    {
        return $this->sort;
    }

    public function getAndCriteriaSet(): array
    {
        return $this->criterias[self::CRITERIA_TYPE_AND];
    }

    public function getOrCriteriaSet(): array
    {
        return $this->criterias[self::CRITERIA_TYPE_OR];
    }

    public function eq(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, '=', $value]);

        return $this;
    }

    public function gt(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, '>', $value]);

        return $this;
    }

    public function gte(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, '>=', $value]);

        return $this;
    }

    public function lt(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, '<', $value]);

        return $this;
    }

    public function lte(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, '<=', $value]);

        return $this;
    }

    public function between(string $column, string $minValue, string $maxValue, int $mode = self::COMPARE_MODE_NOT_EQUAL, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $gtFuntion = [$this, 'gt'];
        $ltFuntion = [$this, 'lt'];

        if (in_array($mode, [self::COMPARE_MODE_GT_EQUAL, self::COMPARE_MODE_EQUAL], true)) {
            $gtFuntion = [$this, 'gte'];
        }

        if (in_array($mode, [self::COMPARE_MODE_LT_EQUAL, self::COMPARE_MODE_EQUAL], true)) {
            $gtFuntion = [$this, 'lte'];
        }

        $gtFuntion($column, $minValue);
        $ltFuntion($column, $maxValue);

        return $this;
    }

    public function afterMoment(string $column, string $moment = null, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        if (!$moment) {
            $now = Carbon::now();
            $moment = $now->format('Y-m-d H:i:s');
        }

        $this->addCriteria($criteriaType, [$column, '>', $moment]);

        return $this;
    }

    public function beforeMoment(string $column, string $moment = null, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        if (!$moment) {
            $now = Carbon::now();
            $moment = $now->format('Y-m-d H:i:s');
        }

        $this->addCriteria($criteriaType, [$column, '<', $moment]);

        return $this;
    }

    public function search(string $column, string $value, $criteriaType = self::CRITERIA_TYPE_AND): self
    {
        $this->addCriteria($criteriaType, [$column, 'LIKE', $value]);

        return $this;
    }

    public function sort(string $column, string $direction = self::SORT_ASCENDING): self
    {
        $this->addSort([$column, $direction]);

        return $this;
    }
}

<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function all(?RepositoryDataFilter $filter = null): Collection;

    public function get(?RepositoryDataFilter $filter = null): Collection;

    public function getById(string $id, array $columns = ['*']);

    public function newest(array $columns = ['*']);

    public function archives(?RepositoryDataFilter $filter = null): Collection;

    public function create($data): void;

    public function update(string $id, $data): void;

    public function archive(string $id): void;

    public function unArchive(string $id): void;

    public function delete(string $id): void;
}

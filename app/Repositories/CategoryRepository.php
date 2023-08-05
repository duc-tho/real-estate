<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getBySlug(string $slug, $parentId = 0): ?Category  {
        return Category::where(['Slug' => $slug, 'ParentId' => $parentId])->first();
    }
}

<?php

namespace App\Repositories\Contracts;

use App\Models\Blog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface BlogRepositoryInterface
{
    public function paginatePublished(int $perPage = 9): LengthAwarePaginator;

    public function findPublishedBySlug(string $slug): ?Blog;
}

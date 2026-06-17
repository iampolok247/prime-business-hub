<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BlogRepository implements BlogRepositoryInterface
{
    public function paginatePublished(int $perPage = 9): LengthAwarePaginator
    {
        return Blog::query()
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with(['category', 'tags'])
            ->latest('published_at')
            ->paginate($perPage);
    }

    public function findPublishedBySlug(string $slug): ?Blog
    {
        return Blog::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->with(['category', 'tags', 'author'])
            ->first();
    }
}

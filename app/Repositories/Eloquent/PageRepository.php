<?php

namespace App\Repositories\Eloquent;

use App\Models\Page;
use App\Repositories\Contracts\PageRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class PageRepository implements PageRepositoryInterface
{
    public function findBySlug(string $slug): ?Page
    {
        return Page::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['sections' => fn ($q) => $q->where('is_active', true)->orderBy('sort_order')])
            ->first();
    }

    public function published(): Collection
    {
        return Page::query()->where('is_published', true)->orderBy('sort_order')->get();
    }
}

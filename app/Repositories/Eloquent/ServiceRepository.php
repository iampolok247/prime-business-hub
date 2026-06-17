<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function allPublished(): Collection
    {
        return Service::query()->where('is_published', true)->with('features')->get();
    }

    public function findBySlug(string $slug): ?Service
    {
        return Service::query()->where('slug', $slug)->where('is_published', true)->with('features')->first();
    }
}

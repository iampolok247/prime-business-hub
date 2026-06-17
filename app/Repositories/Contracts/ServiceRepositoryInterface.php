<?php

namespace App\Repositories\Contracts;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

interface ServiceRepositoryInterface
{
    public function allPublished(): Collection;

    public function findBySlug(string $slug): ?Service;
}

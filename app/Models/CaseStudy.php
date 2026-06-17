<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CaseStudy extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'slug', 'client_name', 'challenge', 'solution', 'result', 'success_metrics', 'is_published', 'published_at'];

    protected function casts(): array
    {
        return [
            'success_metrics' => 'array',
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }
}

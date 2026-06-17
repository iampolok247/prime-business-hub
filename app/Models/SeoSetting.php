<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    use HasFactory;

    protected $fillable = ['page_key', 'meta_title', 'meta_description', 'keywords', 'canonical_url', 'og_image', 'structured_data'];

    protected function casts(): array
    {
        return [
            'structured_data' => 'array',
        ];
    }
}

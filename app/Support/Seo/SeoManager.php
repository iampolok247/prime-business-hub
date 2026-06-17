<?php

namespace App\Support\Seo;

use App\Models\SeoSetting;

class SeoManager
{
    public function forPage(string $key): ?SeoSetting
    {
        return SeoSetting::query()->where('page_key', $key)->first();
    }
}

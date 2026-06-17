<?php

namespace App\Services;

use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\QueryException;

class SiteDataService
{
    public function homepageData(): array
    {
        try {
            return [
                'services' => Service::query()->where('is_published', true)->take(6)->get(),
                'testimonials' => Testimonial::query()->where('is_published', true)->take(6)->get(),
                'faqs' => Faq::query()->where('is_published', true)->take(8)->get(),
                'caseStudies' => CaseStudy::query()->where('is_published', true)->take(3)->get(),
            ];
        } catch (QueryException) {
            return [
                'services' => collect(),
                'testimonials' => collect(),
                'faqs' => collect(),
                'caseStudies' => collect(),
            ];
        }
    }
}

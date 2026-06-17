<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;
use App\Services\SiteDataService;

class HomeController extends Controller
{
    public function __invoke(SiteDataService $siteDataService)
    {
        $data = $siteDataService->homepageData();

        return view('pages.home', [
            'services' => $data['services'] ?? Service::query()->limit(6)->get(),
            'testimonials' => $data['testimonials'] ?? Testimonial::query()->limit(6)->get(),
            'faqs' => $data['faqs'] ?? Faq::query()->limit(8)->get(),
        ]);
    }
}

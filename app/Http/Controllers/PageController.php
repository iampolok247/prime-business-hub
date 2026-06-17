<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\Page;
use App\Models\Testimonial;
use App\Repositories\Contracts\PageRepositoryInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function successStories()
    {
        $testimonials = Testimonial::query()->where('is_published', true)->get();
        $caseStudies = CaseStudy::query()->where('is_published', true)->get();

        return view('pages.success-stories', compact('testimonials', 'caseStudies'));
    }

    public function faq()
    {
        $categories = FaqCategory::query()->with(['faqs' => fn ($q) => $q->where('is_published', true)->orderBy('sort_order')])->get();

        return view('pages.faq', compact('categories'));
    }

    public function dynamic(string $slug, PageRepositoryInterface $pageRepository)
    {
        $page = $pageRepository->findBySlug($slug);
        abort_unless($page, 404);

        return view('pages.dynamic', compact('page'));
    }
}

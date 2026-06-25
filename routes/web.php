<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/business-launch', [ServiceController::class, 'launch'])->name('services.launch');
Route::get('/services/ofsted-preparation', [ServiceController::class, 'ofsted'])->name('services.ofsted');
Route::get('/services/training-pathway', [ServiceController::class, 'training'])->name('services.training');
Route::get('/services/growth-mentorship', [ServiceController::class, 'mentorship'])->name('services.mentorship');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/success-stories', [PageController::class, 'successStories'])->name('success-stories');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
Route::post('/apply', [ApplyController::class, 'store'])->name('apply.store');

Route::get('/pages/{slug}', [PageController::class, 'dynamic'])->name('pages.dynamic');

Route::get('/sitemap.xml', function () {
    $urls = [
        route('home'),
        route('about'),
        route('services.index'),
        route('services.launch'),
        route('services.ofsted'),
        route('services.training'),
        route('services.mentorship'),
        route('success-stories'),
        route('blog.index'),
        route('faq'),
        route('contact'),
        route('apply'),
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . e($url) . '</loc>';
        $xml .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
        $xml .= '<changefreq>weekly</changefreq>';
        $xml .= '<priority>0.8</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $content = "User-agent: *\nAllow: /\nSitemap: " . route('sitemap') . "\n";

    return response($content, 200)->header('Content-Type', 'text/plain');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

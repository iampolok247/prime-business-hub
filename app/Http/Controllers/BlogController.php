<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Repositories\Contracts\BlogRepositoryInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request, BlogRepositoryInterface $blogRepository)
    {
        $blogs = $blogRepository->paginatePublished();
        $categories = BlogCategory::query()->orderBy('name')->get();

        return view('pages.blog.index', compact('blogs', 'categories'));
    }

    public function show(string $slug, BlogRepositoryInterface $blogRepository)
    {
        $blog = $blogRepository->findPublishedBySlug($slug);
        abort_unless($blog, 404);

        $blog->increment('views');

        $related = $blog->category
            ? $blog->category->blogs()->where('id', '!=', $blog->id)->limit(3)->get()
            : collect();

        return view('pages.blog.show', compact('blog', 'related'));
    }
}

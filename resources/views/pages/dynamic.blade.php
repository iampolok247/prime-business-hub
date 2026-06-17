<x-layouts.marketing>
    <section class="content-max py-20">
        <h1 class="text-5xl font-bold">{{ $page->title }}</h1>
        <div class="mt-6 prose max-w-none">{!! $page->content !!}</div>
        @foreach($page->sections as $section)
            <article class="glass-card mt-8 p-6">
                <h2 class="text-2xl font-semibold">{{ $section->title }}</h2>
                <p class="mt-2 text-slate-600">{{ $section->subtitle }}</p>
                <div class="mt-3 text-slate-700">{!! $section->content !!}</div>
            </article>
        @endforeach
    </section>
</x-layouts.marketing>

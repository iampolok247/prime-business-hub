<x-layouts.marketing>
    <section class="content-max py-20">
        <div class="max-w-3xl mx-auto">
            <article class="glass-card p-8 md:p-12 border-t-4 border-t-brand">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-brand bg-brand/10 px-3 py-1.5 rounded-full">
                    {{ optional($blog->category)->name ?? 'General' }}
                </span>
                
                <h1 class="mt-6 text-3xl font-extrabold text-black md:text-5xl leading-tight">{{ $blog->title }}</h1>
                <p class="mt-4 text-lg text-slate-800 font-medium leading-relaxed border-l-2 border-slate-200 pl-4 italic">{{ $blog->excerpt }}</p>
                
                <div class="prose prose-slate mt-10 max-w-none text-slate-800 leading-8 text-[15px] space-y-4 font-normal">
                    {!! nl2br(e($blog->content)) !!}
                </div>
            </article>

            @if(isset($related) && $related->count() > 0)
                <h2 class="section-heading mt-16 mb-6 text-2xl font-extrabold text-black">Related Articles</h2>
                <div class="grid gap-6 md:grid-cols-3">
                    @foreach($related as $item)
                        <article class="glass-card p-6 border-l-2 border-l-brand flex flex-col justify-between">
                            <h3 class="font-bold text-black text-sm leading-snug hover:text-brand transition"><a href="{{ route('blog.show', $item->slug) }}">{{ $item->title }}</a></h3>
                            <a href="{{ route('blog.show', $item->slug) }}" class="mt-4 inline-flex items-center gap-1 text-xs font-bold text-brand hover:text-brand-hover">
                                Read
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.marketing>

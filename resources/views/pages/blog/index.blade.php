<x-layouts.marketing>
    <!-- Header Banner -->
    <section class="relative overflow-hidden py-24 text-white border-b border-slate-950 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=1400&q=80');">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-slate-950/75 z-0"></div>
        <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-brand/15 blur-3xl rounded-full z-0"></div>

        <div class="content-max relative z-10">
            <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Business Insights</span>
            <h1 class="hub-title mt-4 text-white">Childminding Resources & Guides</h1>
            <p class="hub-subtitle mt-4 max-w-3xl leading-relaxed text-slate-300">
                Comprehensive resources and practical guidance on training requirements, Ofsted registration, safeguarding, marketing, and running a successful childminding business.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content-max hub-section">
        
        <!-- Category Filter Chips -->
        <div class="flex flex-wrap items-center gap-2 mb-10">
            <span class="text-xs font-extrabold uppercase tracking-widest text-black mr-2">Categories:</span>
            @foreach($categories as $category)
                <span class="rounded-full border border-brand/20 bg-brand/5 px-4 py-1.5 text-xs font-bold text-brand transition duration-200 hover:bg-brand hover:text-white cursor-pointer">
                    {{ $category->name }}
                </span>
            @endforeach
        </div>
        
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($blogs as $blog)
                <article class="resource-card flex flex-col justify-between">
                    <div>
                        <img src="https://images.unsplash.com/photo-1503919545889-aef636e10ad4?auto=format&fit=crop&w=800&q=80" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand bg-brand/10 px-2.5 py-1 rounded-full">
                                {{ optional($blog->category)->name ?? 'General' }}
                            </span>
                            <h2 class="mt-4 text-xl font-bold text-black leading-snug hover:text-brand transition duration-200">
                                <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                            </h2>
                            <p class="mt-3 text-sm text-slate-700 leading-relaxed">{{ $blog->excerpt }}</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-slate-50 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-semibold">{{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recent' }}</span>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="text-xs font-extrabold text-brand hover:text-brand-hover flex items-center gap-1">
                            Read Article 
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
        
        <div class="mt-12 pt-6 border-t border-slate-100">{{ $blogs->links() }}</div>
    </section>
</x-layouts.marketing>

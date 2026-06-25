<x-layouts.marketing>
    <!-- Header Banner -->
    <section class="relative overflow-hidden py-24 text-white border-b border-slate-950 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1503919545889-aef636e10ad4?auto=format&fit=crop&w=1400&q=80');">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-slate-950/75 z-0"></div>
        <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-brand/15 blur-3xl rounded-full z-0"></div>

        <div class="content-max relative z-10">
            <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Client Results</span>
            <h1 class="hub-title mt-4 text-white">Childminder Success Stories</h1>
            <p class="hub-subtitle mt-4 max-w-3xl leading-relaxed text-slate-300">
                Read how childcare professionals across the UK worked with Prime Business Hub to launch compliant, professional, and fully booked childminding businesses.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="content-max hub-section">

        <div class="text-center mb-10">
            <span class="kicker">Feedback</span>
            <h2 class="section-heading mt-4">Approved By Local Founders</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($testimonials as $testimonial)
                <article class="glass-card p-8 border-t-4 border-t-brand flex flex-col justify-between">
                    <div>
                        <svg class="h-8 w-8 text-brand/20" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C10.45 22.06 9 20.2 9 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C14.73 10.82 12.56 8 10 8zm14 0c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C24.45 22.06 23 20.2 23 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C28.73 10.82 26.56 8 24 8z" />
                        </svg>
                        <p class="text-[14px] text-slate-800 leading-relaxed mt-4 italic">"{{ $testimonial->quote }}"</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-full bg-brand/10 flex items-center justify-center font-bold text-brand uppercase text-sm">
                            {{ substr($testimonial->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-black text-sm">{{ $testimonial->name }}</h4>
                            <p class="text-xs text-slate-500 font-semibold">Registered Childminder</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <h2 class="section-heading mt-16 text-center">Featured Case Studies</h2>
        <p class="section-text text-center mt-2 max-w-xl mx-auto mb-10 text-slate-700">Detailed reviews of childminder launches and parent client sign-ups.</p>
        
        <div class="grid gap-6 md:grid-cols-2">
            @foreach($caseStudies as $case)
                <article class="glass-card p-8 border-l-4 border-l-brand flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-black mb-3">{{ $case->title }}</h3>
                        <p class="text-sm text-slate-700 leading-relaxed mb-4">{{ $case->result }}</p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-extrabold uppercase tracking-wider text-brand">Ofsted Approved</span>
                        <a href="{{ route('contact') }}" class="text-xs font-bold text-brand hover:underline">Discuss My Plan →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.marketing>

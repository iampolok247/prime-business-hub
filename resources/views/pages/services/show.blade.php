<x-layouts.marketing>
    <section class="content-max py-20">
        <div class="max-w-4xl mx-auto">
            <span class="kicker">Service Detail</span>
            <h1 class="section-heading mt-4">{{ $service->name }}</h1>
            <p class="section-text mt-4 max-w-3xl leading-relaxed text-slate-700 text-lg">{{ $service->excerpt }}</p>
            
            <div class="mt-8 img-frame">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=1400&q=80" alt="UK registered childminder planning childminding service" class="w-full">
            </div>

            <h2 class="text-2xl font-bold text-black mt-12 mb-6">Service Features & Deliverables</h2>
            
            <div class="grid gap-6 md:grid-cols-2">
                @foreach($service->features as $feature)
                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="text-lg font-bold text-black flex items-center gap-2">
                            <span class="text-brand">✓</span>
                            {{ $feature->title }}
                        </h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">{{ $feature->description }}</p>
                    </article>
                @endforeach
            </div>

            <!-- Call to Action Box -->
            <div class="mt-14 rounded-[36px] bg-black p-8 md:p-12 text-white relative overflow-hidden shadow-[0_20px_45px_rgba(0,0,0,0.15)] border border-slate-900">
                <!-- Ambient glow in CTA -->
                <div class="absolute -right-20 -top-20 w-72 h-72 bg-brand/15 blur-3xl rounded-full"></div>

                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-white">Ready to Launch Your Childminding Service?</h3>
                    <p class="mt-3 max-w-2xl text-slate-400 text-sm leading-relaxed">
                        Apply to work with Prime Business Hub today. We will evaluate your home suitability, licensing timeline, and give you an exact quote.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <a href="{{ route('apply') }}" class="btn-brand hover:scale-[1.02]">Apply Now</a>
                        <a href="{{ route('contact') }}" class="rounded-full border border-white/40 bg-white/5 px-6 py-2.5 text-sm font-bold text-white transition hover:border-white hover:bg-white/10">Talk To Advisor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.marketing>

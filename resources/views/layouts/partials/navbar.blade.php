<header class="sticky top-4 z-40 px-4 md:px-8">
    <div class="mx-auto max-w-7xl rounded-3xl border border-slate-200 bg-white/95 p-4 shadow-[0_10px_30px_rgba(0,0,0,0.05)] backdrop-blur-md transition-all duration-300">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="group flex items-center">
                <img src="{{ asset('images/prime-business-hub/prime-business-hub.png') }}" alt="Prime Business Hub" class="h-10 md:h-12 w-auto transition-transform duration-200 group-hover:scale-[1.02]">
            </a>
            
            <nav class="hidden items-center gap-6 text-[14px] font-bold text-black md:flex">
                <a href="{{ route('about') }}" class="transition hover:text-brand">About</a>
                
                <div class="group relative">
                    <a href="{{ route('services.index') }}" class="inline-flex items-center gap-1 transition hover:text-brand">
                        Services
                        <svg class="h-3.5 w-3.5 opacity-70 transition-transform group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <!-- Services Dropdown menu -->
                    <div class="pointer-events-none absolute left-1/2 top-full z-50 w-[640px] -translate-x-1/2 pt-4 opacity-0 transition-all duration-300 group-hover:pointer-events-auto group-hover:opacity-100 group-focus-within:pointer-events-auto group-focus-within:opacity-100">
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-[0_20px_50px_rgba(0,0,0,0.1)]">
                            <div class="grid gap-4 sm:grid-cols-2">
                                <a href="{{ route('services.launch') }}" class="flex flex-col rounded-2xl border border-slate-100 bg-slate-50 p-4 transition-all duration-200 hover:-translate-y-0.5 hover:border-brand/35 hover:bg-brand-soft">
                                    <span class="font-bold text-brand">Business Launch</span>
                                    <span class="mt-1 text-xs text-slate-600 font-medium">Complete setup from planning to operation.</span>
                                </a>
                                <a href="{{ route('services.ofsted') }}" class="flex flex-col rounded-2xl border border-slate-100 bg-slate-50 p-4 transition-all duration-200 hover:-translate-y-0.5 hover:border-brand/35 hover:bg-brand-soft">
                                    <span class="font-bold text-black">Ofsted Preparation</span>
                                    <span class="mt-1 text-xs text-slate-600 font-medium">Registration and readiness support.</span>
                                </a>
                                <a href="{{ route('services.training') }}" class="flex flex-col rounded-2xl border border-slate-100 bg-slate-50 p-4 transition-all duration-200 hover:-translate-y-0.5 hover:border-brand/35 hover:bg-brand-soft">
                                    <span class="font-bold text-brand">Training Pathway</span>
                                    <span class="mt-1 text-xs text-slate-600 font-medium">Core training for learners and owners.</span>
                                </a>
                                <a href="{{ route('services.mentorship') }}" class="flex flex-col rounded-2xl border border-slate-100 bg-slate-50 p-4 transition-all duration-200 hover:-translate-y-0.5 hover:border-brand/35 hover:bg-brand-soft">
                                    <span class="font-bold text-black">Growth Mentorship</span>
                                    <span class="mt-1 text-xs text-slate-600 font-medium">1:1 business support and accountability.</span>
                                </a>
                            </div>
                            <a href="{{ route('services.index') }}" class="mt-5 inline-flex w-full items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-bold text-white transition hover:bg-brand-hover">Explore All Business Solutions</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('success-stories') }}" class="transition hover:text-brand">Success Stories</a>
                <a href="{{ route('contact') }}" class="transition hover:text-brand">Contact Us</a>
                <a href="{{ route('blog.index') }}" class="transition hover:text-brand">Resources</a>
                <a href="{{ route('faq') }}" class="transition hover:text-brand">FAQ</a>
            </nav>

            <a href="{{ route('apply') }}" class="hidden rounded-full bg-brand px-6 py-2.5 text-sm font-bold text-white transition duration-300 hover:bg-brand-hover hover:scale-[1.02] hover:shadow-[0_8px_16px_rgba(0,129,129,0.2)] md:inline-flex">Get Your Quote</a>
        </div>
    </div>
    
    <!-- Mobile Navigation Sub-Bar -->
    <div class="mx-auto max-w-7xl px-2 mt-2 md:hidden">
        <div class="flex flex-wrap items-center justify-center gap-1.5 rounded-2xl border border-slate-200 bg-white/95 p-2 shadow-[0_6px_20px_rgba(0,0,0,0.03)] backdrop-blur-md text-[11px] font-bold text-black">
            <a href="{{ route('about') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">About</a>
            <a href="{{ route('services.index') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">Services</a>
            <a href="{{ route('services.training') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">Training</a>
            <a href="{{ route('success-stories') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">Stories</a>
            <a href="{{ route('contact') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">Contact</a>
            <a href="{{ route('blog.index') }}" class="rounded-lg px-2.5 py-1 transition hover:bg-brand-soft hover:text-brand">Blog</a>
            <a href="{{ route('apply') }}" class="rounded-lg bg-brand px-3 py-1 text-white transition hover:bg-brand-hover">Quote</a>
        </div>
    </div>
</header>

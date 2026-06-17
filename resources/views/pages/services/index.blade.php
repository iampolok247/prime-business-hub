<x-layouts.marketing>
    <!-- Header Banner -->
    <section class="relative overflow-hidden py-24 text-white border-b border-slate-950 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=1400&q=80');">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-slate-950/75 z-0"></div>
        <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-brand/15 blur-3xl rounded-full z-0"></div>

        <div class="content-max relative z-10">
            <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Prime Business Solutions</span>
            <h1 class="hub-title mt-4 text-white">Complete Childminding Setup Services</h1>
            <p class="hub-subtitle mt-4 max-w-4xl leading-relaxed text-slate-300">
                We combine business planning, legal compliance support, branding setups, and consultant mentorship to guide you step-by-step to your opening day.
            </p>
        </div>
    </section>

    <!-- Services Cards Grid -->
    <section class="content-max hub-section">
        
        <div class="grid gap-6 md:grid-cols-2">
            <article id="launch" class="glass-card p-8 border-l-4 border-l-brand flex flex-col justify-between">
                <div>
                    <span class="kicker">Step 1</span>
                    <h2 class="text-2xl font-bold text-black mt-4">Childminding Business Launch</h2>
                    <p class="mt-3 text-sm text-slate-700 leading-relaxed">
                        A full done-for-you business configuration program covering your registration roadmap, business structures, and operations outline.
                    </p>
                    <ul class="mt-6 grid gap-2.5 text-xs font-semibold text-black sm:grid-cols-2">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Launch timelines
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Home suitability check
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Setup checklists
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Business strategy
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Operating models
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Growth goals
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('apply') }}" class="btn-brand py-2.5 px-6 text-xs">Start Launch Plan</a>
                    <a href="{{ route('contact') }}" class="text-xs font-bold text-brand hover:underline">Request details →</a>
                </div>
            </article>
            
            <article id="ofsted" class="glass-card p-8 border-l-4 border-l-black flex flex-col justify-between">
                <div>
                    <span class="kicker">Step 2</span>
                    <h2 class="text-2xl font-bold text-black mt-4">Ofsted Preparation</h2>
                    <p class="mt-3 text-sm text-slate-700 leading-relaxed">
                        Structured compliance support to align your home nursery setting with UK registration and health inspection guidelines.
                    </p>
                    <ul class="mt-6 grid gap-2.5 text-xs font-semibold text-black sm:grid-cols-2">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Policy reviews
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Safety risk audits
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Safeguarding templates
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Inspection practice
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Suitability checks
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Document checks
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('apply') }}" class="rounded-full bg-black px-6 py-2.5 text-xs font-bold text-white transition hover:bg-slate-800">Prepare Inspection</a>
                    <a href="{{ route('contact') }}" class="text-xs font-bold text-slate-700 hover:underline">Request details →</a>
                </div>
            </article>
            
            <article id="marketing" class="glass-card p-8 border-l-4 border-l-brand flex flex-col justify-between">
                <div>
                    <span class="kicker">Step 3</span>
                    <h2 class="text-2xl font-bold text-black mt-4">Marketing Support</h2>
                    <p class="mt-3 text-sm text-slate-700 leading-relaxed">
                        Custom childminder local branding, flyers, digital listings, and parent registration kits to fill your spaces quickly.
                    </p>
                    <ul class="mt-6 grid gap-2.5 text-xs font-semibold text-black sm:grid-cols-2">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Local SEO profile
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Custom flyer files
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Messaging kits
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Parent forms
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Client contracts
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-brand"></span> Referral systems
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('apply') }}" class="btn-brand py-2.5 px-6 text-xs">Start Marketing</a>
                    <a href="{{ route('contact') }}" class="text-xs font-bold text-brand hover:underline">Request details →</a>
                </div>
            </article>
            
            <article id="mentorship" class="glass-card p-8 border-l-4 border-l-black flex flex-col justify-between">
                <div>
                    <span class="kicker">Step 4</span>
                    <h2 class="text-2xl font-bold text-black mt-4">Growth Mentorship</h2>
                    <p class="mt-3 text-sm text-slate-700 leading-relaxed">
                        Continuous direct consulting calls, pricing revisions, and business scaling guidance after your home nursery opens.
                    </p>
                    <ul class="mt-6 grid gap-2.5 text-xs font-semibold text-black sm:grid-cols-2">
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Direct calls
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Pricing reviews
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Growth reviews
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Compliance updates
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Expansion tactics
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-black"></span> Assistant hiring
                        </li>
                    </ul>
                </div>
                <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                    <a href="{{ route('apply') }}" class="rounded-full bg-black px-6 py-2.5 text-xs font-bold text-white transition hover:bg-slate-800">Enroll Mentorship</a>
                    <a href="{{ route('contact') }}" class="text-xs font-bold text-slate-700 hover:underline">Request details →</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Bottom Advisory Call Section -->
    <section class="hub-soft relative overflow-hidden">
        <div class="content-max hub-section relative z-10">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="img-frame">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=1200&q=80" alt="Friendly and professional childminder business consultant advising on registration details" class="stock-img-tall">
                </div>
                
                <div>
                    <span class="kicker">Advisor Consultation</span>
                    <h2 class="section-heading mt-4">Not Sure Which Setup Path is Right For You?</h2>
                    <p class="section-text mt-4 leading-relaxed text-slate-700">
                        Every home and local childcare demand is slightly different. Book a strategy call with our experienced advisory consultants. We will audit your requirements and suggest the exact pathway.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}" class="btn-brand hover:scale-[1.02]">Get Personal Recommendation</a>
                        <a href="{{ route('apply') }}" class="btn-secondary">Start Application</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.marketing>

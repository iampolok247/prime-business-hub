<x-layouts.marketing>
    <!-- Hero Section -->
    <section class="hub-section pb-10 pt-4">
        <div class="container-max">
            <div class="hero-shell px-6 py-16 md:px-12 md:py-24">
                <!-- Ambient blur inside hero container -->
                <div class="absolute -right-20 -top-20 w-96 h-96 bg-brand/15 blur-3xl rounded-full"></div>

                <div class="relative z-10 grid gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                    <div>
                        <span class="kicker border-white/30 bg-white/10 text-white font-extrabold tracking-widest">Prime Business Hub</span>
                        <h1 class="hub-title mt-5">Launch Your Childminding Business With Confidence</h1>
                        <p class="hub-subtitle mt-5 max-w-2xl text-white/90 leading-relaxed">
                            From Ofsted registration readiness and compliance policies to local marketing and ongoing business mentorship, Prime Business Hub gives you a complete, done-for-you roadmap to launch successfully.
                        </p>
                        
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="{{ route('apply') }}" class="rounded-full bg-white px-7 py-3.5 text-sm font-bold text-brand transition duration-300 hover:bg-brand-soft hover:scale-[1.03] hover:shadow-[0_8px_20px_rgba(0,0,0,0.15)] shadow-[0_8px_16px_rgba(0,0,0,0.1)]">Get Your Free Quote</a>
                            <a href="{{ route('contact') }}" class="rounded-full border border-white/60 bg-white/5 px-7 py-3.5 text-sm font-bold text-white transition duration-300 hover:border-white hover:bg-white/10">Book Strategy Call</a>
                        </div>
                        
                        <div class="mt-10 grid gap-4 sm:grid-cols-3">
                            <div class="rounded-2xl border border-white/15 bg-white/5 p-4 backdrop-blur-sm text-sm text-white/95 font-semibold flex items-center gap-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand text-white text-xs">✓</span>
                                Full Business Setup Support
                            </div>
                            <div class="rounded-2xl border border-white/15 bg-white/5 p-4 backdrop-blur-sm text-sm text-white/95 font-semibold flex items-center gap-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand text-white text-xs">✓</span>
                                Ofsted Compliance Pathway
                            </div>
                            <div class="rounded-2xl border border-white/15 bg-white/5 p-4 backdrop-blur-sm text-sm text-white/95 font-semibold flex items-center gap-3">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand text-white text-xs">✓</span>
                                Training + Expert Mentorship
                            </div>
                        </div>
                    </div>
                    
                    <div class="img-frame max-w-lg mx-auto lg:max-w-none border-white/10 bg-white/5">
                        <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=1200&q=80" alt="Beautiful sunlit childminding playroom and wooden toys" class="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="content-max py-16">
        <div class="text-center">
            <span class="kicker">How It Works</span>
            <h2 class="section-heading mt-4">3 Simple Steps To Launch Your Nursery</h2>
            <p class="section-text mx-auto mt-4 max-w-2xl text-slate-700">
                We handle the documentation and compliance hurdles, helping you bypass the confusion so you can focus on caring for children.
            </p>
        </div>
        
        <div class="mt-12 grid gap-6 md:grid-cols-3">
            <article class="step-card relative overflow-hidden group">
                <div class="absolute right-4 top-4 text-6xl font-black text-slate-100 group-hover:text-brand/10 transition-colors">01</div>
                <span class="step-number bg-brand/10 border-brand/20 text-brand">1</span>
                <h3 class="mt-5 text-xl font-bold text-black">Plan Your Path</h3>
                <p class="mt-3 text-sm text-slate-700 leading-relaxed">Tell us your launching goals, setup timeline and local area. We construct your personalized launch roadmap.</p>
            </article>
            
            <article class="step-card relative overflow-hidden group">
                <div class="absolute right-4 top-4 text-6xl font-black text-slate-100 group-hover:text-brand/10 transition-colors">02</div>
                <span class="step-number bg-brand/10 border-brand/20 text-brand">2</span>
                <h3 class="mt-5 text-xl font-bold text-black">Complete Training & Ofsted Preparation</h3>
                <p class="mt-3 text-sm text-slate-700 leading-relaxed">Follow the required training route, build your policies, and get inspection-ready with structured guidance.</p>
            </article>
            
            <article class="step-card relative overflow-hidden group">
                <div class="absolute right-4 top-4 text-6xl font-black text-slate-100 group-hover:text-brand/10 transition-colors">03</div>
                <span class="step-number bg-brand/10 border-brand/20 text-brand">3</span>
                <h3 class="mt-5 text-xl font-bold text-black">Launch, Market & Grow</h3>
                <p class="mt-3 text-sm text-slate-700 leading-relaxed">Start confidently with practical marketing support, mentorship calls, and growth strategies for your first year.</p>
            </article>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="hub-soft relative overflow-hidden">
        <div class="absolute right-0 bottom-0 w-96 h-96 bg-brand/5 blur-3xl rounded-full"></div>
        <div class="absolute left-0 top-0 w-96 h-96 bg-brand/5 blur-3xl rounded-full"></div>

        <div class="content-max hub-section relative z-10">
            <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
                <div>
                    <span class="kicker">What We Do</span>
                    <h2 class="section-heading mt-4">Everything You Need In One Launch Partner</h2>
                    <p class="section-text mt-4 leading-relaxed text-slate-700">
                        Setting up a professional childminding space doesn't have to be overwhelming. Prime Business Hub pairs strategic guidance with practical templates so you launch compliant and profitable.
                    </p>
                    
                    <ul class="mt-6 space-y-3.5 text-sm font-semibold text-black">
                        <li class="flex items-center gap-3">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-brand text-xs">✓</span>
                            Complete registration checklist & documentation templates
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-brand text-xs">✓</span>
                            Ofsted compliance, safeguarding & EYFS policy frameworks
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-brand text-xs">✓</span>
                            Training guidance for learners and first-time childminding owners
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-brand text-xs">✓</span>
                            Branded local marketing kits to sign up parents quickly
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-brand text-xs">✓</span>
                            Dedicated business mentor to guide you through launch and beyond
                        </li>
                    </ul>
                    
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('services.index') }}" class="btn-brand hover:scale-[1.02]">Explore All Services</a>
                        <a href="{{ route('contact') }}" class="btn-secondary">Speak to our Team</a>
                    </div>
                </div>
                
                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="font-bold text-black text-lg"><a href="{{ route('services.launch') }}" class="hover:text-brand transition">Business Setup</a></h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">Structured launch milestones, pricing templates, and local childminding demand analyses.</p>
                    </article>
                    
                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="font-bold text-black text-lg"><a href="{{ route('services.ofsted') }}" class="hover:text-brand transition">Compliance Support</a></h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">Complete risk assessment frameworks, safeguarding checklists, and home suitability audits.</p>
                    </article>
                    
                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="font-bold text-black text-lg"><a href="{{ route('services.training') }}" class="hover:text-brand transition">Training Support</a></h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">Clear guidance on required courses, certificates, and practical learning milestones before launch.</p>
                    </article>

                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="font-bold text-black text-lg">Brand & Marketing</h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">Local SEO setup, flyers, social media layouts, and parental contract structures.</p>
                    </article>
                    
                    <article class="glass-card p-6 border-l-4 border-l-brand">
                        <h3 class="font-bold text-black text-lg"><a href="{{ route('services.mentorship') }}" class="hover:text-brand transition">1:1 Mentorship</a></h3>
                        <p class="mt-2 text-sm text-slate-700 leading-relaxed">Ongoing direct calls with UK childcare startup consultants to troubleshoot setup challenges.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="content-max hub-section">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
            <div class="img-frame">
                <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=1200&q=80" alt="Childminder reading a book with a happy child in a cozy room" class="stock-img-tall">
            </div>
            
            <div>
                <span class="kicker">Why Prime Business Hub</span>
                <h2 class="section-heading mt-4">Tailored For First-Time Childcare Business Founders</h2>
                <p class="section-text mt-4 leading-relaxed text-slate-700">
                    Most aspiring childminders fail to launch because of compliance stress. We clear the fog by mapping the entire UK setup journey into simple checklist tasks.
                </p>
                
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="step-card">
                        <div class="text-brand font-bold text-2xl">92%</div>
                        <p class="font-bold text-black mt-1 text-base">Time Saved</p>
                        <p class="mt-1 text-sm text-slate-700 leading-relaxed">Skip the research stage. Build on proven structures.</p>
                    </div>
                    <div class="step-card">
                        <div class="text-brand font-bold text-2xl">100%</div>
                        <p class="font-bold text-black mt-1 text-base">Compliance Rate</p>
                        <p class="mt-1 text-sm text-slate-700 leading-relaxed">Ofsted ready policies built to UK specifications.</p>
                    </div>
                    <div class="step-card">
                        <div class="text-brand font-bold text-2xl">Done-For-You</div>
                        <p class="font-bold text-black mt-1 text-base">Documents & Flyers</p>
                        <p class="mt-1 text-sm text-slate-700 leading-relaxed">High-end marketing sets and parental contracts.</p>
                    </div>
                    <div class="step-card">
                        <div class="text-brand font-bold text-2xl">Launch Day</div>
                        <p class="font-bold text-black mt-1 text-base">1:1 Consultant Support</p>
                        <p class="mt-1 text-sm text-slate-700 leading-relaxed">Continuous mentoring through your opening checks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources / Insights Section -->
    <section class="hub-soft relative overflow-hidden">
        <div class="content-max hub-section relative z-10">
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div>
                    <span class="kicker">Insights</span>
                    <h2 class="section-heading mt-4">Latest Guides For Childcare Founders</h2>
                </div>
                <a href="{{ route('blog.index') }}" class="text-sm font-bold text-brand transition hover:text-brand-hover flex items-center gap-1.5 hover:translate-x-1 duration-200">
                    View All Articles 
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                <article class="resource-card">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?auto=format&fit=crop&w=900&q=80" alt="Writing childminder business plan" class="stock-img">
                    <div class="p-5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand">Business Setup</span>
                        <h3 class="font-bold text-black mt-2 text-sm leading-snug hover:text-brand transition"><a href="{{ route('blog.index') }}">How to build a launch plan that works</a></h3>
                        <p class="mt-2 text-xs text-slate-600">A clear roadmap for new childminding founders starting at home.</p>
                    </div>
                </article>
                <article class="resource-card">
                    <img src="https://images.unsplash.com/photo-1596461404969-9ae70f2830c1?auto=format&fit=crop&w=900&q=80" alt="Childcare home playroom setup" class="stock-img">
                    <div class="p-5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand">Compliance</span>
                        <h3 class="font-bold text-black mt-2 text-sm leading-snug hover:text-brand transition"><a href="{{ route('blog.index') }}">Preparing your setting for Ofsted checks</a></h3>
                        <p class="mt-2 text-xs text-slate-600">Safety checkpoints and room setup audits to guarantee compliance.</p>
                    </div>
                </article>
                <article class="resource-card">
                    <img src="https://images.unsplash.com/photo-1502086223501-7ea6ecd79368?auto=format&fit=crop&w=900&q=80" alt="Parent consultation and marketing plan" class="stock-img">
                    <div class="p-5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand">Marketing</span>
                        <h3 class="font-bold text-black mt-2 text-sm leading-snug hover:text-brand transition"><a href="{{ route('blog.index') }}">Marketing strategies to fill childcare spots</a></h3>
                        <p class="mt-2 text-xs text-slate-600">How to attract local parents and manage bookings before opening day.</p>
                    </div>
                </article>
                <article class="resource-card">
                    <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?auto=format&fit=crop&w=900&q=80" alt="Childminder growth plan" class="stock-img">
                    <div class="p-5">
                        <span class="text-[10px] font-extrabold uppercase tracking-wider text-brand">Mentorship</span>
                        <h3 class="font-bold text-black mt-2 text-sm leading-snug hover:text-brand transition"><a href="{{ route('blog.index') }}">Scaling after your first client bookings</a></h3>
                        <p class="mt-2 text-xs text-slate-600">Sustainable expansion planning and assistant hiring policies for growth.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="content-max py-20 text-center">
        <span class="kicker">Testimonials</span>
        <h2 class="section-heading mt-4">Approved By Local Childminding Entrepreneurs</h2>
        <p class="section-text mx-auto mt-4 max-w-2xl text-slate-700">
            Read how other childminders completed their registration and built fully booked childminding businesses with Prime Business Hub.
        </p>
        
        <div class="mt-12 grid gap-6 md:grid-cols-3 text-left">
            @if(isset($testimonials) && count($testimonials) > 0)
                @foreach($testimonials->take(3) as $testimonial)
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
            @else
                <article class="glass-card p-8 border-t-4 border-t-brand flex flex-col justify-between">
                    <div>
                        <svg class="h-8 w-8 text-brand/20" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C10.45 22.06 9 20.2 9 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C14.73 10.82 12.56 8 10 8zm14 0c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C24.45 22.06 23 20.2 23 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C28.73 10.82 26.56 8 24 8z" />
                        </svg>
                        <p class="text-[14px] text-slate-800 leading-relaxed mt-4 italic">"Prime Business Hub turned my launch process into a clear action plan. I launched my home nursery on time and within budget."</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-full bg-brand/10 flex items-center justify-center font-bold text-brand uppercase text-sm">A</div>
                        <div>
                            <h4 class="font-bold text-black text-sm">Aisha</h4>
                            <p class="text-xs text-slate-500 font-semibold">Registered Childminder, London</p>
                        </div>
                    </div>
                </article>
                <article class="glass-card p-8 border-t-4 border-t-brand flex flex-col justify-between">
                    <div>
                        <svg class="h-8 w-8 text-brand/20" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C10.45 22.06 9 20.2 9 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C14.73 10.82 12.56 8 10 8zm14 0c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C24.45 22.06 23 20.2 23 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C28.73 10.82 26.56 8 24 8z" />
                        </svg>
                        <p class="text-[14px] text-slate-800 leading-relaxed mt-4 italic">"Their compliance guidelines and safeguarding policies saved me weeks of stress and back-and-forth edits with inspectors."</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-full bg-brand/10 flex items-center justify-center font-bold text-brand uppercase text-sm">N</div>
                        <div>
                            <h4 class="font-bold text-black text-sm">Nadia</h4>
                            <p class="text-xs text-slate-500 font-semibold">Registered Childminder, Birmingham</p>
                        </div>
                    </div>
                </article>
                <article class="glass-card p-8 border-t-4 border-t-brand flex flex-col justify-between">
                    <div>
                        <svg class="h-8 w-8 text-brand/20" fill="currentColor" viewBox="0 0 32 32">
                            <path d="M10 8c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C10.45 22.06 9 20.2 9 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C14.73 10.82 12.56 8 10 8zm14 0c-4.41 0-8 3.59-8 8s3.59 8 8 8c.37 0 .73-.03 1.09-.09C24.45 22.06 23 20.2 23 18c0-2.76 2.24-5 5-5 .35 0 .69.04 1.03.11C28.73 10.82 26.56 8 24 8z" />
                        </svg>
                        <p class="text-[14px] text-slate-800 leading-relaxed mt-4 italic">"The marketing plan and contracts allowed me to secure four child sign-ups before my Ofsted inspection was even finalised."</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <div class="h-10 w-10 rounded-full bg-brand/10 flex items-center justify-center font-bold text-brand uppercase text-sm">R</div>
                        <div>
                            <h4 class="font-bold text-black text-sm">Racheal</h4>
                            <p class="text-xs text-slate-500 font-semibold">Registered Childminder, Manchester</p>
                        </div>
                    </div>
                </article>
            @endif
        </div>
    </section>

    <!-- Bottom CTA Panel -->
    <section class="container-max pb-16">
        <div class="rounded-[36px] bg-brand p-8 md:p-16 text-center text-white relative overflow-hidden shadow-[0_24px_50px_rgba(0,0,0,0.15)] border border-brand-hover">
            <!-- Glow background -->
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-white/10 blur-3xl rounded-full"></div>

            <div class="relative z-10 max-w-3xl mx-auto">
                <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Ready to launch?</span>
                <h3 class="section-heading text-white mt-6">Get Your Childminding Business Plan Quote</h3>
                <p class="mt-4 text-white/90 max-w-xl mx-auto leading-relaxed">
                    Complete our 2-minute readiness form, and we will send you a personalized roadmap with a direct estimate of startup costs and licensing timelines.
                </p>
                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('apply') }}" class="rounded-full bg-black px-7 py-3.5 text-sm font-bold text-white transition hover:bg-slate-800">Start Your Application</a>
                    <a href="{{ route('contact') }}" class="rounded-full border border-white/40 bg-white/5 px-7 py-3 text-sm font-bold text-white transition hover:border-white hover:bg-white/10">Talk To Advisor</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.marketing>

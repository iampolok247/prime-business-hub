<footer class="bg-brand border-t border-brand-hover text-white mt-16 relative overflow-hidden">
    <!-- Ambient glow inside footer -->
    <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/5 blur-3xl rounded-full"></div>

    <div class="container-max relative z-10 grid gap-10 py-16 md:grid-cols-4">
        <div class="md:col-span-2">
            <a href="{{ route('home') }}" class="group inline-block">
                <img src="{{ asset('images/prime-business-hub/prime-business-logo-white.png') }}" alt="Prime Business Hub" class="h-10 md:h-12 w-auto transition-transform duration-200 group-hover:scale-[1.02]">
            </a>
            <p class="mt-4 max-w-md text-sm text-white/90 leading-relaxed font-medium">
                We empower aspiring childcare entrepreneurs with the complete templates, compliance systems, Ofsted roadmaps, and one-on-one mentorship needed to launch and scale a professional childminding business.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('apply') }}" class="rounded-full bg-black px-6 py-2.5 text-xs font-bold text-white transition hover:bg-slate-800 hover:scale-[1.02]">Get Started Today</a>
                <a href="mailto:hello@primebusinesshub.co.uk" class="rounded-full border border-white/40 px-6 py-2.5 text-xs font-bold text-white transition hover:border-white hover:bg-white/10">hello@primebusinesshub.co.uk</a>
            </div>
            <div class="mt-4 space-y-1.5 text-xs font-semibold text-white/90">
                <p><a href="tel:+442081495431" class="hover:text-black">0208 149 5431</a></p>
                <p>Aegon House (Left side), Ground Floor Suite, 13 Lanark Square, London E14 9QD</p>
            </div>
        </div>
        <div>
            <h4 class="text-xs uppercase font-extrabold tracking-widest text-black mb-4">Quick Links</h4>
            <ul class="space-y-2.5 text-sm font-semibold text-white/80">
                <li><a href="{{ route('home') }}" class="transition hover:text-black">Home Page</a></li>
                <li><a href="{{ route('success-stories') }}" class="transition hover:text-black">Success Stories</a></li>
                <li><a href="{{ route('blog.index') }}" class="transition hover:text-black">Insights & Resources</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-xs uppercase font-extrabold tracking-widest text-black mb-4">Support & Team</h4>
            <ul class="space-y-2.5 text-sm font-semibold text-white/80">
                <li><a href="{{ route('about') }}" class="transition hover:text-black">About Our Mission</a></li>
                <li><a href="{{ route('contact') }}" class="transition hover:text-black">Contact & Support</a></li>
                <li><a href="{{ route('faq') }}" class="transition hover:text-black">FAQ Hub</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-brand-hover bg-brand-hover py-6 relative z-10">
        <div class="container-max flex flex-col gap-4 text-xs text-white/70 md:flex-row md:items-center md:justify-between">
            <p>Copyright © {{ now()->year }} Prime Business Hub. All Rights Reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="transition hover:text-black">Terms & Conditions</a>
                <a href="#" class="transition hover:text-black">Privacy Policy</a>
                <a href="#" class="transition hover:text-black">Cookies Policy</a>
            </div>
        </div>
    </div>
</footer>

<x-layouts.marketing>
    <!-- Header Banner -->
    <section class="relative overflow-hidden py-24 text-white border-b border-slate-950 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&w=1400&q=80');">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-slate-950/75 z-0"></div>
        <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-brand/15 blur-3xl rounded-full z-0"></div>

        <div class="content-max relative z-10">
            <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Let's Connect</span>
            <h1 class="hub-title mt-4 text-white">Contact Prime Business Hub</h1>
            <p class="hub-subtitle mt-4 max-w-3xl leading-relaxed text-slate-300">
                Share your startup timeline, childcare goals, and setting location. Our team will get back to you with next practical steps.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-max hub-section">

        @if(session('success'))
            <div class="mb-8 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 text-emerald-700 font-bold shadow-sm">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
            <!-- Livewire Form Container -->
            <div class="glass-card p-6 md:p-10">
                <h2 class="text-2xl font-extrabold text-black">Consultation Inquiry</h2>
                <p class="mt-2 text-sm text-slate-700 leading-relaxed">
                    Please provide detail about your current stage, expected launch date, and specific needs (e.g. Ofsted help, marketing). We respond within 24 hours.
                </p>
                @livewire('forms.consultation-form')
            </div>

            <!-- Sidebar Info -->
            <div class="rounded-3xl border border-slate-200 bg-white p-6 md:p-10 shadow-[0_12px_32px_rgba(0,0,0,0.03)] flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-extrabold text-black mb-4">Contact Channels</h2>
                    <div class="space-y-4 text-sm text-slate-700 leading-relaxed">
                        <p class="flex items-center gap-3">
                            <span class="text-brand font-bold text-lg">📞</span>
                            <span class="font-bold text-black">020 8149 5433</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="text-brand font-bold text-lg">✉️</span>
                            <a href="mailto:hello@primebusinesshub.co.uk" class="font-bold text-brand hover:underline">hello@primebusinesshub.co.uk</a>
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="text-brand font-bold text-lg">📍</span>
                            <span class="font-semibold text-black">London, United Kingdom</span>
                        </p>
                    </div>

                    <div class="mt-8 h-60 overflow-hidden rounded-2xl border border-slate-200 shadow-inner">
                        <iframe title="London Office Location Map" class="h-full w-full" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=London,UK&output=embed"></iframe>
                    </div>
                </div>

                <div class="mt-8 rounded-2xl border border-brand/20 bg-brand/5 p-4 text-xs font-semibold text-brand leading-relaxed flex items-start gap-2.5">
                    <span class="text-sm">💡</span>
                    <span>To expedite your enquiry, let us know if you have completed paediatric first-aid training or hold existing childcare qualifications.</span>
                </div>
            </div>
        </div>
    </section>
</x-layouts.marketing>

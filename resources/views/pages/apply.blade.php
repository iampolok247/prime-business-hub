<x-layouts.marketing>
    <!-- Header Banner -->
    <section class="relative overflow-hidden py-24 text-white border-b border-slate-950 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1400&q=80');">
        <!-- Dark overlay for text readability -->
        <div class="absolute inset-0 bg-slate-950/75 z-0"></div>
        <div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-brand/15 blur-3xl rounded-full z-0"></div>

        <div class="content-max relative z-10">
            <span class="kicker border-white/20 bg-white/10 text-white font-extrabold uppercase">Application</span>
            <h1 class="hub-title mt-4 text-white">Apply To Prime Business Hub</h1>
            <p class="hub-subtitle mt-4 max-w-3xl leading-relaxed text-slate-300">
                Complete our detailed business application form so we can evaluate your home nursery suitability and suggest the right support package.
            </p>
        </div>
    </section>

    <!-- Application Form Section -->
    <section class="content-max hub-section">

        @if(session('success'))
            <div class="mb-8 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 text-emerald-700 font-bold shadow-sm">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="max-w-4xl mx-auto glass-card p-6 md:p-12 border-t-4 border-t-brand">
            <h2 class="text-2xl font-extrabold text-black">Launch Application Form</h2>
            <p class="mt-2 text-sm text-slate-700 leading-relaxed">
                Include clear details about your home layout, qualifications, target launch date, and long-term goals so our advisors can construct a comprehensive quote.
            </p>
            @livewire('forms.application-form')
        </div>
    </section>
</x-layouts.marketing>

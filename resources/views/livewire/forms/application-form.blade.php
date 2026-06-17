<form wire:submit.prevent="submit" class="mt-6 grid gap-5 md:grid-cols-2">
    <!-- SECTION 1 -->
    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-brand border-b border-slate-200 pb-2 mb-2 mt-4 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-[10px]">1</span>
        Personal Information
    </div>
    
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">First Name</label>
        <input wire:model="first_name" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Aisha" type="text">
        @error('first_name') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Last Name</label>
        <input wire:model="last_name" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Patel" type="text">
        @error('last_name') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Email Address</label>
        <input wire:model="email" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="hello@example.com" type="email">
        @error('email') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Phone Number</label>
        <input wire:model="phone" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. 07123 456789" type="text">
        @error('phone') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Home Address</label>
        <input wire:model="address" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Full postal address" type="text">
        @error('address') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <!-- SECTION 2 -->
    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-black border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-[10px]">2</span>
        Childcare Experience
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you have prior childcare experience?</label>
        <input wire:model="childcare_experience" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Nanny for 3 years, mother of two, etc." type="text">
        @error('childcare_experience') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Are you currently employed in the childcare sector?</label>
        <input wire:model="currently_in_childcare" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Yes, nursery practitioner / No, looking to switch" type="text">
        @error('currently_in_childcare') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Have you completed any childcare qualifications?</label>
        <input wire:model="childcare_qualifications" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Level 3 Childcare Diploma, Pediatric First Aid, etc." type="text">
        @error('childcare_qualifications') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <!-- SECTION 3 -->
    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-brand border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-[10px]">3</span>
        Business Goals & Vision
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Why do you want to start a home childminding business?</label>
        <textarea wire:model="goals" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Tell us about your motivation..."></textarea>
        @error('goals') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">What are your goals for the next 12 months?</label>
        <textarea wire:model="experience" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Sign up 3 full-time children, pass Ofsted checks..."></textarea>
        @error('experience') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">When would you like to officially launch?</label>
        <input wire:model="timeline" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. September (in 3 months)" type="text">
        @error('timeline') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <!-- SECTION 4 -->
    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-black border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-[10px]">4</span>
        Additional Context
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Is there anything else our consultants should know?</label>
        <textarea wire:model="message" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Any specific requirements or comments..."></textarea>
        @error('message') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2 mt-4">
        <button class="btn-brand w-full" type="submit">
            Submit Setup Application
        </button>
    </div>
</form>

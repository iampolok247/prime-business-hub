<form wire:submit.prevent="submit" class="mt-6 grid gap-5 md:grid-cols-2">
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">First Name</label>
        <input wire:model="first_name" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Aisha" type="text">
        @error('first_name') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Last Name</label>
        <input wire:model="last_name" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="e.g. Patel" type="text">
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
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Subject</label>
        <input wire:model="subject" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="How can we help you launch?" type="text">
        @error('subject') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Your Message</label>
        <textarea wire:model="message" rows="5" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Tell us about your childcare background, current setting, and what you hope to achieve..."></textarea>
        @error('message') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>
    
    <div class="md:col-span-2 mt-2">
        <button class="btn-brand w-full md:w-auto" type="submit">
            Send Consultation Message
        </button>
    </div>
</form>

<form wire:submit.prevent="submit" class="mt-6 grid gap-5 md:grid-cols-2">
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

    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-black border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-[10px]">2</span>
        Property and Setup
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you own or rent your property?</label>
        <select wire:model="property_status" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Homeowner">Homeowner</option>
            <option value="Tenant">Tenant</option>
            <option value="Other">Other</option>
        </select>
        <p class="mt-1 text-xs font-medium text-slate-600">Property permissions can affect childminding registration.</p>
        @error('property_status') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you have a dedicated indoor space suitable for childminding?</label>
        <select wire:model="indoor_space" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Not sure">Not sure</option>
        </select>
        @error('indoor_space') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you have access to a safe outdoor play area?</label>
        <select wire:model="outdoor_space" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Private garden">Private garden</option>
            <option value="Shared outdoor space">Shared outdoor space</option>
            <option value="No outdoor space">No outdoor space</option>
        </select>
        @error('outdoor_space') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-brand border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-[10px]">3</span>
        Registration and Compliance
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">What stage are you currently at in your childminding journey?</label>
        <select wire:model="journey_stage" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Just researching">Just researching</option>
            <option value="Ready to start training">Ready to start training</option>
            <option value="Completing registration requirements">Completing registration requirements</option>
            <option value="Preparing for Ofsted registration">Preparing for Ofsted registration</option>
            <option value="Ready to launch">Ready to launch</option>
        </select>
        @error('journey_stage') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Have you already started the Ofsted registration process?</label>
        <select wire:model="ofsted_registration_started" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Unsure">Unsure</option>
        </select>
        @error('ofsted_registration_started') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you currently hold a valid Paediatric First Aid certificate?</label>
        <select wire:model="paediatric_first_aid" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="In progress">In progress</option>
        </select>
        @error('paediatric_first_aid') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-black border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-slate-100 text-[10px]">4</span>
        Business and Marketing
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">How do you plan to attract your first family?</label>
        <textarea wire:model="first_family_plan" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Short text answer"></textarea>
        @error('first_family_plan') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Do you currently have any of the following?</label>
        <div class="grid gap-2 sm:grid-cols-2 rounded-2xl border border-slate-300 bg-white p-4 text-sm text-black">
            <label class="flex items-center gap-2"><input wire:model="marketing_assets" type="checkbox" value="Business name" class="rounded border-slate-300 text-brand focus:ring-brand"> Business name</label>
            <label class="flex items-center gap-2"><input wire:model="marketing_assets" type="checkbox" value="Logo/branding" class="rounded border-slate-300 text-brand focus:ring-brand"> Logo/branding</label>
            <label class="flex items-center gap-2"><input wire:model="marketing_assets" type="checkbox" value="Website" class="rounded border-slate-300 text-brand focus:ring-brand"> Website</label>
            <label class="flex items-center gap-2"><input wire:model="marketing_assets" type="checkbox" value="Social media pages" class="rounded border-slate-300 text-brand focus:ring-brand"> Social media pages</label>
            <label class="flex items-center gap-2"><input wire:model="marketing_assets" type="checkbox" value="None yet" class="rounded border-slate-300 text-brand focus:ring-brand"> None yet</label>
        </div>
        <p class="mt-1 text-xs font-medium text-slate-600">This helps us identify who needs marketing support.</p>
        @error('marketing_assets') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2 text-xs font-extrabold uppercase tracking-[0.2em] text-brand border-b border-slate-200 pb-2 mb-2 mt-6 flex items-center gap-2">
        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand/10 text-[10px]">5</span>
        Budget and Commitment
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Are you prepared to invest in setting up your childminding business?</label>
        <select wire:model="setup_investment_readiness" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200">
            <option value="">Select one</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Need guidance on costs">Need guidance on costs</option>
        </select>
        @error('setup_investment_readiness') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div>
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">How many children do you hope to care for within your first year?</label>
        <input wire:model="first_year_capacity" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Number" type="number" min="1">
        @error('first_year_capacity') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">What is the biggest challenge preventing you from starting your childminding business today?</label>
        <textarea wire:model="biggest_challenge" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Funding, registration requirements, confidence, training, marketing, understanding Ofsted requirements, etc."></textarea>
        <p class="mt-1 text-xs font-medium text-slate-600">This helps our consultants tailor recommendations and follow-up support.</p>
        @error('biggest_challenge') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2">
        <label class="mb-1.5 block text-xs font-extrabold uppercase tracking-wider text-black">Additional notes</label>
        <textarea wire:model="message" rows="3" class="w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm text-black focus:border-brand transition duration-200" placeholder="Any additional context for our team..."></textarea>
        @error('message') <span class="text-xs text-red-600 mt-1 block font-semibold">{{ $message }}</span> @enderror
    </div>

    <div class="md:col-span-2 mt-4">
        <button class="btn-brand w-full" type="submit">
            Submit Business Application
        </button>
    </div>
</form>

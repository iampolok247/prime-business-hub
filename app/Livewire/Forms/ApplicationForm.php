<?php

namespace App\Livewire\Forms;

use App\Events\LeadSubmitted;
use App\Models\Application;
use Livewire\Component;

class ApplicationForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $phone = '';
    public string $address = '';
    public string $childcare_experience = '';
    public string $currently_in_childcare = '';
    public string $childcare_qualifications = '';
    public string $experience = '';
    public string $goals = '';
    public string $timeline = '';
    public string $budget = '';
    public string $message = '';
    public string $property_status = '';
    public string $indoor_space = '';
    public string $outdoor_space = '';
    public string $journey_stage = '';
    public string $ofsted_registration_started = '';
    public string $paediatric_first_aid = '';
    public string $first_family_plan = '';
    public array $marketing_assets = [];
    public string $setup_investment_readiness = '';
    public string $first_year_capacity = '';
    public string $biggest_challenge = '';

    public function submit(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'address' => ['nullable', 'string', 'max:255'],
            'property_status' => ['nullable', 'string', 'max:255'],
            'indoor_space' => ['nullable', 'string', 'max:255'],
            'outdoor_space' => ['nullable', 'string', 'max:255'],
            'journey_stage' => ['nullable', 'string', 'max:255'],
            'ofsted_registration_started' => ['nullable', 'string', 'max:255'],
            'paediatric_first_aid' => ['nullable', 'string', 'max:255'],
            'first_family_plan' => ['nullable', 'string', 'max:5000'],
            'marketing_assets' => ['nullable', 'array'],
            'marketing_assets.*' => ['string', 'max:255'],
            'setup_investment_readiness' => ['nullable', 'string', 'max:255'],
            'first_year_capacity' => ['nullable', 'string', 'max:255'],
            'biggest_challenge' => ['nullable', 'string', 'max:5000'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        $validated['experience'] = trim(collect([
            'Property status: ' . ($validated['property_status'] ?: 'Not provided'),
            'Dedicated indoor space: ' . ($validated['indoor_space'] ?: 'Not provided'),
            'Outdoor play area: ' . ($validated['outdoor_space'] ?: 'Not provided'),
            'Current journey stage: ' . ($validated['journey_stage'] ?: 'Not provided'),
            'Ofsted registration started: ' . ($validated['ofsted_registration_started'] ?: 'Not provided'),
            'Paediatric first aid status: ' . ($validated['paediatric_first_aid'] ?: 'Not provided'),
            'First-year child capacity target: ' . ($validated['first_year_capacity'] ?: 'Not provided'),
        ])->filter()->implode("\n"));

        $validated['goals'] = trim(collect([
            $validated['first_family_plan'] ? 'First family attraction plan: ' . $validated['first_family_plan'] : null,
            'Current business assets: ' . (count($validated['marketing_assets']) ? implode(', ', $validated['marketing_assets']) : 'Not provided'),
        ])->filter()->implode("\n"));

        $validated['timeline'] = $validated['journey_stage'] ?: null;
        $validated['budget'] = $validated['setup_investment_readiness'] ?: null;
        $validated['message'] = trim(collect([
            $validated['biggest_challenge'] ? 'Biggest challenge: ' . $validated['biggest_challenge'] : null,
            $validated['message'] ? 'Additional notes: ' . $validated['message'] : null,
        ])->filter()->implode("\n"));

        unset(
            $validated['property_status'],
            $validated['indoor_space'],
            $validated['outdoor_space'],
            $validated['journey_stage'],
            $validated['ofsted_registration_started'],
            $validated['paediatric_first_aid'],
            $validated['first_family_plan'],
            $validated['marketing_assets'],
            $validated['setup_investment_readiness'],
            $validated['first_year_capacity'],
            $validated['biggest_challenge']
        );

        $application = Application::query()->create($validated);
        event(new LeadSubmitted('application', $application->id, $application->email));

        $this->reset();
        session()->flash('success', 'Your application has been submitted.');
    }

    public function render()
    {
        return view('livewire.forms.application-form');
    }
}

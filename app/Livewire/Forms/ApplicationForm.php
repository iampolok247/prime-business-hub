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

    public function submit(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'address' => ['nullable', 'string', 'max:255'],
            'childcare_experience' => ['nullable', 'string', 'max:255'],
            'currently_in_childcare' => ['nullable', 'string', 'max:255'],
            'childcare_qualifications' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:5000'],
            'goals' => ['nullable', 'string', 'max:5000'],
            'timeline' => ['nullable', 'string', 'max:255'],
            'budget' => ['nullable', 'string', 'max:255'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        $validated['experience'] = trim(collect([
            'Do you have childcare experience?: ' . ($validated['childcare_experience'] ?: 'Not provided'),
            'Do you currently work in childcare?: ' . ($validated['currently_in_childcare'] ?: 'Not provided'),
            'Have you completed any childcare qualifications?: ' . ($validated['childcare_qualifications'] ?: 'Not provided'),
            $validated['experience'] ? 'Additional background: ' . $validated['experience'] : null,
        ])->filter()->implode("\n"));

        unset(
            $validated['childcare_experience'],
            $validated['currently_in_childcare'],
            $validated['childcare_qualifications']
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

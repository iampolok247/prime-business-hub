<?php

namespace App\Livewire\Forms;

use App\Events\LeadSubmitted;
use App\Models\Consultation;
use Livewire\Component;

class ConsultationForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $phone = '';
    public string $subject = '';
    public string $message = '';

    public function submit(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:120'],
            'last_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $validated['name'] = trim($validated['first_name'] . ' ' . $validated['last_name']);
        unset($validated['first_name'], $validated['last_name']);

        $consultation = Consultation::query()->create($validated);
        event(new LeadSubmitted('consultation', $consultation->id, $consultation->email));

        $this->reset();
        session()->flash('success', 'Consultation request sent successfully.');
    }

    public function render()
    {
        return view('livewire.forms.consultation-form');
    }
}

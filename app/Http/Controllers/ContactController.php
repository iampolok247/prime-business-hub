<?php

namespace App\Http\Controllers;

use App\Events\LeadSubmitted;
use App\Http\Requests\StoreConsultationRequest;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(StoreConsultationRequest $request)
    {
        $consultation = Consultation::query()->create($request->validated());
        event(new LeadSubmitted('consultation', $consultation->id, $consultation->email));

        return back()->with('success', 'Thank you. We will contact you shortly.');
    }
}

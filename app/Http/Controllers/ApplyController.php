<?php

namespace App\Http\Controllers;

use App\Events\LeadSubmitted;
use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        return view('pages.apply');
    }

    public function store(StoreApplicationRequest $request)
    {
        $application = Application::query()->create($request->validated());
        event(new LeadSubmitted('application', $application->id, $application->email));

        return back()->with('success', 'Application received. We will review it shortly.');
    }
}

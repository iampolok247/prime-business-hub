<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ServiceRepositoryInterface;

class ServiceController extends Controller
{
    public function index(ServiceRepositoryInterface $serviceRepository)
    {
        $services = $serviceRepository->allPublished();

        return view('pages.services.index', compact('services'));
    }

    public function show(string $slug, ServiceRepositoryInterface $serviceRepository)
    {
        $service = $serviceRepository->findBySlug($slug);
        abort_unless($service, 404);

        return view('pages.services.show', compact('service'));
    }

    public function launch()
    {
        return view('pages.services.business-launch');
    }

    public function ofsted()
    {
        return view('pages.services.ofsted-preparation');
    }

    public function training()
    {
        return view('pages.services.training-pathway');
    }

    public function mentorship()
    {
        return view('pages.services.growth-mentorship');
    }
}

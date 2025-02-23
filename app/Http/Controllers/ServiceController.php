<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Inertia\Inertia;

class ServiceController extends Controller
{
    /**
     * @Discription :Display a listing of the services from the database.
     * @return mixed
     */
    public function index(Service $service): mixed
    {
        //get all the services from the database
        $services = $service->latest()->paginate(6);
        //return the services prop in an inertia vue page
        return Inertia::render('services/services', ['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}

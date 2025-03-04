<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ServiceController extends Controller
{

    /**
     * @Discription :Display a listing of the services from the database in the client side of the website.
     * @return mixed
     */

    public function services(Service $service): mixed
    {
        //get all the services from the database
        $services = $service->latest()->paginate(6);
        return Inertia::render('Client/services', ['services' => $services]);
    }

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
     * @Discription :Dispaly a form that the admin  can fill to add a new service to the
     * database.
     * @return mixed
     */
    public function ceateService(Service $service): mixed
    {
        //return the services prop in an inertia vue page

        return Inertia::render('services/serviceCreate');
    }


    /**
     * Store a newly created service in the database storage.
     * @return : null
     */

    public function store(StoreServiceRequest $request)
    {


        //validate the user requests
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image'=>'required'
        ]);

        //create the service in the database
        $service = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image
        ];

        //store the image in the storage

         // Check if the file exists in the request
         if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Store the file in the 'public' disk under the 'profile-pictures' directory
            $path = $file->store('services-pictures', 'public');

            $filePath = Storage::disk('public')->url($path);

        //store service
        $service['image'] = $filePath;
        Service::create($service);
        return redirect()->route('services.index');
    }

}

    /**
     * Display the specified resource.
     */
    public function show(Service $service, $id)
    {
        $service = $service->find($id);
        return Inertia::render('services/serviceShow', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service,$id)
    {
        //validate the service

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]
        );


         $service->find($id);
         //update the service
         $service->update($validated);
            return redirect()->route('services.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service,$id)
    {
        $service->find($id);
        $service->delete();
        return redirect()->route('services.index');
    }
}

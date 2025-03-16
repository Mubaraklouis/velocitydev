<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        // Validate the user requests
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'required' // Uncomment if the image is required
        ]);

        // Initialize the service array
        $service = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => null, // Default to null if no image is uploaded
        ];

        // Check if the file exists in the request
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Store the file in the 'services-pictures' directory on the S3 disk
            $path = $file->store('services-pictures', [
                "disk"=>"s3",
                "visibility"=>"public"

            ]);



            // Get the full URL of the uploaded file
            $filePath = Storage::disk('s3')->url($path);

            // Add the image URL to the service array
            $service['image'] = $filePath;
        }

        // Store the service in the database
        Service::create($service);

        // Redirect to the services index page
        return redirect()->route('services.index');
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

    public function editService($id, Service $service){
        $service = $service->find($id);
        return Inertia::render('services/editService', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateService(UpdateServiceRequest $request, Service $service,$id)
    {
        //validate the service

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]
        );

         $updateService =$service->find($id);

         //update the service
         $updateService->update($validated);

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

    public function multipleDelete(Request $request){

        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:services,id' // Ensure each ID exists in 'posts' table
        ]);


            // Delete records where the ID is in the given array
            Service::whereIn('id', $request->ids)->delete();

            return  Redirect::back();
}
}

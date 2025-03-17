<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = [
            'title'=>$request->title,
            'name'=>$request->name,
            'message'=>$request->message,
            'image'=>null

        ];

          // Check if the file exists in the request
          if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Store the file in the 'services-pictures' directory on the S3 disk
            $path = $file->store('testimonial-pictures', [
                "disk"=>"s3",
                "visibility"=>"public"

            ]);



            // Get the full URL of the uploaded file
            $filePath = Storage::disk('s3')->url($path);

            // Add the image URL to the service array
            $testimonial['image'] = $filePath;
        }

        Testimonial::create($testimonial);
        return redirect()->back()->with([
            'success'=>'Thank your for your feedback'
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return Inertia::render('Client/testimonials/testimonial');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}

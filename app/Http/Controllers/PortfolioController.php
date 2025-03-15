<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Portfolio $portfolio)
    {
              //get all the services from the database
              $projects = $portfolio->latest()->paginate(6);
              return Inertia::render('Client/portfolio/portfolios', ['projects' => $projects]);
    }



      /**
     * Display a listing of the resource.
     */
    public function viewProjects(Portfolio $portfolio)
    {
              //get all the services from the database
              $projects = $portfolio->latest()->paginate(6);
              return Inertia::render('portfolio/portfolio', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return Inertia::render('portfolio/createProject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        //validate the user requests
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image'=>'required'
        ]);

        //create the service in the database
        $project = [
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
        $project['image'] = $filePath;
        Portfolio::create($project);
        return redirect()->route('project.index');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio,$id)
    {
        $project = $portfolio->find($id);
        return Inertia::render('portfolio/portfolioShow', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio,$id)
    {
        $project = $portfolio->find($id);
        return Inertia::render('portfolio/editPortfolio', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio,$id)
    {
      //validate the service

      $validated=$request->validate([
        'title'=>'required',
        'description'=>'required',
    ]
    );

     $updateProject =$portfolio->find($id);

     //update the service
     $updateProject->update($validated);

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio,$id)
    {
        $portfolio->find($id);
        $portfolio->delete();
        return redirect()->route('project.index');
    }

    public function multipleDelete(Request $request){

        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer|exists:services,id' // Ensure each ID exists in 'posts' table
        ]);


            // Delete records where the ID is in the given array
            Portfolio::whereIn('id', $request->ids)->delete();

            return  Redirect::back();
}
}

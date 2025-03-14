<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class aboutController extends Controller
{
    public function aboutPage(){
        $content = About::all();

        return Inertia::render('Client/about/about',
    [
        'content'=>$content
    ]
);
    }

    public function addAbout(Request $request){
        $about = [
            "content"=>$request->content
        ];

        // Check if a row already exists
if (DB::table('abouts')->exists()) {
    return redirect()->back()->with('error', 'about already exist');
}

// Insert the new row
DB::table('abouts')->updateOrInsert($about);

        return redirect()->back()->with('success', 'about created successfully');

    }

    public function updateAbout(Request $request){


     $aboutContent = [
        'content' => $request->content

     ];

        $about = About::find(1);

        $about->update($aboutContent);
        return redirect()->back()->with('success', 'about updated successfully');

    }

    public function delete(){
        $about = About::find(1);
        $about->delete();
        return redirect()->back()->with('success', 'about delete successfully');

    }
}

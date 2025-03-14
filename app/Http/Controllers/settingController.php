<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Inertia\Inertia;

class settingController extends Controller
{
    public function aboutForm(){

       return  Inertia::render('about/aboutform');
    }

    public function EditaboutForm(){

        $content = About::find(1);

        return  Inertia::render('about/EditAboutform',
    [
        'content'=>$content
    ]);
     }
}

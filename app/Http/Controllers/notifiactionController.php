<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class notifiactionController extends Controller
{
public function sendNotifications(){
    $user = Auth::user();

    $notifications = $user->notifications;

    return Inertia::render('notification/notification',[
        'notifications' => $notifications
    ]);
}
}

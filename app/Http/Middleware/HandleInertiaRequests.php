<?php

namespace App\Http\Middleware;

use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->last_seen = now();
            $user->save();
        }

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),

            ],
            "usersCount"=>User::count(),
            "contactsCount"=>Contact::count(),
            'flash' => [
                'success' => $request->session()->get('success'),
                'error' => $request->session()->get('error'),
            ],
            'testimonialsFirstBatch'=>Testimonial::latest()->take(4)->get(),
            'testimonialsSecondBatch'=>Testimonial::latest()->skip(5)->take(4)->get(),
            'testimonialsThirdBatch'=>Testimonial::latest()->skip(10)->take(5)->get()
        ];

    }
}

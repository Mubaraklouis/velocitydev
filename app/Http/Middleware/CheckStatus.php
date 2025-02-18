<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckStatus
{
    public function handle($request, Closure $next)
    {
        Log::info('Authenticate middleware executed.');

        if (!Auth::check()) {
            return redirect('/login');
        }

    }
}


<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'isOnline'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function isOnline()
    {
        // dd($this->last_seen->diffInMinutes());




        $timestamp = request()->user()->last_seen;

        $time = Carbon::parse($timestamp);

        // Calculate the difference in seconds (signed difference)
        $diffInSeconds = Carbon::now()->diffInSeconds($time, false);

        // Convert seconds to minutes and take the absolute value
        $diffInMinutes = abs($diffInSeconds / 60);

        // Format to 3 decimal points
        $formattedMinutes = number_format($diffInMinutes, 3);

        // dd($formattedMinutes);

   if($formattedMinutes < 1){
    return true;
   }
   else{
    return false;
   }
    }
}

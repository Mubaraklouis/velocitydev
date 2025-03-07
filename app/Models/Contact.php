<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */


  public  $fillable = [
        'full_name',
        'email',
        'phone',
        'message',
        'country',
        'company'
    ];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $fillable=[
        'name',
        'image',
        'title',
          'message'
    ];
    /** @use HasFactory<\Database\Factories\TestimonialFactory> */
    use HasFactory;
}

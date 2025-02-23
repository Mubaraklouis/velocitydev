<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'image'];
    
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $fillable=[
        'image',
        'title',
        'description'
    ];
    /** @use HasFactory<\Database\Factories\PortfolioFactory> */
    use HasFactory;
}

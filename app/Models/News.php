<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'slug',
        'headline',
        'body',
        'image_link',

    ];
    protected $casts =[
        'date' =>'date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_name',
        'movie_description',
        'movie_gener',
    ];
}

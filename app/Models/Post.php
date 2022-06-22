<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Aggiungo la fillable
    protected $fillable = ['title', 'content', 'slug', 'cover'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchModel extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'primary_director', 'year_release', 'genre'];
}

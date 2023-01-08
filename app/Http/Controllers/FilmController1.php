<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController1 extends Controller
{
    use HasFactory;
    protected $fillable = [
        'Title',
        'Director',
        'Writer',
        'Producers',
        'Stars',
        'Rating',
        'Popularity',
        'RunningTime',
        'Year',
        'Country',
        'Budget',
    ];

    protected $release = [
        'Year' => 'datetime',
    ];
}

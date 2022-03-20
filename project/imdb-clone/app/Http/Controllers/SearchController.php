<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\SearchModel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{
    public function search()
    {
        return view('search');
    }
    public function findSearch()
    {
        $search = Input::get("search");
        $movies = SearchModel::where('film_name', 'LIKE', '%' . $search . '%')->get();
        if (count($movies) > 0)
            return view('search')->withDetails($movies)->withQuery($search);
        else
            return view('search')->withMessage('No matches found. Try again!');
    }
}

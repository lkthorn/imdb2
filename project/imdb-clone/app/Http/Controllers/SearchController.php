<?php

namespace App\Http\Controllers;

use App\Models\SearchModel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{
    public function search(Request $request){
        
        $search_text = $_GET['search'];
    
        
        $movies = SearchModel::query()
            ->where('title', 'LIKE', "%{$search_text}%")
            ->orWhere('primary_director', 'LIKE', "%{$search_text}%")
            ->get();
    
       
        return view('search');
    }
}
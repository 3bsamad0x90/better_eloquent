<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Posts::all();
        // $posts = Posts::with('user')->get();
//======================================================================================================//
        //is a dangerous way to do it because it will load all the data from the database and define the user property in post modal, it will load all the user data from the database every time we load the post data, so it is not a good way to do it. and performance issues will be there. so we will use the load method to load the user data only when we need it.
        //$posts = Posts::all();
        // $posts -> load('user');
//======================================================================================================//
        // $posts = Posts::all();
        //to prevent N+1 Query So We download the:
        // composer require beyondcode/laravel-query-detector --dev
        // it show the solution to the problem to use with():
        // $posts = Posts::with('user')->get();
//======================================================================================================//
        $posts = Posts::with('user')
                    ->withCount('ratings')
                    ->withAvg('ratings', 'rating')
                    ->withMax('ratings', 'rating')
                    ->withMin('ratings', 'rating')
                    ->get();
        return view('posts.index', compact('posts'));
    }
}

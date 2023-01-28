<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // $posts = Posts::all();
        $posts = Posts::with('user')->get();
        return view('posts.index', compact('posts'));
    }
}

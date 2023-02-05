<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  index(){
        // $users = User::all();
        // $users = User::with('posts')->get();
        // $users = User::withCount('posts')->get();
        // $users = User::with(['posts', 'comments'])->get();
        $users = User::withCount (['posts', 'comments'])->get();
        return view('users.index', compact('users'));
    }
}

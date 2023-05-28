<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $times = Booking::query()
        ->whereHas('device.operatingSystem', function($query){
            $query->where('operating_systems.name', 'IOS');
        })
        ->join('devices', 'boohings.devices.id', '=', 'devices.id')
        ->join('operating_systems', 'devices.operating_system_id', '=', 'operating_systems.id')
        ->where('operating_systems.name', 'ios')
        ->selectRaw('books.form, books.to, count(books.id) as books_count')
        ->groupBy('books.form')
        ->groupBy('books.to')
        ->orderBy('books_count', 'desc')
        ->take(5)
        ->get();

        return view('home.index', compact('times'));
    }
}

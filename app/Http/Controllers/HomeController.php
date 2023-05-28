<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $times = Booking::query()
        ->whereHas('device.operating_system', function($query){
            $query->where('operating_systems.name', 'a');
        })
        // ->join('devices', 'boohings.devices.id', '=', 'devices.id')
        // ->join('operating_systems', 'devices.operating_system_id', '=', 'operating_systems.id')
        // ->where('operating_systems.name', 'ios')
        ->selectRaw('bookings.from, bookings.to, count(bookings.id) as bookings_count')
        ->groupBy('bookings.from')
        ->groupBy('bookings.to')
        ->orderBy('bookings_count', 'desc')
        ->take(10)
        ->get();
        return view('home.index', compact('times'));
    }
}

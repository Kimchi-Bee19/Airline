<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index() {
        $flights = Flight::orderBy('departure_time')->get();
        return view("flights", ['flights' => $flights]);
    }
}

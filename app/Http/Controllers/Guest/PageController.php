<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function todayTrains()
    {

        $trains = Train::where('departure_date', '>=', date('Y-m-d'))->get();
        return view('home', compact('trains'));
    }
}

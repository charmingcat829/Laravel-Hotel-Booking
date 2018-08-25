<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function index()
    {
        $hotels = Hotel::latest()->get();
        return view('hotels.index');
    }
}

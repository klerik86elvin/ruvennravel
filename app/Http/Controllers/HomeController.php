<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\Transport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Tour::all();
        $transports = Transport::all();
        $hotels = Hotel::all();
        $hotelsPageCount = Hotel::all()->count();
        $gallery = AboutUs::paginate(6);
//        return  $data[0]->main_image;
        return view('welcome',compact('data', 'transports', 'hotels','hotelsPageCount','gallery'));
    }
}

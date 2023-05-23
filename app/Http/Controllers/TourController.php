<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function get($id)
    {
        $tour = Tour::findOrFail($id);
        return view('components.tour-detail', compact('tour'));
    }
}

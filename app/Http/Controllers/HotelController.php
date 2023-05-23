<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getAll()
    {
        return Hotel::paginate(3);
    }


}

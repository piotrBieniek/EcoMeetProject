<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;

class CityController extends Controller
{
    public function show()
    {
        $cities = City::get();
        return view('selectCity', compact('cities'));    
    }
}

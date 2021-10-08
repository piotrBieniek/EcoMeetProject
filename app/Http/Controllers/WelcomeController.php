<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class WelcomeController extends Controller
{
    //
    public function welcome()
    {
        $quotes = Quote::get();

        for ($i = 0; $i < sizeof($quotes); $i++) {
            $a = rand(0,sizeof($quotes)-1);
            $j = $quotes[$i];
            $quotes[$i] = $quotes[$a];
            $quotes[$a] = $j;
        }     

        return view('welcome', compact('quotes'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact()
    {
        $name = 'wandi';
        $hp = '0822379362';
        return view('contact', compact('name','hp'));
    }
}

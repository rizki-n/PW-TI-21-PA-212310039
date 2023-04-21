<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function MainMenu(){
        return view('Home');
    }

    public function Contact(){
        return view('Contact');
    }

    public function Tracking(){
        return view('Tracking');
    }

    public function MData(){
        return view('MData');
    }
}

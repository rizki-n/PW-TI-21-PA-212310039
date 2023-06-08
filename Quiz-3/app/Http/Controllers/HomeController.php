<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310039;
        $students[] = array("name"=>"Muhammad Bawaz", "NPM"=>"212310039", "Prodi"=>"TI");
        $students[] = array("name"=>"Muhammad Pirja", "NPM"=>"212310060", "Prodi"=>"TI");
        $students[] = array("name"=>"Muhammad Firjaa", "NPM"=>"212310040", "Prodi"=>"TI");
        $students[] = array("name"=>"Muhammad Matthew", "NPM"=>"212310069", "Prodi"=>"TI");
        $students[] = array("name"=>"Muhammad BuzzlightYear", "NPM"=>"212312077", "Prodi"=>"TI");
        $data['students'] = $students;
        return view('DaftarMahasiswa')->with("data",$data);
    }
    
    public function identity(){
        return "Welcome to Profile page sub menu identity";
    }
    
    public function family(){
        return "Welcome to Profile page sub menu family";
    }
    

}
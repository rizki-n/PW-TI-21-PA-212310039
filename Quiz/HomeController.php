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
        $students[] = array("npm"=>212310001, "name"=>"Muhammad Bawaz", "gender"=>"Lakik", "Alamat"=>"Ciluer");
        $students[] = array("npm"=>212310002, "name"=>"Muhammad Fauz", "gender"=>"Lakik", "Alamat"=>"Cisarua");
        $students[] = array("npm"=>212310003, "name"=>"Ngunyen Vahng Tungh", "gender"=>"Lakik", "Alamat"=>"Cobinong");
        $students[] = array("npm"=>212310004, "name"=>"Muhammad Von Munic", "gender"=>"Lakik", "Alamat"=>"Ciberlin");
        $students[] = array("npm"=>212310001, "name"=>"Muhammad Ulric", "gender"=>"Lakik", "Alamat"=>"Cimoscow");
        $data['students'] = $students;
        return view('profile')->with("data",$data);
    }
    
    public function identity(){
        return "Welcome to Profile page sub menu identity";
    }
    
    public function family(){
        return "Welcome to Profile page sub menu family";
    }
    

}

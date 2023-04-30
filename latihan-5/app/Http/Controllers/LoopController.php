<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    public function loop(){
        $data = array();
        $data['title'] = 'Blade Directive';
        $data['npm'] = 212310039;
        $skil[] = array('course'=>'Matematik', 'type'=>'diskrit', 'rate'=>4);
        $skil[] = array('course'=>'Matematik', 'type'=>'aljabar', 'rate'=>3);
        $skil[] = array('course'=>'Basis Data', 'type'=>'DDL', 'rate'=>2);
        $skil[] = array('course'=>'B Inggreis', 'type'=>'Speaking', 'rate'=>1);
        $data['skil'] = $skil;
        return view('looping') -> with('data', $data);
    }
}

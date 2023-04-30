<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310039;
        $user[] = array("email"=>'rizki@gmail.com', "fullname"=>"Muhammad Rizki", 'address'=>'Cimahpar', 'birthdate'=>'2002-17-09',"gender"=>"L", 'phone'=>'0812345678910');
        $user[] = array("email"=>'daniel@gmail.com', "fullname"=>"Daniel", 'address'=>'Cimahi', 'birthdate'=>'2003-17-09',"gender"=>"P", 'phone'=>'0812345678910');
        $data['user'] = $user;
        return view('profile')->with("data",$data);
       // $users = Users::latest()->paginate(5);
       // return view('modules.pageuser.blade.php',compact('users'))
       //        ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $users = new Users();
        $data['user'] = $users->getByCondition(array('id'=>$request->id))->first();

        return view('modules.master-data.products.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }
}
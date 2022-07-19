<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    public function users()
    {
        $users = DB::select('select * from users');

        return view('list', ['users' => $users]);
    }

    public function user($id)
    {
        $users = DB::select('select * from users where id='.$id);

        return view('list', ['users' => $users]);
    }

    public function update(Request $request)
    {

        DB::insert("UPDATE `baseelement`.`users` SET `name`='$request->name',`surname`='$request->surname',`email`='$request->email',`workphone`='$request->workphone' ,`mobilephone`='$request->mobilephone',`address`='$request->address',`postcode`='$request->postcode',`country`='$request->country',`birthday`='$request->birthday',`services`='$request->services' WHERE  `id`=$request->id;");
//
        return redirect('list')->with('status', 'Data Updated');
    }

    public function delete(Request $request)
    {
        DB::delete("DELETE FROM `baseelement`.`users` WHERE  `id`=$request->id;");
        return redirect('list')->with('status', 'Data Updated');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InsertController extends Controller
{
    //
    public function insertform(){
        return view('stud_create');
    }
    public function insert(Request $request){
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $data=array('name'=>$name,"surname"=>$surname,"email"=>$email);
        DB::table('users')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}

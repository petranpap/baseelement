<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function store(Request $request)
    {


        DB::insert('INSERT INTO `baseelement`.`users` (`name`, `surname`, `email`, `salary`, `workphone`, `mobilephone`, `address`, `postcode`, `country`, `birthday`, `services`) VALUES (?,?,?,?,?,?,?,?,?,?,?)',
            [$request->name, $request->surname, $request->email, $request->salary, $request->workphone, $request->mobilephone, $request->address, $request->postcode, $request->country, $request->birthday, $request->services]);
//
        return redirect('create')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}

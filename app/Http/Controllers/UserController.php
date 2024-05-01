<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //index
    public function index(){

        $users= User::where("name","like","%".request('name')."%")
        ->orderBy('id','desc')
        ->paginate(5);
        return view('pages.users.index',compact('users'));
    }

    public function create(){
        return view('pages.users.create');
    }
}

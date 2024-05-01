<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //index
    public function index(){

        $users= User::paginate(5);
        return view('pages.users.index',compact('users'));
    }
}

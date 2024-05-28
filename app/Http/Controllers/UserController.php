<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function store(Request $request){
        $request->validate(
            ['name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' =>'required',
            ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        return redirect()->route('users.index')->with('susscess','User created successfully');

    }

    public function edit(User $user){
        return view('pages.users.edit',compact('user'));
    }

    public function update(Request $request,User $user){
        $request->validate(
            ['name' => 'required',
            'email' => 'required|email',
            'role' =>'required',
            ]
        );

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        if($request->password){
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('users.index')->with('susscess','User updated successfully');

    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')->with('susscess','User deleted successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index(User $user)
{
  return view('user.index')->with('user', User::all());
}

public function edit(User $user)
{
    // return view('profiles', ['user' => $user]);
    return view('profiles')->with('user', auth()->user());
}

public function update(Request $request)
{
    $user = auth()->user();

    $user->update([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,

    ]);

    session()->flash('success','details updated successfully');
    return redirect()->back();
  
}
}

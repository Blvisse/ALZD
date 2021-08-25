<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;

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
    if($request->hasFile('avatar'))
    {

        $avatar=$request->file('avatar');
        $filename=time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename));
        $user = auth()->user();
        $user->avatar = $filename;
        // 'name'=>$request->name,
        // 'email'=>$request->email,
        // 'password'=>$request->password,
        // $avatar=>$request->avatar,
    }
    
    $user = auth()->user();

    $user->update([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        // $avatar=>$request->avatar,

    ]);

    session()->flash('success','details updated successfully');
    return redirect()->back();
  
}
}

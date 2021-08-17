<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function show($user_id)
    {
        $user = User::find(1);
        $user_profile=Profie::info($user_id)->first();

        return view('profiles.show',compact('profile','user'));
    }
    public function profile()
    {
        return $this->hasOne('profile');
    }
}

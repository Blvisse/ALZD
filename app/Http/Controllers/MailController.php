<?php


namespace App\Http\Controllers;
use App\Mail\SignupEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public static function sendSignupEmail($name,$medical_id,$email,$verification_code){
        $data=[

            'name'=>$name,
            'medical_id'=>$medical_id,
            'verification_code'=>$verification_code

        ];
        Mail::to($email)->send(new signupEmail($data));
    }
}

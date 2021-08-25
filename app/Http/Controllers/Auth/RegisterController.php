<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

     public function register(Request $request)
     {   $validator = Validator::make($request->all(), [
        'email' => 'required|unique:users',
        'password' => 'required|string'

     ]);
        if($validator->fails())
         {
            session()->flash('alert-danger', 'Email already exists !');
               return redirect()->back();
        }

        // $path='users/images/';
        // $fontPath=public_path('fonts/Olicy.ttf');
        // $char=strtoupper($request->name[0]);
        // $newAvatarName=rand(12,34353).time().'_avatar.png';
        // $dest=$path.$newAvatarName;

        // $createAvatar = makeAvatar($fontPath,$dest,$char);
        // $picture = $createAvatar == true ? $newAvatarName : '';




         $user=new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->verification_code=sha1(time());
         $user->medical_id= $request->medical_id;
         $user->picture = $picture;
         $user->save();

         #check if user is created

         if ($user != null)
         {
             #if user is not null we send mail
             #redirect to verification page
             #show message email sent with verification link
            MailController::sendSignupEmail($user->name,$user->medical_id,$user->email,$user->verification_code);

            return redirect()->back()->with(session()->flash('alert-success','Account created check email for verification link'));
             
         }

         #redirect if no user exists
         return redirect()->back()->with(session()->flash('alert-danger','System Error'));



     }
     
     public function verifyUser(Request $request)
     {
        #get query parameter from class 
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        #such through database to get user verfication code
        $user = User::where(['verification_code' => $verification_code])->first();

        if($user != null)
        {
            $user->is_verified =1;
            $user->save();
            return redirect()->route('login')->with(session()->flash('alert-success','Your account is now verified, Please Login '));


        }
        return redirect()->route('login')->with(session()->flash('alert-danger','Invalid verification, Retry'));

     }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'firstname' => 'required|min:4|max:20',
            'lastname' => 'required|min:4|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20',
            'confirm' => 'required|same:password',
            'dob' => 'required|before:'.now(),
            'terms' => 'required',
        ],[
            'firstname.required' => 'First name is required!',
            'firstname.min' => 'First name must be at least 4 characters!',
            'firstname.max' => 'First name must be less than or equals to 20 characters!',
            'lastname.required' => 'Last name is required!',
            'lastname.min' => 'Last name must be at least 4 characters!',
            'lastname.max' => 'Last name must be less than or equals to 20 characters!',
            'confirm.required' => 'Please Re-type your password!',
            'confirm.same' => 'Password mismatch!',
            'dob.required' => 'Please fill your date of birth!',
            'dob.before' => 'Date of Birth must be a valid date!',
            'terms.required' => 'You must agree to the terms and conditions!'
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'register')->withInput();
        }

        $newUser = new User();
        $newUser->first_name = $request->input('firstname');
        $newUser->last_name = $request->input('lastname');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->date_of_birth = $request->input('dob');
        $newUser->is_admin = false;
        $newUser->image_url = 'assets/profile.gif';
        $newUser->created_at = now();
        $newUser->save();

        notify()->success('User Created Successfully :D');
        return redirect()->back();
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);

        if($validator->fails()){
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator, 'login')->withInput();
        }

        if(!Auth::attempt($validator->validated(), $request->input('remember'))){
            notify()->error('Invalid Account!');
            return redirect()->back();
        }else{
            notify()->success('Login Successful!');
            return redirect()->back();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }

    public function index_profile(){
        return view('pages.profile.profile');
    }


}
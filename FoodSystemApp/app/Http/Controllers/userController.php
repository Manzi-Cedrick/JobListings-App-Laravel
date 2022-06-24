<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class userController extends Controller
{
    //
    public function createForm(){
        return view('users.register');
    }
    public function insertUser(Request $request){
        $formFields = $request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email'],
            'password'=>['required','confirmed','min:6'],
        ]);
        //hash the password
        $formFields['password']= bcrypt($formFields['password']);
        //create the user
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','User signed in Okay');
    }
}

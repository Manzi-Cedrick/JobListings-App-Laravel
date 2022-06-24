<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

// use Illuminate\Foundation\Auth\User;

class userController extends Controller
{
    //
    public function createForm(){
        return view('users.register');
    }
    public function insertUser(Request $request){
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
        ]);
        //hash the password
        $formFields['password']= bcrypt($formFields['password']);
        //create the user
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','User signed in Okay');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','User signed out');
    }
    public function login(){
        return view('users.login');
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if ( auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message','User signed In');
        }else{
            return back()->withErrors(['email'=>'Invalid email credentials'])->onlyInput('email');
        }
    }
}

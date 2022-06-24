<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function createForm(){
        return view('users.register');
    }
    public function insertUser(){
        
    }
}

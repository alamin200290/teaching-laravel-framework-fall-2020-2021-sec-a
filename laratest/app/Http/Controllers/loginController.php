<?php

namespace App\Http\Controllers;

class loginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(){
    	echo "posted!";
    }
}

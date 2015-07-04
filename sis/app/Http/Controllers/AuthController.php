<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
    	$username = $request->input('username');
    	$password = $request->input('password');
    	if (Auth::attempt(['username' => $username, 'password' => $password])) {
    		return redirect('/')->with(['systemInfoMsg' => 'Login Successfull.']);
    	}
    	return redirect('/auth/login')->with(['systemErrorMsg' => 'Username and Password combination is invalid.']);
    }
}

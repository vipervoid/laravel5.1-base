<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('first_name')->get();
    	return view('users.index', ['users' => $users]);
    }

    public function add()
    {
    	return view('users.add', ['user' => new User]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'first_name' 	=> 'required',
    		'last_name'		=> 'required',
    		'email'			=> 'required|email',
    		'password'		=> 'required|same:confirm_password'
    	]);

    	$user = new User;
    	$user->first_name 	= $request->first_name;
    	$user->last_name 	= $request->last_name;
    	$user->email 		= $request->email;
    	$user->username 	= $request->username;
    	$user->password 	= bcrypt($request->password);
    	$user->save();
    	
    	return redirect('/users')->with(['systemInfoMsg' => 'New User was created.']);
    }

    public function edit($id)
    {
    	$user = User::findOrFail($id);
    	return view('users.add', ['user'  => $user]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'first_name' 	=> 'required',
    		'last_name'		=> 'required',
    		'email'			=> 'required|email'
    	]);

    	if (!empty($request->input('password'))) {
    		$this->validate($request, [
    			'password' => 'required|same:confirm_password'	
    		]);
    	}

    	$user = User::findOrFail($id);
    	$user->first_name 	= $request->first_name;
    	$user->last_name 	= $request->last_name;
    	$user->email 		= $request->email;
    	$user->username 	= $request->username;
		if (!empty($request->input('password'))) {
    		$user->password = bcrypt($request->password);
		}
    	$user->save();
    	return redirect('/users')->with(['systemInfoMsg' => 'User Info updated.']);
    }
}

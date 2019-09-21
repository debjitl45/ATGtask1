<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class WebServicesController extends Controller
{
    public function create(Request $request)
    {
    	$users = new User();
    	$users->name = $request->input('name');
    	$users->email = $request->input('email');
    	$users->pincode = $request->input('pincode');

    	$users->save();
    	return Session::flash('success','Email Sent');

    }
    public function show(Request $request)
    {
    	$users = User::all();
    	return response()->json($users);
    }
}

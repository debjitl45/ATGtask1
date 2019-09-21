<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function receiveData(Request $request)
    {
    	$messages =[
    		'required' => 'This :attribute field is required'
    	];

    	$Validator = Validator::make(
    		$request->all(),
    		[
    			'person_name'   =>  'required|string|min:3|max:10',
    			'person_email'  => 'required|email',
    			'person_pincode' => 'required|string|max:6|min:6'
    		],
    		$messages

    	);

    	if($Validator-> fails())
    	{
    		$Response = $Validator->messages();
       	}
    	else
    	{
    		$Response = ['success' => 'Submitted Successfully!'];
    	}
    	return response()->json($Response,200);
    } 
}

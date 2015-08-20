<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\CreateEntryRequest;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entry;
use Request;

class HomeController extends Controller
{
    public function index()
	{
		return view('tab');
	}

	public function postIndex(CreateEntryRequest $request)
	{
		$input = $request->all();
		Entry::create($input);
		return response()->json([
                                  'status' => 'OK'
                                , 'message' => 'Formul nu a fost completat'
                                ]);
	}

	public function send(SendEmailRequest $request)
	{
	    $input = $request->all();
	    dd($input);

	    Mail::send('emails.email', array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('user_message')
	        ), function($message)
	    {
	        $message->from('*********@gmail.com');
	        $message->to('********@gmail.com', 'Admin')->subject('Client Inquiry');
	    });

    	return response()->json([
    							  'status' => 'OK'
                                , 'message' => 'Formul nu a fost completat'
                                ]);
	}
}

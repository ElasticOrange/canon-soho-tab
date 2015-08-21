<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\CreateEntryRequest;
use App\Http\Requests\SendEmailRequest;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entry;
use Request;
use Mail;

class HomeController extends Controller
{
    public function getIndex()
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

	public function postShareByEmail(SendEmailRequest $request)
	{
	    $data = $request->all();

	    // dd($data);

	    $myemail = $request->get('myemail');
	    $hisemail = $request->get('hisemail');
		$body = nl2br($request->get('message'));

	    Mail::send('emails.share', ['body' => $body], function ($message) use ($myemail, $hisemail, $body) {
            $message->from($myemail);
            $message->to($hisemail);
            $message->subject('Soluțiile Canon pentru un business flexibil');
        });

    	return response()->json([
    							  'status' => 'OK'
                                , 'message' => 'Formularul nu a fost completat'
                                ]);
	}
}

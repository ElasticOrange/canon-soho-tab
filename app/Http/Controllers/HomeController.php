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
		// dd($input);
		Entry::create($input);
		return response()->json([
                                  'status' => 'OK'
                                , 'message' => 'Formul nu a fost completat'
                                ]);
	}
}

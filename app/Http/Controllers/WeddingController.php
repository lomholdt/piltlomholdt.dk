<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    /**
     * Show the main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->auth === 'piltlomholdt2017') {
        	return view('wedding');
        }
        return redirect('/')->with('error', 'Du har desværre ikke tilladelse til at se denne side.');
    }
}

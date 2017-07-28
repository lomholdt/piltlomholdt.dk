<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;

class WeddingController extends Controller
{
    /**
     * Show the main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(strtolower($request->auth) === 'piltlomholdt2017') {
        	$wishes = Wish::all();
        	return view('wedding', compact('wishes'));
        }
        return redirect('/')->with('error', 'Du har desværre ikke tilladelse til at se denne side.')->with('auth', $request->auth);
    }
}

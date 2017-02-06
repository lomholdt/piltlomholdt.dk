<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;

class WishController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishes = Wish::all();

        return view('wishes.index', compact('wishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wish = new Wish;

        $this->validate(
            request(),
            [
                'name' => 'required',
            ]
        );

        $wish->name = request('name');
        $wish->description = request('description');
        $wish->link = request('link');
        $wish->save();

        session()->flash('wish-message', 'Dit ønske er gemt');

        return redirect('/wishes/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wish = Wish::find($id);
        return view('wishes.edit', compact('wish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wish = Wish::find($id);

        $this->validate(
            request(), 
            [
                'name' => 'required',
            ]
        );

        $wish->name = request('name');
        $wish->description = request('description');
        $wish->link = request('link');
        $wish->save();

        session()->flash('wish-message', 'Dit ønske er opdateret');

        return redirect('/wishes/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wish::destroy($id);
        return redirect('/wishes/index')->with('message', 'Dit ønske blev slettet');
    }
}

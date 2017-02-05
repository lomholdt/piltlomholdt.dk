<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rsvp;

class RsvpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $rsvp = new Rsvp;

        $this->validate(
            request(), 
            [
                'email' => 'required',
                'name' => 'required',
                'is_comming' => 'required'
            ]
        );

        $rsvp->email = request('email');
        $rsvp->name = request('name');
        $rsvp->is_comming = request('is_comming');
        $rsvp->message = request('message');
        $rsvp->save();

        session()->flash('message', 'Tak for din tilmelding');

        return redirect('/home?auth=piltlomholdt2017');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

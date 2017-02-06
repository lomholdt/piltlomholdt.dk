@extends('layouts.layout')

@section('content')

@include('layouts.admin-nav')

<div class="container">
	<h1>RSVP</h1>
	<p>Svar: <strong>{{ count($rsvps) }}</strong></p>
	<p>Tilmeldte: <strong>{{ count($rsvps->filter(function($rsvp){ return $rsvp->is_comming; })) }}</strong></p>
	<p>Frameldte: <strong>{{ count($rsvps->filter(function($rsvp){ return !$rsvp->is_comming; })) }}</strong></p>

	<hr>

	@foreach($rsvps as $rsvp)
		<div class="col-xs-4">
			<h3>{{ $rsvp->email }}</h3>
			<p>{{ $rsvp->name }} {{ $rsvp->is_comming ? 'kommer' : 'kommer ikke' }}</p>
			<p><i>{{ $rsvp->message }}</i></p>
			<p>{{ $rsvp->created_at }}</p>

		</div>	
	@endforeach
</div>

@endsection

@extends('layouts.layout')

@section('content')

@include('layouts.admin-nav')

<div class="container">
	<h1>Sangønsker</h1>
	
	@foreach($songs as $song)

		<div>
			<p>
				<strong>{{ $song->id }}</strong> 
				{{ $song->artist }} - {{ $song->name }}
			</p>
		</div>

	@endforeach

</div>

@endsection
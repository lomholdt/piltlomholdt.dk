@extends('layouts.layout')

@section('content')

@include('layouts.admin-nav')

<div class="container">
	<h1>Opdater ønske</h1>
	<form method="POST" action="/wishes/{{ $wish->id }}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Ønske" value="{{ $wish->name }}">
		</div>		
		<div class="form-group">
			<input type="text" name="link" class="form-control" placeholder="Link" value="{{ $wish->link }}">
		</div>
		<div class="form-group">
			<textarea name="description" rows="10" class="form-control" placeholder="Beskrivelse, Links etc.">{{ $wish->description }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Opdater Ønske</button>
	</form>
</div>

@endsection
@extends('layouts.layout')

@section('content')

@include('layouts.admin-nav')

<div class="container">
	<h1>Opret Ønske</h1>
	@include('errors')
	<form method="POST" action="/wishes/store">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Ønske" required>
		</div>		
		<div class="form-group">
			<input type="text" name="link" class="form-control" placeholder="Link">
		</div>
		<div class="form-group">
			<textarea name="description" id="" rows="10" class="form-control" placeholder="Eventuel kort beskrivelse"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Opret Ønske</button>
	</form>

</div>

@endsection

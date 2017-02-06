@extends('layouts.layout')

@section('content')

@include('layouts.admin-nav')

<div class="container">
	<h1>Ønsker</h1>
    @if (session('message'))
	    <div class="alert alert-success message">
	        {{ session('message') }}
	    </div>
	@endif
	<a class="btn btn-primary" href="/wishes/create">Opret Nyt Ønske</a>
	<p></p>
	<table class="table">
		<tr>
			<th>Navn</th>
			<th>Beskrivelse</th>
			<th>Link</th>
			<th></th>
		</tr>
	@foreach($wishes as $wish)
		<tr>
			<td>{{ $wish->name }}</td>
			<td>{{ $wish->description }}</td>
			<td>@if(strlen($wish->link) > 0)<a href="{{ $wish->link }}">Link</a> @else <span>-</span> @endif</td>
			<td class="align-right button-group">
				<form action="/wishes/{{ $wish->id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<div class="btn-group" role="group">
						<a class="btn btn-success" href="/wishes/{{ $wish->id }}/edit">Rediger</a>
						<button type="submit" class="btn btn-warning">Slet</button>
					</div>
				</form>
			</td>			
		</tr>
	@endforeach
	</table>
</div>

@endsection
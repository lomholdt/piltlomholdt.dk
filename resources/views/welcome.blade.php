@extends('layouts.layout')

@section('content')

<style>body { padding:0; }</style>
<div class="wrapper auth">
	<div class="container-fluid">
		<div class="row" id="welcome">
			<div class="col-xs-offset-3 col-sm-offset-3 col-sm-6 col-xs-6 auth-row">
				<h1 id="auth-text">Camilla &amp; André 2017</h1>
				@if(session('error'))
				<div class="alert alert-warning error">
					{{ session('error') }}
				</div>
				@endif
				<form action="/home" method="GET">
					<input type="text" name="auth" class="form-control" placeholder="Kode">
					<div class="submit-button">
						<button type="submit" class="btn">Log ind</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
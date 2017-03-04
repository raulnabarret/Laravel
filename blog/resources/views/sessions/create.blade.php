@extends('layout')

@section('content')

	<div class="col-md-8">
		
		<h1>Sign In</h1>

		<form action="/signin" method="POST">
			
			{{ csrf_field() }}

			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" id="email" name="email" required="true">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password" required="true">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>

			@include('partials.errors')

		</form>

	</div>

@endsection
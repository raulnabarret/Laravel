@extends('layout')

@section('content')

	<div class="col-sm-8">
		
		<h1>Register</h1>

		<form action="/signup" method="POST">
			
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" id="name" name="name" required="true">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" id="email" name="email" required="true">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" id="password" name="password" required="true">
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required="true">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>

			@include('partials.errors')

		</form>

	</div>
@endsection
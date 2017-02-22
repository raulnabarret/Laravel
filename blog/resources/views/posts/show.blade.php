@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">
	
	<h1>{{ $post->title }}</h1>
	<hr>
	<p>{{ $post->body }}</p>
	<hr>
	<h4>Comments</h4>
	@foreach($post->comments as $comment)
		<p>{{ $comment->body }}</p>
	@endforeach
	<hr>
	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" id="body" placeholder="Add a Comment" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</form>
			@include('partials.errors')
		</div>
	</div>
</div>

	
@endsection
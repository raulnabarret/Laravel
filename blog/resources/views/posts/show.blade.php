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
</div>

	
@endsection
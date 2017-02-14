@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">
	<h1>Create a Post</h1>	
</div>
<hr>
<form class="col-sm-8" method="POST" action="/posts">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" id="title" name="title" placeholder="Enter a title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>

@endsection
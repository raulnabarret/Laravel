@if(count($errors))
	<div class="alert alert-danger col-sm-8">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
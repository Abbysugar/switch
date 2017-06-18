@extends('layouts.master')

@section('content')

<form method="POST" action="{{ url('tasks/edit/'.$task->id) }}">

	{{ csrf_field() }}


	<div class="form-group">

		<label for="title"> Title </label>

		<input type = "text" class="form-control" id="title" name="title" value="{{ $task->title }}">

	</div>


	<div class="form-group">

		<label for="body"> Body </label>

		<textarea id="body" name="body" class="form-control"> {{ $task->body }} </textarea>
		
	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary"> Update </button>

	</div>

	@include ('layouts.errors')

</form>

@endsection
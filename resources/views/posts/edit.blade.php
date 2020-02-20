@extends('layouts.app')

@section('content')
	<h1>Edit page</h1>
	
<!-- <form action="/posts/{{-- {{$post->id}} --}}" method="POST">
	{{-- @csrf
	@method('PUT') --}}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" value="{{-- {{$post->title}} --}}" class="form-control">
		
	</div>
	<div class="form-group">
		<label for="title">Body</label>
		<textarea type="textarea" name="body" class="form-control">{{-- {{$post->body}} --}}</textarea> 

	</div>
	<button type="submit" class="btn btn-primary">Update</button>
	</form>  -->
	
	<!-- Laravel-->


	{{ Form::model($post,
		['route' => array('posts.update', $post->id), 'method' => 'PUT']) 
	}}
		{{-- {{ method_field('PUT') }} --}}
		<div class="form-group">
			{{Form::label('title', 'Title')}}
			{!! Form::text('title',null,['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Body')}}
			{{Form::textarea('body', null, ['class' => 'form-control'])}}
		</div>
		{{Form::submit('submit', ['class' => 'btn btn-primary'])}}
	{{ Form::close() }}
@endsection
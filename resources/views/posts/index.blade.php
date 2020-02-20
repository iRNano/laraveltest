@extends('layouts.app')

@section('content')
	<h1 class="jumbotron">Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div>
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}}</small>
				<a href="/posts/{{$post->id}}/edit"><u>Edit</u> </a>
				{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])}}	
					{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
				{{Form::close()}}
			</div>

		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif

@endsection
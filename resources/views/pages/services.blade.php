@extends('layouts.app')

@section('content')
	
	<h1 class="jumbotron">Services</h1>
	<br>
	<div>
		<ul class="list-group">
			@foreach($services as $service)
				<li class="list-group-item">{{$service}}</li>
			@endforeach
		</ul>
	</div>
	


@endsection
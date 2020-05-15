@extends('layout')

@section('title')
    
@endsection

@section('content')
<div class="container">
	<h2>Home Page</h2>
	<div>
		<a href="/recepie/create"><button class="btn btn-success">Create</button></a>
	</div>
  	@foreach($data as $value)
  	<a href="/recepie/{{ $value->id}}"><li>Name - {{ $value->name }}</li></a>
  	<li>Name - {{$value->name}}</li>
  	<li>Ingredients - {{$value->ingredients}}</li>
  	<li>Category - {{$value->category }}</li>
  	<hr>
  	 @endforeach
	
</div>
@endsection
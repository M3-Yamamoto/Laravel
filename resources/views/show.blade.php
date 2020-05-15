@extends('layout')

@section('title')
    
@endsection

@section('content')
<div class="container">
	<h2>{{ $recepie->name}}</h2>
	<li>Ingredients - {{$recepie->ingredients}}</li>
  	<li>Category - {{$recepie ->category }}</li>

  	<a href="/recepie/{{$recepie->id}}/edit"><button class="btn btn-success">Edit</button> </a>
  	<form method="POST" action="/recepie/{{ $recepie->id }}">

  			{{ method_field("DELETE") }}
	  		{{ csrf_field()}}
	
	  <button type="submit" class="btn btn-primary">Delete</button>
	</form>
</div>
@endsection
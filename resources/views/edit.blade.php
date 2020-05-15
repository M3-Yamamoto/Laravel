@extends('layout')

@section('title')
    
@endsection

@section('content')
	  <div class="container">
	  	<h2>Edit Recipe </h2>
		 	@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
	@endif		
	    
	  	<form method="POST" action="/recepie/{{ $recepie->id }}">
	  		
	  		{{ method_field("PATCH") }}
	  		{{ csrf_field()}}
	  	
	  <div class="form-group">
	    <label>Recipe Name</label>
	    <input type="text" name="name" class="form-control" value="{{ $recepie->name }}" required>
	    
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Ingredients</label>
	    <input type="text" name="ingredients" class="form-control" value="{{ $recepie->ingredients}}" required>
	  </div>
	   <div class="form-group">
	    <label for="exampleInputPassword1">Category</label>
	    <input type="text" name="category" class="form-control" value="{{ $recepie->category}}" required>
	  </div>
	
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	  	
	  </div>
 @endsection
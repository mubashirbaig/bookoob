@extends('layouts.category')

	@section('content')
 		

		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<h1>Create New Category</h1>
		<!-- <p class="lead">Add to your task list below.</p> -->
		<hr>

		
		{!! Form::open(array('route' => 'category.store', 'class' => 'form-inline')) !!}
 
			<div class="form-group">
			    {!! Form::label('name', 'Category:', ['class' => 'control-label']) !!}
			    {!! Form::text('category_name', null, ['class' => 'form-control']) !!}

			</div>
			 
			
 
		{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-default" href="../page" role="button">Home</a>
		 
		{!! Form::close() !!}


		
 
	@stop
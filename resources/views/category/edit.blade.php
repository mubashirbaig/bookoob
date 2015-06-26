@extends('layouts.category')

	@section('content')


		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<h1>Edit Category</h1>

		<hr>



    {!! Form::model($category, array('method' => 'PATCH','action' => ['CategoryController@update', $category->category_id],'class'=>'form-inline')) !!}

			<div class="form-group">
			    {!! Form::label('name', 'Category:', ['class' => 'control-label']) !!}
			    {!! Form::text('category_name', null, ['class' => 'form-control']) !!}

			</div>



		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-default" href="{{ URL::to('home') }}" role="button">Home</a>


		{!! Form::close() !!}




	@stop

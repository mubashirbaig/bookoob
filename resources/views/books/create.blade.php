@extends('layouts.books')

	@section('content')
 		

		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<h1>Add New Book</h1>
		<!-- <p class="lead">Add to your task list below.</p> -->
		<hr>
		
<h1>{{$users[0]->category_name}}</h1>
		
		{!! Form::open(array('route' => 'books.store', 'class' => 'form-horizontal')) !!}	

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" name="book_name" class="form-control" id="carform" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Contents</label>
				    <div class="col-sm-10">
				      <input type="text" name="book_contents" class="form-control" id="exampleInputName2" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">ISBN</label>
				    <div class="col-sm-10">
				      <input type="text" name="book_ISBN" class="form-control" id="exampleInputName2" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Published Date</label>
				    <div class="col-sm-10">
				      <input type="date" name="book_published_date" class="form-control" id="exampleInputName2" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Quantity</label>
				    <div class="col-sm-10">
				      <input type="text" name="book_quantity" class="form-control" id="exampleInputName2" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Description</label>
				    <div class="col-sm-10">
				      <input type="text" name="book_description" class="form-control" id="exampleInputName2" placeholder="">
				    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Description</label>
				    <div class="col-sm-10">
				      	<select name="category">
						  <option value="volvo">Volvo</option>
						  <option value="saab">Saab</option>
						  <option value="opel">Opel</option>
						  <option value="audi">Audi</option>
						</select>
				    </div>
			  </div>

			  

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Create</button>
			      <a class="btn btn-default" href="../page" role="button">Home</a>
			    </div>
			  </div>

			  

		{!! Form::close() !!}


 
	@stop
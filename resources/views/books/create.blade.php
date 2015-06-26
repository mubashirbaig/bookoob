@extends('layouts.books')

	@section('content')


		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<h1>Add New Book</h1>

		<hr>



		 <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('books') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" name="book_name" class="form-control" id="carform" placeholder="">
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Contents</label>
					    <div class="col-sm-10">
					    	<textarea class="form-control" name="book_contents" rows="5" id="exampleInputName2"></textarea>
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">ISBN</label>
					    <div class="col-sm-10">
					      <input type="text" name="book_ISBN" class="form-control" id="exampleInputName2" placeholder="">
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Price</label>
					    <div class="col-sm-10">
					      <input type="text" name="book_price" class="form-control" id="exampleInputName2" placeholder="">

					      <b>Price is in U.S. Dollars ($)</b>
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Author</label>
					    <div class="col-sm-10">
					      <input type="text" name="book_author" class="form-control" id="exampleInputName2" placeholder="">
					    </div>
				  </div>

          <div class="form-group">
				    <label  class="col-sm-2 control-label">Publisher</label>
					    <div class="col-sm-10">
					      <input type="text" name="book_publisher" class="form-control" id="exampleInputName2" placeholder="">
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Published Date</label>
					    <div class="col-sm-10">
					      <input type="date" name="book_date_published" class="form-control" id="exampleInputName2" placeholder="">
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

					      <textarea class="form-control" name="book_description" rows="5" id="exampleInputName2"></textarea>
					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Category</label>
					    <div class="col-sm-10">
					      	<select name="category">
					      		@foreach ($users as $user)
	    							<option value="{{$user->category_name}}">{{$user->category_name}}</option>
								@endforeach

							</select>

					    </div>
				  </div>

				  <div class="form-group">
				    <label  class="col-sm-2 control-label">Image</label>
					    <div class="col-sm-10">
					      <!-- {!! Form::file('image') !!} -->
					      <input type="file" name="image" id="fileToUpload">

					    </div>
				  </div>





				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Create</button>
				      <a class="btn btn-default" href="{{ URL::to('home') }}" role="button">Home</a>
				    </div>
				  </div>

			  </form>


	@stop

@extends('layouts.books')

	@section('content')


		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<?php

				$time = new DateTime($book->book_date_published);
			
				$date = $time->format('Y-n-j');

		?>



		<h1>Edit Book</h1>

		<hr>


		{!! Form::model($book, array('method' => 'PATCH','action' => ['BooksController@update', $book->book_id],'class'=>'form-horizontal','files'=>true)) !!}


				<div class="form-group">
					<label  class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" name="book_name" class="form-control" id="book_name" value="{{$book->book_name}}">
						</div>
				</div>

				<div class="form-group">
	       <label  class="col-sm-2 control-label">Contents</label>
	         <div class="col-sm-10">
	           <textarea class="form-control" name="book_contents" rows="5" id="book_contents">{{$book->book_contents}}</textarea>
	         </div>
	     </div>

				<div class="form-group">
	       <label  class="col-sm-2 control-label">ISBN</label>
	         <div class="col-sm-10">
	           <input type="text" name="book_ISBN" class="form-control" value="{{$book->book_ISBN}}" id="book_ISBN" >
	         </div>
	     </div>


				<div class="form-group">
					<label  class="col-sm-2 control-label">Price</label>
						<div class="col-sm-10">
							<input type="text" name="book_price" class="form-control" value="{{$book->book_price}}" id="exampleInputName2" placeholder="">

							<b>Price is in U.S. Dollars ($)</b>
						</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-2 control-label">Author</label>
						<div class="col-sm-10">
							<input type="text" name="book_author" class="form-control" value="{{$book->book_author}}" id="exampleInputName2" placeholder="">
						</div>
				</div>

        <div class="form-group">
          <label  class="col-sm-2 control-label">Publisher</label>
            <div class="col-sm-10">
              <input type="text" name="book_publisher" class="form-control" value="{{$book->book_publisher}}"  id="exampleInputName2" placeholder="">
            </div>
        </div>

				<div class="form-group">
					<label  class="col-sm-2 control-label">Published Date</label>
						<div class="col-sm-10">
							<input type="date" name="book_date_published" class="form-control" value="{{$time->format("Y-m-d")}}" id="date" placeholder="">
						</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-2 control-label">Quantity</label>
						<div class="col-sm-10">

							<input type="text" name="book_quantity" class="form-control" value="{{$book->book_quantity}}" id="exampleInputName2" placeholder="">
						</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-2 control-label">Description</label>
						<div class="col-sm-10">

							<textarea class="form-control" name="book_description" rows="5"  id="exampleInputName2">{{$book->book_description}}</textarea>
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

							<input type="file" name="image" id="fileToUpload" >

						</div>
				</div>





				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Update</button>
						<a class="btn btn-default" href="{{ URL::to('admin') }}" role="button">Home</a>
					</div>
				</div>



		{!! Form::close() !!}


	@stop

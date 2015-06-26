@extends('layouts.books')

	@section('content')

		<h1>Books List</h1>
		<p class="lead">Here's a list of all your books. <a href="/books/create">Add a new one?</a></p>
		<hr>


		<div class="container">

		  <table class="table">

		    <thead>

		      <tr>
		        <th>Book Name</th>
		        <th>Book Description</th>
		        <th>Edit</th>
		        <th>Delete</th>
		      </tr>

		    </thead>

		    <tbody>


		      	@foreach ($books as $book)
		      		<tr>
				        <td>{{$book->book_name}}</td>
				        <td>{{$book->book_description}}</td>
				        <td><a href="{{ route('books.edit', $book->book_id) }}" class="btn btn-info">Edit</a></td>
								<td>
									{!! Form::open(['method' => 'DELETE','route' => ['books.destroy', $book->book_id]]) !!}
            			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        					{!! Form::close() !!}
								</td>
			        </tr>
		        @endforeach




		    </tbody>

		  </table>

		</div>





	@stop

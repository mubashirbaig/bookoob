@extends('layouts.books')

	@section('content')

		<h1>Welcome Home</h1>
		<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p> -->
		<hr>

    		<a href="{{ route('books.index') }}" class="btn btn-primary">View Books</a>
    		<a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
    		<a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
        <a href="{{ route('category.index') }}" class="btn btn-primary">View Categories</a>
	@stop

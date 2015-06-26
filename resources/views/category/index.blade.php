@extends('layouts.category')

	@section('content')
  @include('partials.alerts.errors')
  @include('partials.alerts.success')

		<p class="lead">Here's a list of all your Categories. <a href="/category/create">Add a new one?</a></p>
		<hr>

    <div class="container">

		  <table class="table">

		    <thead>

		      <tr>
		        <th>Category</th>
		        <th>Edit</th>
		        <th>Delete</th>
		      </tr>

		    </thead>

		    <tbody>


		      	@foreach ($category as $category)
		      		<tr>
				        <td>{{$category->category_name}}</td>
				        <td><a href="{{ route('category.edit', $category->category_id) }}" class="btn btn-info">Edit</a></td>
				        <td>{!! Form::open([
            'method' => 'DELETE',
            'route' => ['category.destroy', $category->category_id]
        ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}</td>
			        </tr>
		        @endforeach




		    </tbody>

		  </table>

		</div>




	@stop

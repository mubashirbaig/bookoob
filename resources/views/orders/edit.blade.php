@extends('layouts.category')

	@section('content')


		@include('partials.alerts.errors')
		@include('partials.alerts.success')

		<h1>Edit Status</h1>

		<hr>



    {!! Form::model($order, array('method' => 'PATCH','action' => ['OrdersController@update', $order->order_id],'class'=>'form-inline')) !!}

			<div class="form-group">

        {!! Form::label('name', 'Order Status:', ['class' => 'control-label']) !!}
        {!! Form::text('order_status', null, ['class' => 'form-control']) !!}


			</div>



		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		<a class="btn btn-default" href="{{ URL::to('home') }}" role="button">Home</a>


		{!! Form::close() !!}

  <br>{!! Form::label('name', 'Order Symbols:', ['class' => 'control-label']) !!} <br>
  {{'1  -  Not Processed'}}<br>
  {{'2  -  Processed'}}<br>
  {{'3  -  Completed'}}<br>
  {{'4  -  Delievered'}}<br>


	@stop

@extends('index')

@section('content')
        <h1>GET DETAILS!</h1>
        {!! Form::open() !!}
<div class="row">
        <!-- City Form Input -->
        <div class="form-group">
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city', null, ['class' => 'form-control col-lg-3']) !!}
        </div>

        <!-- State Form Input -->
        <div class="form-group">
            {!! Form::label('state', 'State') !!}
            {!! Form::text('state', null, ['class' => 'form-control col-lg-3']) !!}
        </div>

        <!-- Phone Form Input -->
        <div class="form-group">
            {!! Form::label('phone', 'Phone') !!}
            {!! Form::text('phone', null, ['class' => ' col-lg-3 form-control']) !!}
        </div>
</div>
        <!-- BillingAddress Form Input -->
        <div class="form-group">
            {!! Form::label('billingAddress', 'Billing Address') !!}
            {!! Form::textarea('billingAddress', null, ['class' => 'form-control']) !!}
        </div>

        <!-- DeliveryAddress Form Input -->
        <div class="form-group">
            {!! Form::label('deliveryAddress', 'Delivery Address') !!}
            {!! Form::textarea('deliveryAddress', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Submit Button-->
        <div class="form-group">
            {!! Form::submit('Save Details', ['class' => 'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}

@stop

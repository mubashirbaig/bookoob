@extends('index')
@section('content')

    <style>
            th{
                text-align: center;
            }

    </style>

    <h1>Current Items in cart</h1>
    <hr>
    <table class="table  text-center table-hover table-striped" >
        <thead>
            <tr><th>Cart_id</th><th>Cart_isChecked</th> <th>Book_id</th> <th>User_ID</th> </tr>
        </thead>
    @if(sizeof($result )== 0 )

                <tr><td colspan="4">There are no Items in the list</td></tr>
                <tr><td colspan="4">
                        <a href='{{url('/browse/')}}'>
                            <button class="btn btn-warning">Go Back</button>
                        </a>

                </td></tr>

    @else
            <tbody>



        @foreach($result as $re)
                <tr>
                            <td>{{$re->cart_id}}</td>
                            <td>{{$re->cart_isChecked}}</td>
                            <td>{{$re->book_id}}</td>
                            <td>{{$re->user_id}}</td>
                </tr>
        @endforeach
        <tr>
            <td colspan="2"><a class="btn-link" href='{{url('checkout_confirm/')}}'><button class="btn btn-lg                                       btn-success">Confirm</button></a>
            </td>
            <td colspan="1"><a class="btn-link" href='{{url('browse')}}'><button class="btn btn-lg                                                      btn-danger">Cancel</button></a>
            </td>
        </tr>
        </tbody>

        @endif
    </table>
@stop
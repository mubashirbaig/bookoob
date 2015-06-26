@extends('layouts.orders')

	@section('content')

		<h1>Orders List</h1>
		<p class="lead">Here's a list of all your orders</p>
		<hr>
<?php $var = 0; $i=0; $book_check1=0;$book_check2=0; ?>



        @foreach ($carts as $cart)
        <?php $book_check2=0; ?>
            <div class="container">


                <table class="table table-hover"  >

                    <thead>

                      @if($var==0)
                        <a href="{{ route('orders.edit', $orders[$i]->order_id) }}" class="btn btn-info">Edit</a>
                          {!! Form::open(['method' => 'DELETE','route' => ['orders.destroy', $orders[$i]->order_id]]) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                        <br><br>

                        <b> {{'Order No :  '}}{{ $orders[$i]->order_id}} </b>
                        <br>
                        {{'Customer Name :  ' }}  <b> {{$users_name[$book_check1]}} </b>
                        <br>
                        {{'Customer Email :  ' }}  <b> {{$users_email[$book_check1]}} </b>
                        <br>
                        @if($orders_status[$book_check1]==1)
                        {{'Order Status :  ' }}  <b> {{'Not Processed'}} </b>
                        @elseif($orders_status[$book_check1]==2)
                        {{'Order Status :  ' }}  <b> {{'Processed'}} </b>
                        @elseif($orders_status[$book_check1]==3)
                        {{'Order Status :  ' }}  <b> {{'Completed'}} </b>
                        @elseif($orders_status[$book_check1]==4)
                        {{'Order Status :  ' }}  <b> {{'Delivered'}} </b>
                        @endif
                        <br>


                        <hr>
                        <?php $var++;$i++; ?>
                      @endif

                        <tr>
                          <th>Book Name</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                        </tr>

                    </thead>

                    <tbody >

                      <?php

                      for($j=0;$j<(count($books_name));$j++){
                        //$book_check2=0;
                          for($k=0;$k < count($books_name[$book_check1]);$k++){
                              if(!empty($books_name[$book_check1][$book_check2])){
                                  echo "<tr>";
                                  echo "<td> ";

                                  echo $books_name[$book_check1][$book_check2];

                                  echo "</td>";

                                  echo "<td> ";

                                  echo $books_quantity[$book_check1][$book_check2];

                                  echo "</td>";

                                  echo "<td> ";

                                  echo $books_price[$book_check1][$book_check2];

                                  echo "</td>";


                                  echo " </tr>";

                                  $book_check2++;
                              }
                          }

                      }


                      ?>


                    </tbody>

                </table>

            </div>
            <hr style="height:1px;border:none;color:#333;background-color:#333;" />

                <?php $var = 0; ?>
                <?php $book_check1++; ?>
        @endforeach










	@stop

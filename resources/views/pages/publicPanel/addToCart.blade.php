@extends('index')


@section('content')

    @if($isUserLoggedIn)
        <div class="col-md-push-7 col-md-2 ">
            <a href='{{url('/auth/logout/')}}'>
                <button class="btn btn-danger"> logout </button>
            </a>
        </div>
        <div class="col-md-push-7 col-md-2 ">
            <a href='{{url('/checkout/')}}'>
                <button class="btn btn-warning"> Let's Checkout, {{$userName}} <span class="glyphicon glyphicon-export"></span></button>
            </a>
        </div>
    @endif


    @foreach($bookss as $book)

        <div class="row">
            <div class="col-sm-push-1 col-sm-10">
                <div class="col-sm-push-2 col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="thumbnail">
                        <img data-src="3" alt="">
                        <div class="caption">
                            <h3 align="left">{{$book->book_id}}</h3><h2>{{$book->book_name}}</h2>
                            <p>
                                Written by {{$book->book_author}}, Volume: {{$book->book_ISBN}}, Publisher: {{$book->book_publisher}}, Year: {{$book->book_date_published}}, Added On: {{$book->book_description}}, Available Quantity: {{$book->book_quantity}} <br/> Contents: {{$book->book_contents}}
                            </p>
                            <p>
                                <a class="btn btn-primary"> ${{$book->book_price}}</a>
                                {{--<a class="btn btn-default" data-toggle="modal" href="#loginModal">Add to Cart <span class="glyphicon glyphicon-shopping-cart"></span> </a>--}}
                                {{--href='{{url('check/'.$u->id)}}'--}}
                                <a href='{{url('/addToCart/'.$book->book_id)}}'>  Add to Cart <span class="glyphicon glyphicon-shopping-cart"></span> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@stop

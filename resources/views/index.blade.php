<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BooKooB</title>
    <!--FONTS-->
    {{--<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>--}}
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="{{asset('/css/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!--CUSTOM CSS -->
    <style type="text/css">
        html, body{
            font-family: 'Indie Flower', cursive;
            text-align: center;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <a class="navbar-brand" href="#"><b class="fontSize26">BooKooB</b></a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Search</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="row">
            <div class="jumbotron">
                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h1>Search your favourite book with <b>BooKooB!</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @yield('content')
        <hr>
    </div><!--container-fluid-->


</div> <!-- .container -->



{{--JQUERY--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
<!--JAVASCRIPTS-->
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>--}}
</body>
</html>
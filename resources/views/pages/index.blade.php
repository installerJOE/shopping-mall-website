@extends('layout.app')

{{-- Meta data --}}
@section("meta-content")
    <title>Shopping Mall Website</title>
    <style>
        #home_image{
            background-image: "../storage/images/img1.jpg";
            background-size: cover;
            height: 100vh;
            display: block;
        }
        #home_image > div{
            background-color: rgba(0, 0, 0, 0.6);
            display: block;
            height: 100%;
            width: 100%;
        }
        #home1{
            padding: 5em;
        }

        #home2{
            color: #660033
        }
        .home-sub-div{
            padding: 3em;
        }
        h1{
            font-size: 50px;
        }
        p{
            font-size: 20px;
        }
    </style>
@endsection


@section("opening-image")
    <div id="home_image">
        <div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12" id="home1">
                <h1 style="color: #fff">Shop from the Comfort of your Home Today!</h1>
                <p class="color-orange">
                    Reduce stress by conveniently shopping
                    with your mobile or tablet device from the comfort of your home
                </p>
                <p>
                    <a class="btn btn-default btn-bg">Get Started &nbsp; >><span class="glyphicon glyphicon-chevron-right"></span></a>    
                <p>
            </div>
        </div>
    </div>
    {{-- </div><img src="/storage/images/img1.jpg" width="100%"/> --}}
@endsection


{{-- Page Data --}}
@section("content")
    <div class="row home-sub-div" id="home2">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding: 2em 0em 3em 0em">
            <h1>
                Get Amazing Shopping Experience in Our Shopping Mall
            </h1> <hr>
            <p>
                Utilize our mobile app facility to optimize your shopping experience
            </p>
            <p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Sign Up</a>
            </p>
        </div>
    </div>

    <img src="../storage/images/img1.jpg" height="200px"/><p>not work</p>
@endsection
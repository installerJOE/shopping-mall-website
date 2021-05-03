@extends("layouts/app")

{{-- Meta data --}}
@section("meta-content")
    <title>About Us</title>
@endsection

{{-- Page Data --}}
@section("content")
    <div class="jumbotron text-center">
        <h1> {{$mainHeader}} </h1>
        <p>
            This page gives detailed description about our shopping mall
            as well as various activities that you can carry out with 
            the mall.
        </p>
    </div>
@endsection
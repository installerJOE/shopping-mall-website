@extends('layouts/app')

@section("content")
    <div class="jumbotron text-center">
        <h1> {{$mainHeader}} </h1>
        <p>
            This is my project work that is going to be implemented using 
            the Laravel framework.
        </p>
        <p style="color:#fff">
            <a class="btn btn-primary btn-lg" href="#" role="button">Login</a> &nbsp;
            <a class="btn btn-success btn-lg" href="#" role="button">Sign Up</a>
        </p>
    </div>
@endsection
@extends('layouts/app')

@section("content")
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p>
            This is the catalogue page that contains all the products of the
            shopping mall and their individual categories.
        </p>
        <p>
            The following are the list of product categories that we have:
        </p>
        <ul>
            @foreach($productList as $product)
                <li>{{$product}}</li>
            @endforeach
        </ul>
    </div>
@endsection

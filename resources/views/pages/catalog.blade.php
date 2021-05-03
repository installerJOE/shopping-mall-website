@extends('layouts/app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Product Catalogue</title>
@endsection

{{-- Page Data --}}
@section("content")
    <div class="jumbotron text-center">
        <h1> Products Catalogue </h1>
        @if(count($data) > 0)
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
        @else
            <hr><p style="font-weight:bold">There are no products in the catalogue yet.</p>
        @endif
    </div>
@endsection

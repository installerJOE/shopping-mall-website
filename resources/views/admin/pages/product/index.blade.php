@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>product name goes here</title>
@endsection

{{-- Page Data --}}
@section('content')
    <h1>Products</h1><hr>
    @if(!Auth::guest() && $is_admin === 1)
        <p>
            <a class="btn btn-primary" href="/products/create">Add Product</a>
        </p>
    @endif
    <div style="margin-bottom:3em">
        {{-- Product Images --}}
        @if ($products->count() <= 0)
            <p>
                There are no products in this category yet.
            </p>
        @else
            @foreach ($products as $product)
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12">
                        <img id="output_img" src="/storage/images/no_image_male.jpg" style="width:100%"/>
                    </div>
                    <div class="col-lg-8 col-sm-6 col-md-6 col-xs-12">
                        <h2>
                            {{$product->description}}
                        </h2>
                        <p>
                            {{$product->price}}
                        </p>
                        <a class="btn btn-primary" href="/products/{{$product->id}}">
                            View Product
                        </a>  
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Product Catalog</title>
@endsection

{{-- Page Data --}}
@section('content')
    <h1>Product Catalog</h1><hr>
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
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-6 product-wrap">
                        <div class="col-12 product">
                            <a href="/products/{{$product->id}}">
                                <div class="col-12 product-list-image">
                                    <img id="output_img" src="storage/images/product_images/{{$product->image_url_1}}" style="width:100%"/>
                                </div>
                                <div class="row product-list-info">
                                    <div class="col-12" style="font-weight:bold;">{{$product->title}}</div> 
                                    <div class="col-12">${{$product->price}}</div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
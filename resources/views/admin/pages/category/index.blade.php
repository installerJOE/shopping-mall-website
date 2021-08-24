@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Product Categories</title>
@endsection

{{-- Page Data --}}
@section('content')
    {{Form::open()}}
        <h1> <i class="fas fa-fw fa-list-alt"></i>  Categories</h1><hr>
        
        @if(!Auth::guest() && $is_admin === 1)
            <p>
                <a class="btn btn-primary" href="/categories/create">Add Category</a> &nbsp;
                
            </p>
        @endif
        <div style="margin-bottom:3em">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <div class="category-group">
                        <h2>{{$category->title}}</h2> 
                        <p>
                            {{$category->description}}
                        </p> <hr>
                        <div class="row">
                            @foreach($products as $product)
                                @if ($category->id === $product->category_id)
                                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-6 product-wrap">
                                        <div class="col-12 product">
                                            <a href="/products/{{$product->id}}">
                                                <div class="col-12 product-list-image">
                                                    <img id="output_img" src="/storage/images/no_image_male.jpg" style="width:100%"/>
                                                </div>
                                                <div class="row product-list-info">
                                                    <div class="col-12" style="font-weight:bold;">{{$product->title}}</div> 
                                                    <div class="col-12">${{$product->price}}</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div style="float:left" class="col-4">
                                <a class="btn btn-orange-bd" href="/categories/{{$category->id}}">
                                    View Category
                                </a>
                            </div>
                            @if(!Auth::guest() && $is_admin === 1)
                                <div style="float:right" class="col-4">
                                    <a class="btn btn-orange-bd" href="/categories/{{$category->id}}/edit">
                                        Edit Category
                                    </a>
                                </div>
                                <div style="float:right" class="col-4">
                                    <a class="btn btn-orange-bd" href="/products/create">Add Product</a> 
                                </div>
                                
                            @endif
                        </div>
                    </div>
                @endforeach
                {{-- Include the pagination block --}}
                {{-- {{$categories->links()}} --}}
            @else
                <p class="alert alert-danger">
                    No category has been added yet.
                </p>
            @endif
        </div>
    {{Form::close()}}
@endsection
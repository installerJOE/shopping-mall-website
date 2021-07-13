@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>{{$category->meta_title}}</title>
@endsection


@section('content')
    <div class="jumbotron">
        <h1>
            {{$category->title}}
        </h1>
        <p>
            {!!$category->description!!}
        </p> <hr>

        <div class="row">
            @if($products->count() > 0)
                @foreach($products as $product)
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
                @endforeach
            @else
                <p>No product has been added to this category yet.</p>
            @endif
        </div>

        @if(!Auth::guest() && $is_admin === 1)
            <p>
                <div class="row">
                    <div style="float:left" class="col-4">
                        <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">
                            Edit 
                        </a>
                    </div>
                    <div style="float:left" class="col-4">
                        <a class="btn btn-orange-bd" href="/products/create">Add Product To Category</a> 
                    </div>
                    <div style="float:right" class="col-4">
                        {!!Form::open(['action'=>['App\Http\Controllers\CategoriesController@destroy', $category->id], 'method'=>'POST', 
                          'onsubmit'=>'return confirmFormSubmit("Are you sure you wish to delete this category?")']) !!} 
                            {{Form::hidden('_method', 'DELETE')}}
                            <button type='submit' class="btn btn-danger">
                                Delete 
                            </a>    
                        {!!Form::close()!!}
                    </div>
                </div>
            <p>
        @endif
    </div>
@endsection
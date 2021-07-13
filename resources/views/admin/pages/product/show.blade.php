@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>{{$product->meta_title}}</title>
@endsection


@section('content')
    <div class="jumbotron">
        <p style="text-align:right">
            <small>{{$category->title}} >> {{$product->title}}</small>
        </p>
        <h1>
            {{$product->title}}
        </h1>
        <div class="row flex">
            @for ($i = 1; $i < 4; $i++)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 div-flex">
                    @if ($category->image_url_ . $i === null)
                        <img id="output_img" src="/storage/images/no_image_male.jpg" style="width:100%"/>
                    @else
                        <img id="output_img" src={{$category->image_url_ . $i}} style="width:100%"/>
                    @endif
                </div>
            @endfor
        </div> <br>
        <div class="row">
            <p>
                {!!$product->description!!}
            </p>
        </div> <br>

        <p>
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($product->id, 'C39E+')}}" alt="barcode" />
        </p>
        
        @if(!Auth::guest() && $is_admin === 1)
        
            {{-- Display barcode image--}}
            {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('1173dhdj', 'C39')}}" alt="barcode" /> --}}
            {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('12', 'C39+')}}" alt="barcode" />
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('13', 'C39E')}}" alt="barcode" />
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('14', 'C39E+')}}" alt="barcode" />--}}
            
            <p>
                <div class="row">
                    <div style="float:left" class="col-6">
                        <a class="btn btn-primary" href="/products/{{$product->id}}/edit">
                            Edit 
                        </a>
                    </div>
                    <div style="float:right" class="col-6">
                        {!!Form::open(['action'=>['App\Http\Controllers\ProductsController@destroy', $product->id], 'method'=>'POST',
                         'onsubmit'=>'return confirmFormSubmit("Are you sure you want to delete this product? Any Delete action cannot be reversed")']) !!} 
                            {{Form::hidden('_method', 'DELETE')}}
                            <button type='submit' class="btn btn-danger">
                                Delete 
                            </button>    
                        {!!Form::close()!!}
                    </div>
                </div>
            <p>
                
        @endif
    </div>
@endsection
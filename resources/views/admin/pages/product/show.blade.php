@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>{{$product->meta_title}}</title>
@endsection


@section('content')
    <div class="jumbotron">
        <h1>
            {{$product->title}}
        </h1>
        <p>
            {!!$product->description!!}
        </p>
        @if(!Auth::guest())
        
            {{-- Display barcode image--}}
            {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('1173dhdj', 'C39')}}" alt="barcode" /> --}}
            {{-- <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('12', 'C39+')}}" alt="barcode" />
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('13', 'C39E')}}" alt="barcode" />
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('14', 'C39E+')}}" alt="barcode" />
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('15', 'C93')}}" alt="barcode" /> --}}

            <p>
                <div class="row">
                    <div style="float:left" class="col-6">
                        <a class="btn btn-primary" href="/categories/{{$product->id}}/edit">
                            Edit 
                        </a>
                    </div>
                    <div style="float:right" class="col-6">
                        {!!Form::open(['action'=>['App\Http\Controllers\CategoriesController@destroy', $product->id], 'method'=>'POST', 'onsubmit'=>'return confirmDelete()']) !!} 
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
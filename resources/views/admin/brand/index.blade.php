@extends('layouts/app')

@section('content')
    <h1>Brands</h1><hr/>
    @if(!Auth::guest() && $user_category === 'admin')
        <a class="btn btn-primary" href="/brands/create">Add Brand</a><br><br>
    @endif

    <div style="margin-bottom:3em">
        @if($brands->count() > 0)
            @foreach($brands as $brand)
                <div class="category-group">
                    <h1>{{$brand->name}}</h1>
                    <p>{{$brand->description}}</p>
                    <a class="btn btn-primary" href='/brands/{{$brand->id}}'>View Brand</a>
                </div>
            @endforeach
        @else
            <p class="alert alert-danger">
                There are no brands yet.
            </p>
        @endif
        
        @if($image->count() > 0)
            @foreach($image as $image)
                <div class="container well" id="img_div">
                    <img src='/storage/images/{{$image->image_url}}' id="{{$image->image_url}}" height="400px" id="image">
                </div>
            @endforeach
        @endif

        <div id="cropperBlock" style="background-color:#a2a2a2; padding: 20px">
            <div id="imageBlock" style="width:200px; height:300px"></div>
        </div>

        {{-- @include('admin/inc/cropper') --}}
        <button onclick="openCropper()" class="btn btn-success">Crop Image</button>

    </div>
@endsection
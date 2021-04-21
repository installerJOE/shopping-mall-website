@extends('layouts/app')

@section('content')
    <h1>Brands</h1><hr/>
    @if(Auth::user()->user_id === "admin")
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
        </div>
@endsection
@extends('layouts/app')

@section('content')
    <h1>Brands</h1><hr/>
    @if(!Auth::guest() && $is_admin === 1)
        <a class="btn btn-primary" href="/brands/create">Add Brand</a><br><br>
    @endif

    <div style="margin-bottom:3em">
        @forelse($brands as $brand) {{--This is executed if $brands array is not null--}}
            <div class="category-group">
                <h1>{{$brand->name}}</h1>
                <p>{{$brand->description}}</p>
                <a class="btn btn-primary" href='/brands/{{$brand->id}}'>View Brand</a>
            </div>
        @empty
            <p class="alert alert-danger">
                There are no brands yet.
            </p>
        @endforelse
    </div>
    
@endsection
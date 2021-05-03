@extends('layouts/app')

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
            {{$category->description}}
        </p>
        @if(!Auth::guest())
            <p>
                <form action="App\Http\Controllers\CategoriesController@edit" method="POST">
                    <a class="btn btn-primary">
                        Edit 
                    </a>
                </form>
                
                <form action="App\Http\Controllers\CategoriesController@delete" method="POST">
                    <a class="btn btn-danger">
                        Delete 
                    </a>    
                </form>
            <p>
        @endif
    </div>
@endsection
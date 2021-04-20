@extends('layouts/app')

@section('content')
    <div class="jumbotron">
        <h1>
            {{$category->name}}
        </h1>
        <p>
            {{$category->description}}
        </p>
        @if(!Auth::guest())
            <p>
                {{Form::open()}}
                    <a class="btn btn-primary">
                        Edit 
                    </a>
                {{Form::close()}}
                
                {{Form::open()}}
                    <a class="btn btn-danger">
                        Delete 
                    </a>    
                {{Form::close()}}
            <p>
        @endif
    </div>
@endsection
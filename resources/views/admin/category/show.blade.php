@extends('layouts/app')

@section('content')
    <div class="jumbotron">
        <h1>
            {{$category->name}}
        </h1>
        <p>
            {{$category->description}}
        </p>
    </div>
@endsection
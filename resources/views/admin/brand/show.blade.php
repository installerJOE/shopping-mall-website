@extends('layouts/app')

@section('content')
    <div class="jumbotron">
        <small style="color: #5f5f5f">Categories >> {{$category->name}}</small> <br><br>
        <h1>{{$brand->name}}</h1>
        <p>{{$brand->description}}</p>
    </div>
@endsection
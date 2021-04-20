@extends('layouts/app')

@section('content')
    <div class="jumbotron">
        <h1>{{$brand->name}}</h1>
        <p>{{$brand->description}}</p>
    </div>
@endsection
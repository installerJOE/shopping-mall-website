@extends('layouts/app')

@section('content')

    <div class="container jumbotron">
        {!!Form::open(['action'=>'App\Http\Controllers\ImageUploadsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
            <h1>Upload Image</h1> <hr>    
            {{Form::label('title', 'Select Image')}} <br>
            {{Form::file('image', ['class'=>'form-control'])}} <br>
            {{Form::submit('Upload File', ['class'=>'btn btn-primary'])}}
        {!!Form::close()!!} <br>
        <div>
            <img id="image" src="picture.jpg"></img>
        </div>
    </div>    

@endsection
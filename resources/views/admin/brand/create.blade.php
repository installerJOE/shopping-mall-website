@extends('layouts/app')

@section('content')
    <h1>Add Brand</h1>
    {{Form::open(['action'=>'App\Http\Controllers\BrandsController@store', 'method'=>'POST'])}}
        <div style="margin-bottom:2em" class="form-default">
            {{Form::label('name', 'Brand Name')}} <br>
            {{Form::text('brand_name', '', ['class'=>'form-control', 'placeholder'=>'Enter Name of Brand', 'required'=>'required'])}}<br>
            {{Form::label('description','Description')}}<br>
            {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Enter Brief Description of Brand', 
              'rows'=>'5', 'required'=>'required'])}}<br>
            {{Form::label('category','Category')}}<br>
            <select class="form-control" name="category">
                <option>[Select a category]</option>
                @foreach($categories as $categories)
                    <option>{{$categories->name}}</option>
                @endforeach
            </select><br>
            {{Form::submit('Add Brand', ['class'=>'btn btn-primary'])}}
            
        </div>
    {{Form::close()}}
@endsection
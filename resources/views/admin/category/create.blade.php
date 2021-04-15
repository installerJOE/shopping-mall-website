@extends('layouts/app')

@section('content')
    <h1>Create New Category</h1><hr>
    {{Form::open(['action'=>'App\Http\Controllers\CategoriesController@store', 'method'=>'POST'])}}
        <div style="margin-bottom:2em" class="form-default">
            {{Form::label('title', 'Name of Category')}} <br>
            {{Form::text('name', '', ['class'=>'form-control', 
              'placeholder'=>'Enter Name of Product Category'])}} <br>
            {{Form::label('description', 'Description of Product Category')}}<br>
            {{Form::textarea('description', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'rows'=>'5',
              'placeholder'=>'Enter the Description of this Product Category'])}}<br>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        </div>
    {{Form::close()}}
@endsection
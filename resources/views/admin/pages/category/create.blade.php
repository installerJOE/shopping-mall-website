@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Create a Product Category</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Create New Category</h1><hr>
    {!!Form::open(['action'=>'App\Http\Controllers\CategoriesController@store', 'method'=>'POST'])!!}
        <div style="margin-bottom:2em" class="form-default">
            <label for='title'>Name of Category </label><br>
            <input type="text" name="title" class="form-control" placeholder="Enter name of Category"><br>
            <label for='description'> Description of Product Category </label><br>
            <textarea name="description" id="article-ckeditor" class="form-control" rows="5" 
              placeholder="Enter the description of this category"></textarea><br>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </div>
    {!!Form::close()!!}
@endsection
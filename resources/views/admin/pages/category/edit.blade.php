@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Edit Product Category</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Edit Category</h1><hr>
    {!!Form::open(['action'=>['App\Http\Controllers\CategoriesController@update', $category->id], 'method'=>'POST'])!!}
        <div style="margin-bottom:2em" class="form-default">
            <label for='title'>Name of Category </label><br>
            <input type="text" name="title" class="form-control" placeholder="Enter name of Category" value="{{$category->title}}"><br>
            <label for='description'> Description of Product Category </label><br>
            <textarea name="description" id="article-ckeditor" class="form-control" rows="5" 
              placeholder="Enter the description of this category">{{$category->description}}</textarea><br>
            {{Form::hidden('_method', 'PUT')}}
            <button type="submit" class="btn btn-primary">Update Category</button>
        </div>
    {!!Form::close()!!}
@endsection
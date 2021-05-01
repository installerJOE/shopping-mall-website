@extends('layouts/app')

@section('content')
    <h1>Add Brand</h1>
    {{Form::open(['action'=>'App\Http\Controllers\BrandsController@store', 'method'=>'POST'])}}
        <div style="margin-bottom:2em" class="form-default">
            <label for="name"> 
                Brand Name 
            </label><br>
            <input type="text" name="brand_name" class="form-control" placeholder="Enter Name of Brand" value="{{old('brand_name')}}" 
                value="{{old('brand_name')}}"><br>
            
            <label for="description">
                Description of brand
            </label><br>
            <textarea type="input" name="description" class="form-control" placeholder="Enter Brief Description of Brand" rows="5">{{old('description')}}</textarea><br>

            <label for="category">
                Category
            </label><br>
            @if (count($categories) > 0)
                <select class="form-control" name="category">
                    <option>[Select a category]</option>
                    @foreach($categories as $categories)
                        <option>{{$categories->name}}</option>
                    @endforeach
                </select><br>
            @else
                <input type="text" name="new_category" class="form-control"><br>
            @endif
            
            {{Form::submit('Add Brand', ['class'=>'btn btn-primary'])}}
            
        </div>
    {{Form::close()}}
@endsection
@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Edit Product</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Edit Product</h1><hr>
    {!!Form::open(['action'=>['App\Http\Controllers\ProductsController@update', $product->id], 'method'=>'POST'])!!}
        <div style="margin-bottom:2em" class="form-default">
            <label for='title'>Name of Product </label><br>
            <input type="text" name="product_name" class="form-control" placeholder="Enter name of Product" value="{{$product->title}}"><br>
            <label for="category">Product Category</label><br>
            <select class="form-control" name="category">
                <option value="{{$category->id}}">{{$category->title}}</option>
                @foreach ($categories as $cat)
                    @if($cat->id !== $category->id)
                        <option value="{{$cat->id}}">
                            {{$cat->title}}
                        </option>
                    @endif
                @endforeach                    
            </select> <br>

            <label for='description'> Description of Product </label><br>
            <textarea name="description" id="article-ckeditor" class="form-control" rows="5" 
            placeholder="Enter the description of this product">{{$product->description}}</textarea><br>
            
            <label for="price">Pricing ($)</label><br>
            <input type="number" name="price" class="form-control" required="required" placeholder="Enter Price of Product" value={{$product->price}}><br>

            <label for="discount">Discount (%)</label><br>
            <input type="number" name="discount" class="form-control" placeholder="Enter Discount of Product" value="{{$product->discount}}"><br>
            
            {{-- Image Upload Section --}}
            <label>Select Image</label>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img id="output_img" src="/storage/images/no_image_male.jpg" style="width:100%"/>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <input type="file" name="image" accept="image/*" onchange="previewImage()"/><br><br>
                    {{-- <button type="submit" class="btn btn-primary">Upload</button> --}}
                </div>
            </div> <br>
            {{Form::hidden('_method', 'PUT')}}
            
            {{-- Update button --}}
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    {!!Form::close()!!}
@endsection


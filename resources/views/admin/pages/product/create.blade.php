@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Create a Product</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Create New Product</h1><hr>
    @if ($categories->count() > 0)
        {!!Form::open(['action'=>'App\Http\Controllers\ProductsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
            <div style="margin-bottom:2em" class="form-default">
                <label for='title'>Name of Product </label><br>
                <input type="text" name="product_name" class="form-control" placeholder="Enter name of Product" required="required"><br>
                <label for="category">Product Category</label><br>
                <select class="form-control" name="category">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->title}}
                        </option>
                    @endforeach                    
                </select> <br>

                <label for='description'> Description of Product </label><br>
                <textarea name="description" id="article-ckeditor" class="form-control" rows="5" required="required"
                placeholder="Enter the description of this product"></textarea><br>
                
                <label for="price">Pricing ($)</label><br>
                <input type="number" name="price" class="form-control" required="required" placeholder="Enter Price of Product"><br>

                <label for="discount">Discount (%)</label><br>
                <input type="number" name="discount" class="form-control" placeholder="Enter Discount of Product"><br>
                
                {{-- Image Upload Section --}}
                <label>Select Image</label>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <img id="output_img" src="{{asset('storage/images/no_image_male.jpg')}}" style="width:100%"/>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <input type="file" name="image" accept="image/*" onchange="previewImage()"/><br><br>
                        {{-- <button type="submit" class="btn btn-primary">Upload</button> --}}
                    </div>
                </div> <br>

                {{-- Submit button --}}
                <button type="submit" class="btn btn-primary">Add Product</button> <br>
            </div>
        {!!Form::close()!!}
    @else
        <p> 
            Please add a product category first in order to successfully add products to the catalogue.
            <p>
                <a class="btn btn-primary" href="/categories/create">Add Category</a>
            </p>
        </p>
    @endif

@endsection
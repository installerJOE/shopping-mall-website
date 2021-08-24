@extends('admin.layout.app')

@section('admin-meta-content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <title>Create a Product</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
        img {
            display: block;
            max-width: 100%;
        }
        .preview {
            overflow: hidden;
            width: 160px; 
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
        .modal-lg{
            max-width: 800px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Create New Product</h1><hr>
    @if ($categories->count() > 0)
        {!!Form::open(['action'=>'App\Http\Controllers\ProductsController@store', 'method'=>'POST', 'enctype'=>"multipart/form-data"])!!}
            @csrf
            <div style="margin-bottom:2em" class="form-default">
                <label for='title'>Name of Product </label><br>
                <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}" placeholder="e.g. Gucci Belt" required="required"><br>
                
                <label for="category">Product Category</label><br>
                <select class="form-control" name="category" value="{{ old('category') }}">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->title}}
                        </option>
                    @endforeach                    
                </select> <br>

                <label for='description'> Description of Product </label><br>
                <textarea name="description" value="{{ old('description') }}" id="article-ckeditor" class="form-control" rows="5" required="required"
                placeholder="Your detailed description of the product comes here"></textarea><br>
                
                <label for="price">Pricing ($)</label><br>
                <input type="number" name="price" value="{{ old('price') }}" class="form-control" required="required" placeholder="e.g. 20.00"><br>

                <label for="discount">Discount (%)</label><br>
                <input type="number" name="discount" value="{{ old('discount') }}" class="form-control" placeholder="e.g. 10.00"><br>
                
                {{-- Image Upload Section --}}
                <label>Select Image</label>
                <div class="row">
                    <div class="container" style="padding:0px">
                        <div class="row" style="padding:0px">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" id="image_container" style="padding:0px; display:none">
                                <img id="output_img" style="width:100%"/>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="file" name="product_image" class="image" accept=".png, .jpg, .jpeg" required="required"/><br><br>
                                <input type="hidden" id="base64image" name="base64image">
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="image_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div> 
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br id="image-br" style="display:none">

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

    {{-- JavaScript for the cropping --}}
    <script>
        var $modal = $('#image_modal');
        var image = document.getElementById('image');
        var cropper;

        $.ajaxSetup({
            headers:{ 
                'X-CSRFToken': $('meta[name="csrf-token"]').attr('content') 
            }
        });

        $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } 
                else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
        
        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 14/9,
                viewMode: 3,
                preview: '.preview',
                zoomOnWheel: true,
                scalable: true,
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });
        
        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 90,
                maxWidth: 3072,
                maxHeight: 3072,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob); 
                reader.onloadend = function() {
                    var base64data = reader.result; 
                    $("#base64image").val(base64data);
                    document.getElementById('image_container').style.display = "block";
                    var image = document.getElementById('output_img');
                    image.src = base64data;
                    $modal.modal('hide');
                    document.getElementById('image-br').style.display = "block";
                    // $.ajax({
                    //     type: "post",
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     },
                    //     processData: false,
                    //     cache: false,
                    //     contentType: 'application/x-www-form-urlencoded',
                    //     url: '/products/store',
                    //     data: {
                    //         "image": base64data,
                    //         "_method": 'POST',
                    //         "_token" : $('meta[name="csrf-token"]').attr('content'), 
                    //     },
                    //     success: function(data){
                    //         $modal.modal('hide');
                    //         console.log("Image upload successful");
                    //         // console.log(data);
                    //     },
                    //     error:function(){
                    //         console.error("An error occurred during submission");
                    //     }
                    // });
                }
            });
        });
    </script>   

@endsection
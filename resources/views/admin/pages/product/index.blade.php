@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Product Catalog</title>
    <style>
        img {
            display: block;
            max-width: 100%;
        }
        .modal-lg{
            max-width: 800px !important;
        }
        .product-wrap{
            transition: 0.5s;
            -webkit-transition: 0.5s;
        }
        .product-wrap:hover{
            cursor: pointer;
            transform: scale(1.09)
        }
        #modal_product_view{
            padding:15px
        }
        #modalHeader{
            margin-left:15px;
            color:#fc8003;
            font-weight: bold;
        }
        .modal-price-header{
            padding:10px 20px; 
            margin-bottom:10px; 
            color: #343B4A; 
            font-size:18px;
        }
        .modal-price-header + h3, .modal-price-header + h5{
            margin-bottom: 1em;
            margin-left:15px
        }
        #modal_product_view > div:first-child{
            padding-right: 1.2em;
        }
    </style>
@endsection

{{-- Page Data --}}
@section('content')
    <h1><i class="fas fa-fw fa-gifts"></i> &nbsp;Product Catalog</h1><hr>
    @if(!Auth::guest() && $is_admin === 1)
        <p>
            <a class="btn btn-primary" href="/products/create">Add Product</a>
        </p>
    @endif
    <div style="margin-bottom:3em">
        {{-- Product Images --}}
        @if ($products->count() <= 0)
            <p>
                There are no products in this category yet.
            </p>
        @else
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-6 product-wrap" 
                        onclick="showProduct('storage/images/product_images/{{$product->image_url_1}}', '{{$product->title}}', '{{$product->description}}', '{{$product->price}}', '{{$product->discount}}')">
                        <div class="col-12 product">
                            {{-- <a href="/products/{{$product->id}}"> --}}
                                <div class="col-12 product-list-image">
                                    <img id="output_img" src="storage/images/product_images/{{$product->image_url_1}}" style="width:100%"/>
                                </div>
                                <div class="row product-list-info">
                                    <div class="col-12" style="font-weight:bold;">{{$product->title}}</div> 
                                    <div class="col-12">${{$product->price}}</div>
                                </div>
                            {{-- </a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="modal fade" id="product_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="modalHeader"></h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div> 
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row" id="modal_product_view">
                                    <div class="col-md-8">
                                        <img width="100%" id="modal_product_image" src="https://avatars0.githubusercontent.com/u/3456749">
                                        <div id="modal_product_description" style="margin-top:1em"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview" style="display:block" id="modal_pricing_info"></div>
                                        <div>
                                            <img id="barcode" src="" alt="barcode" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a id="product_edit_btn" class="btn btn-primary">Edit </a>
                            <button type="button" class="btn btn-blue-bg">Star Product</button>
                            <button type="button" class="btn btn-light-blue-bg">Delete Product</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('delete_form').submit();"

                            {{-- <form id="delete_form" action="/product/{{product_id}}" method="POST" class="d-none"> --}}
                            <form id="delete_form" method="POST" class="d-none" 
                            onsubmit="return confirmFormSubmit('Are you sure you want to delete this product? Any Delete action cannot be reversed')">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script>
        function showProduct(product_image, product_name, description, price, discount){
            $modal = $('#product_modal');
            var image = document.getElementById('modal_product_image');
            var prodDescription = document.getElementById("modal_product_description");
            var pricing = document.getElementById("modal_pricing_info");
            var barcode = document.getElementById("modal_barcode");
            var floatNum = price - ((discount/100)*price)

            var m = Number((Math.abs(floatNum) * 100).toPrecision(15));
            var amount = Math.round(m) / 100 * Math.sign(floatNum);

            // var amount = Math.round((integerNum + Number.EPSILON) * 100) / 100

            // barcode.src = "data:image/png;base64," + {{DNS1D::getBarcodePNG('product_id', 'C39E+')}}
            // <p> ${barcode_id} </p>
            $modal.modal('show');
            document.getElementById("modalHeader").innerHTML = product_name;
            image.src = product_image;
            prodDescription.innerHTML = `<h2> Description </h2><hr> <p> ${description} </p>`;
            pricing.innerHTML = `
                <p class="light-blue-bg modal-price-header">Price</p>
                <h3> $${price} </h3>
                
                <p class="pink-bg modal-price-header">Discount</p>
                <h5> ${discount}% Off </h5>

                <p class="blue-bg modal-price-header" style="color: #fff">Total Amount</p>
                <h3> $${amount} </h3>

                <p class="grey-bg modal-price-header">Barcode</p>
                
            `
        

        }
    </script>
@endsection
@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Print Barcodes</title>    
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
    </style>
@endsection

@section('admin-content')
    <h1>Print Barcodes </h1><hr>
    <div class="container">
        @if ($products->count() > 0)
            <table class="table table-striped">
                <tr>
                    <th>S/N</th>
                    <th>Product Name</th>
                    <th>Barcode Image</th>
                </tr>
                @for ($i = 0; $i < count($products); $i++)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$products[$i]->title}}</td>
                        <td>
                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($products[$i]->id, 'C39E+')}}" alt="barcode" />
                        </td>
                    </tr>
                @endfor
            </table>
        @else
            <p> 
                No product has been added yet.
                <p>
                    <a class="btn btn-primary" href="/product/create">Add Product</a>
                </p>
            </p>
        @endif
    </div>
    <div class="container">
        <button type="button" class="btn btn-primary">Print Barcodes</button>
    </div>

@endsection
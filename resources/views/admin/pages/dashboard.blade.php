@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Dashboard</title>    
@endsection

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <h1>
                <i class="fas fa-home"></i> Dashboard
            </h1>
            <hr class="admin-hr">
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 dashboard-card">
                <div class="pink-bg">
                    <div class="col-12">
                        <h3>Product Categories</h3>
                        <h1>
                            200+
                        </h1>
                        <p> Collections </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 dashboard-card">
                <div class="light-blue-bg">
                    <div class="col-12">
                        <h3>Variety of</h3>
                        <h1>
                            500+
                        </h1>
                        <p>products</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 dashboard-card">
                <div class="light-blue-bg">
                    <div class="col-12">
                        <h3>Products availble in</h3>
                        <h1>
                            20+
                        </h1>
                        <p>Brands</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-sm-6 col-md-6 dashboard-card">
                <div class="peach-bg">
                    <div class="col-12">
                        <h3>Notifications</h3>
                        <h1>
                            10
                        </h1>
                        <p>Unread</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection

@extends('layout.app')


@section('meta-content')
    @yield('admin-meta-content')
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
        #div_mainBody > div{
            padding-top: 2em
        }
        #div_mainBody > div:first-child{
            background-color: #efefef;
            height:100vh;
        }
        #div_mainBody > div:last-child{
            padding-left: 5em;
        }
    </style>
@endsection


@section('content')
    {{-- Sidebar --}}
    <div class="row" id="div_mainBody">
        <div class="col-lg-2 col-sm-3 col-md-3 col-xs-12">
            @include('inc/sidebar')
        </div>
        
        {{-- Menu Contents --}}
        <div class="col-lg-10 col-sm-9 col-md-9 col-xs-12">
            @yield('admin-content')
        </div>
    </div>
@endsection
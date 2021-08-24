@extends('layout.app')


@section('meta-content')
    @yield('admin-meta-content')
    <style>
        #app{
            margin:0px !important;
            padding:0px !important;
        }
        #div_mainBody > div:last-child{
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
    <div class="row auth-user-page" id="div_mainBody">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 side-menu-list-block">
            @include('inc/sidebar')
        </div>
        
        {{-- Menu Contents --}}
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12 side-menu-content-block">
            @isset($is_auth_user)
                @include('inc.messages')
            @endisset
            @yield('admin-content')
        </div>
    </div>
@endsection
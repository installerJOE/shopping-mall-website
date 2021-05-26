@extends('admin.layout.app')

@section('admin-meta-content')
    <title>Dashboard</title>    
@endsection

@section('admin-content')
    <div style="margin:0px">
        <h1>Dashboard</h1><hr>
        <div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            {{ __('You are logged in!') }}
        </div>
    </div>
@endsection

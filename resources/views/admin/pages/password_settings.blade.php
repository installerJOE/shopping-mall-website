@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Password Settings</title>
@endsection

{{-- Page Data --}}
@section('content')
    {{Form::open()}}
        <h1>Password Settings</h1><hr>
        <div style="margin-bottom:2em" class="form-default">
            <label for="Full Name">
                Full Name
            </label>
            <label for="Email">
                Email
            </label>
            <label for="Mobile 1">
                Mobile Number
            </label>
            <label for="Mobile 2">
                Mobile Number 2
            </label>
            <label for="Profile Image">
                Profile Image
            </label>
        </div>
    {{Form::close()}}
@endsection
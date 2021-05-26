@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>Product Categories</title>
@endsection

{{-- Page Data --}}
@section('content')
    {{Form::open()}}
        <h1>Categories</h1><hr>
        
        @if(!Auth::guest() && $is_admin === 1)
            <p>
                <a class="btn btn-primary" href="/categories/create">Add Category</a>
            </p>
        @endif
        <div style="margin-bottom:3em">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <div class="category-group">
                        <h2>{{$category->title}}</h2> 
                        <p>
                            {{$category->description}}
                        </p>
                        <div class="row">
                            <div style="float:left" class="col-6">
                                <a class="btn btn-primary" href="/categories/{{$category->id}}">
                                    View Category
                                </a>
                            </div>
                            @if(!Auth::guest() && $is_admin === 1)
                                <div style="float:right" class="col-6">
                                    <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">
                                        Edit 
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{-- Include the pagination block --}}
                {{-- {{$categories->links()}} --}}
            @else
                <p class="alert alert-danger">
                    No category has been added yet.
                </p>
            @endif
        </div>
    {{Form::close()}}
@endsection
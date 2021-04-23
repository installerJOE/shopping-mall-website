@extends('layouts/app')

@section('content')
    {{Form::open()}}
        <h1>Categories</h1><hr>
        @if(!Auth::guest() && $user_category === 'admin')
            <p>
                <a class="btn btn-primary" href="/categories/create">Add Category</a>
            </p>
        @endif
        <div style="margin-bottom:3em">
            @if($categories->count() > 0)
                @foreach($categories as $category)
                    <div class="category-group">
                        <h2>{{$category->name}}</h2> 
                        <p>
                            {{$category->description}}
                        </p>
                        <a class="btn btn-primary" href="/categories/{{$category->id}}">
                            View Products
                        </a>
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
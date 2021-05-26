@extends('layout.app')

{{-- Meta Data --}}
@section("meta-content")
    <title>{{$category->meta_title}}</title>
@endsection


@section('content')
    <div class="jumbotron">
        <h1>
            {{$category->title}}
        </h1>
        <p>
            {!!$category->description!!}
        </p>
        @if(!Auth::guest() && $is_admin === 1)
            <p>
                <div class="row">
                    <div style="float:left" class="col-6">
                        <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">
                            Edit 
                        </a>
                    </div>
                    <div style="float:right" class="col-6">
                        {!!Form::open(['action'=>['App\Http\Controllers\CategoriesController@destroy', $category->id], 'method'=>'POST', 
                          'onsubmit'=>'return confirmFormSubmit("Are you sure you wish to delete this category?")']) !!} 
                            {{Form::hidden('_method', 'DELETE')}}
                            <button type='submit' class="btn btn-danger">
                                Delete 
                            </a>    
                        {!!Form::close()!!}
                    </div>
                </div>
            <p>
        @endif
    </div>
@endsection
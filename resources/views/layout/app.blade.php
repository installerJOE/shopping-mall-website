<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Font awesome cdn --}}
    <script src="https://kit.fontawesome.com/22b786e40e.js" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500&display=swap" rel="stylesheet">
    {{-- <link  href="/path/to/cropper.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('croppie/croppie.css')}}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/sidebar.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin.css")}}">
    

    {{-- Additional meta data such as title and other stylesheets --}}
    @yield('meta-content')

    <style>
      .card{
        margin-bottom:2em;
      }
      .form-auth > div{
        margin-bottom: 1.5em !important;
      }
      nav{
        margin:0px !important;
      }
      /* Ensure the size of the image fit the container perfectly */
      img {
        display: block;

        /* This rule is very important, please don't ignore this */
        max-width: 100%;
      }
      #app{
        padding-top:3em;
      }
    </style>
  </head>
  <body>

    {{-- Header comes in here --}}
    @include('inc.navbar')

    {{-- Opening Image for applicable pages --}}
    <div>
      @yield('opening-image')
    </div>

    {{-- Main Body Comes here --}}
    <div id="app" class="container">
      @include('inc.messages')
      @include('inc.modal')
      @yield('content')
    </div>

    <!-- Trigger the modal with a button -->
    {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}

    
    {{-- Display Footer for only guests and authenticated users --}}
    @if(Auth::guest())
      @include('inc/footer')
    @endif

    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="/path/to/cropper.js"></script> --}}
    <script src="{{asset('croppie/croppie.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
    
    {{-- <script; src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}

    <script>
      // make a confirmation before form submission
      function confirmFormSubmit(question){
          var confirmDel = confirm(question);
          if(!confirmDel){
              return false;
          }
      }
    </script>
    
  </body>
</html>



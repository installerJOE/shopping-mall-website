<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Shopping Mall Project</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <style>
      .card{
        margin-bottom:2em;
      }
      .form-auth > div{
        margin-bottom: 1.5em !important;
      }
    </style>
</head>
  <body>

    {{-- Header comes in here --}}
    @include('inc/navbar')

    {{-- Main Body Comes here --}}
    <div id="app" class="container">
      @include('inc/messages')
      @yield('content')
    </div>
    
    {{-- Footer goes here --}}
    @include('inc/footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    {{-- <script; src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}
  </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link  href="/path/to/cropper.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('croppie/croppie.js')}}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/sidebar.css")}}">

    {{-- Additional meta data such as title and other stylesheets --}}
    @yield('meta-content')

    <style>
      .card{
        margin-bottom:2em;
      }
      .form-auth > div{
        margin-bottom: 1.5em !important;
      }


      /* Ensure the size of the image fit the container perfectly */
      img {
        display: block;

        /* This rule is very important, please don't ignore this */
        max-width: 100%;
      }
    </style>
  </head>
  <body>

    {{-- Header comes in here --}}
    @include('inc/navbar')

    {{-- Main Body Comes here --}}
    <div id="app" class="container">
      @include('inc/messages')
      @include('inc/modal')
      @yield('content')

      <!-- Trigger the modal with a button -->
      {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --}}

    </div>
    
    {{-- Footer goes here --}}
    @include('inc/footer')

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

      function openCropper(){
        var image = document.querySelector("#img_div > img:first-child").id;

        // var src = '/storage/images/' . image;
        
        var cropImage = new Croppie(document.getElementById('imageBlock'), {
          viewport: { width: 100, height: 100, tyoe: 'square' },
          boundary: { width: 300, height: 300 },
          showZoomer: false,
          enableOrientation: true
        });
        cropImage.bind({
          orientation: 1,
          // url: src
        });
        // cropImage.result('blob').then(blob=>{

        // })
      }
    </script>
    
  </body>
</html>



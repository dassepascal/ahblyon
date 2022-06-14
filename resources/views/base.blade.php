<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/20ea8add13.js" crossorigin="anonymous"></script>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      {{-- tinymce --}}
      {{-- <script src="https://cdn.tiny.cloud/1/vxfcf4bxrnn14o8lr9sboey5yz954t62d6ar3izu54gkctb3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <title>ahblyon</title>
  </head>
  <body>
@include('incs.header')
    @include('incs.navbar')
    <div class="container justify-content-center">

    @yield('content')


    </div>


  </body>
</html>



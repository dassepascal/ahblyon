<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    {{-- tinymce --}}
    <script src="https://cdn.tiny.cloud/1/vxfcf4bxrnn14o8lr9sboey5yz954t62d6ar3izu54gkctb3/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/20ea8add13.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ahblyon</title>
</head>

<body>
    <div class="header">
        <div class="">
            @include('incs.navbar-admin')
        </div>
        @include('incs.navbar')





    </div>


    <div class="container justify-content-center mt-3">
        @include('incs/flash')
        @yield('content')

        @include('incs.footer')


    </div>


</body>

</html>

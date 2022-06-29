<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    {{-- tinymce --}}
    <script src="https://cdn.tiny.cloud/1/vxfcf4bxrnn14o8lr9sboey5yz954t62d6ar3izu54gkctb3/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/20ea8add13.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"   >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ahblyon</title>
</head>

<body>
    <div class="header">
        {{-- <div class="p-2 bd-highlight header__logo ">
            <img src="{{asset('images/logo.png')}}" alt="image du logo" width=45vw
            class="img-fluid ">
        </div>
            <div class="header__title">
                <h1 class="bg-warning"> Association Kongodania</h1>
            </div> --}}

        <div class="header__navbar">
            @include('incs.navbar')
        </div>

    </div>


    <div class="container justify-content-center mt-3">
        @include('incs/flash')
        @yield('content')
      
        @include('incs.footer')


    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>

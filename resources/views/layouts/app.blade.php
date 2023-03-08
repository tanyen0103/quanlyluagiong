<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/5470c24891.js" crossorigin="anonymous"></script>

    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
    .nav-upper{
        text-transform: uppercase;
    }
    </style>
</head>
<body>
    <div id="app" class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url('public/home/logo/AGU.png')}}" alt="logoAGU" width="50">{{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Quản lí tài khoản
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('users.index') }}">Quản lí người dùng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('roles.index') }}">Quản lí quyền</a></li>
                                </ul>
                            </div>

                            <div class="nav-item dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Quản lí giống
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('nhomgiongs.index') }}">Nhóm Giống</a></li>
                                    <li><a class="dropdown-item" href="{{ route('kieuhinhs.index') }}">Kiểu hình</a></li>
                                    <li><a class="dropdown-item" href="{{ route('giongs.index') }}">Giống</a></li>
                                    <li><a class="dropdown-item" href="{{ route('mangoaidongs.index') }}">Mã Ngoài Đồng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('maptns.index') }}">Mã phòng thí nghiệm</a></li>
                                </ul>
                            </div>

                            <div class="nav-item dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Quản lí các giá trị đo của giống
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('loaigiatridos.index') }}">Loại giá trị đo</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chitieungoaidongs.index') }}">Chỉ tiêu ngoài đồng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('giatridongoaidongs.index') }}">Giá trị đo ngoài đồng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chitieutrongnhas.index') }}">Chỉ tiêu trong nhà</a></li>
                                    <li><a class="dropdown-item" href="{{ route('giatridotrongnhas.index') }}">Giá trị đo trong nhà</a></li>
                                    <li><a class="dropdown-item" href="{{ route('chitieusaubenhs.index') }}">Chỉ tiêu sâu bệnh</a></li>
                                    <li><a class="dropdown-item" href="{{ route('loaisaubenhs.index') }}">Loại sâu bệnh</a></li>
                                    <li><a class="dropdown-item" href="{{ route('giatridosaubenhs.index') }}">Giá trị đo sâu bệnh</a></li>
                                </ul>
                            </div>

                            <div class="nav-item dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Quản lí các giá trị tính trạng
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('giaidoantruongthanhs.index') }}">Giai đoạn trưởng thành</a></li>
                                    <li><a class="dropdown-item" href="{{ route('doituongtinhtrangs.index') }}">Đối tượng tính trạng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dacdiemtinhtrangs.index') }}">Đặc điểm tính trạng</a></li>
                                    <li><a class="dropdown-item" href="{{ route('giatritinhtrangs.index') }}">Giá trị tính trạng</a></li>
                                </ul>
                            </div>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


    {{-- <body>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
          <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
          <div class="w3-container">

            <img src="{{url('public/home/logo/AGU.png')}}" alt="logoAGU" style="width: 100%">

          </div>
          <div class="w3-bar-block nav-upper">
            <a href="{{ url('/') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
            <a href="{{ route('nhomgiongs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Nhóm Giống</a>
            <a href="{{ route('kieuhinhs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kiểu hình</a>
            <a href="{{ route('giongs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Giống</a>
            <a href="{{ route('mangoaidongs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mã Ngoài Đồng</a>
            <a href="{{ route('maptns.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Mã PHÒNG THÍ NGHIỆM</a>
            <hr>
            <a href="{{ route('loaigiatridos.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">loại giá trị đo</a>
            <a href="{{ route('chitieungoaidongs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">chỉ tiêu ngoài đồng</a>
            <a href="{{ route('giatridongoaidongs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">giá trị đo ngoài đồng</a>
            <hr>
            <a href="{{ route('chitieutrongnhas.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">chỉ tiêu trong nhà</a>
            <a href="{{ route('giatridotrongnhas.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">giá trị đo trong nhà</a>
            <hr>
            <a href="{{ route('chitieusaubenhs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">chỉ tiêu sâu bệnh</a>
            <a href="{{ route('loaisaubenhs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">loại sâu bệnh</a>
            <a href="{{ route('giatridosaubenhs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">giá trị đo sâu bệnh</a>
            <hr>
            <a href="{{ route('giaidoantruongthanhs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">GIAI ĐOẠN TRƯỞNG THÀNH</a>
            <a href="{{ route('doituongtinhtrangs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">đối tượng tính trạng</a>
            <a href="{{ route('dacdiemtinhtrangs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">đặc điểm tính trạng</a>
            <a href="{{ route('giatritinhtrangs.index') }}" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">giá trị tính trạng</a>
          </div>
        </nav>

        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
          <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">☰</a>
          <span>Company Name</span>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:340px;margin-right:40px">
            @yield('content')
        <!-- End page content -->
        </div>


        <script>
        // Script to open and close sidebar
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
          document.getElementById("img01").src = element.src;
          document.getElementById("modal01").style.display = "block";
          var captionText = document.getElementById("caption");
          captionText.innerHTML = element.alt;
        }
        </script>

        </body> --}}

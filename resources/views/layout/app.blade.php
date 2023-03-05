<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    {{-- <body>
        {{-- <div>
            <nav class="navbar navbar-default bg-success">
                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">QuanLyLuaGiong-APP</a>
                  </div>
                  <ul class="nav navbar-nav d-flex justify-content ">
                    <li class="active text-white">
                        <a href="{{ url('/') }}" class="text-white">
                            <i class="fas fa-house"></i>
                         </a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div> --}}
        {{-- <div class="container">
            <div class="row">
                <div class="col-3 p-0  border border-3 border-top-0 border-success text-uppercase">
                    <!-- Sidebar -->
                    <nav id="sidebarMenu" class="collapse d-lg-block sidebar">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('nhomgiongs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>Nhóm Giống</span>
                            </a>
                            <a href="{{ route('kieuhinhs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>Kiểu hình</span>
                            </a>
                            <a href="{{ route('giongs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>Giống</span>
                            </a>
                            <a href="{{ route('mangoaidongs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>Mã Ngoài Đồng</span>
                            </a>
                            <a href="{{ route('maptns.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>Mã PHÒNG THÍ NGHIỆM</span>
                            </a>
                            <a href="{{ route('loaigiatridos.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>loại giá trị đo</span>
                            </a>
                            <a href="{{ route('chitieungoaidongs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>chỉ tiêu ngoài đồng</span>
                            </a>
                            <a href="{{ route('giatridongoaidongs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>giá trị đo ngoài đồng</span>
                            </a>
                            <a href="{{ route('chitieutrongnhas.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>chỉ tiêu trong nhà</span>
                            </a>
                            <a href="{{ route('giatridotrongnhas.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>giá trị đo trong nhà</span>
                            </a>
                            <a href="{{ route('chitieusaubenhs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>chỉ tiêu sâu bệnh</span>
                            </a>
                            <a href="{{ route('loaisaubenhs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>loại sâu bệnh</span>
                            </a>
                            <a href="{{ route('giatridosaubenhs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>giá trị đo sâu bệnh</span>
                            </a>

                            <hr>

                            <a href="{{ route('giaidoantruongthanhs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>GIAI ĐOẠN TRƯỞNG THÀNH</span>
                            </a>
                            <a href="{{ route('doituongtinhtrangs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>đối tượng tính trạng</span>
                            </a>
                            <a href="{{ route('dacdiemtinhtrangs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>đặc điểm tính trạng</span>
                            </a>
                            <a href="{{ route('giatritinhtrangs.index') }}" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-circle-nodes"></i><span>giá trị tính trạng</span>
                            </a>
                        </div>
                    </nav>
                    <!-- Sidebar -->
                </div>
                <div class="col-9 p-0 overflow-auto">
                    {{-- <h3 class="text-uppercase mt-1 text-center bg-warning p-1" style="font-family: 'Roboto', sans-serif;">{{ $title }}</h3> --}}
                    {{-- @yield('content') --}}
                {{-- </div> --}}
            {{-- </div>  --}}
        <!-- Sidebar/menu -->

    {{-- </body> --}}

    <body>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
          <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
          <div class="w3-container">
            <h3 class=""><img src="{{ asset('home/logo/AGU.png') }}" alt="logoAGU" style="width:100%"></h3>
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

        </body>
</html>

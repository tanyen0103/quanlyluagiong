<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/5470c24891.js" crossorigin="anonymous"></script>

    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">

    </head>
    <body>
        <div>
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
        </div>
        <div class="container">
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
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>

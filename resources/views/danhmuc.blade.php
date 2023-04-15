@extends('layouts.app')
@section('content')
<style>
    h2, p {
        text-shadow: 0px 0px 1.5px #000;
    }

    .card-danhmuc{
        /* width: 10rem; */
        height: 10rem;
        background-image: url("//www.gstatic.com/mobilesdk/190424_mobilesdk/nav_nachos@2x.png");
    }

    .card-danhmuc p{
        font-weight: 1000;
        font-size: 1.5rem;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Roboto', sans-serif;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }

    .middle a{
        color: #fff;
        width: 14rem;
        height: 8rem;
        border-radius: 3px;
    }

    .middle a i{
        font-size: 4rem;
    }

    .card:hover .middle {
      opacity: 1;
    }

    .card:hover p {
      opacity: 0;
    }

    </style>
    {{-- Nav Breadcrumb --}}
    <div class="container">
        <div class="nav-breadcrumb bg-gray-100 text-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
                </ol>
            </nav>
        </div>
    </div>

    <h2 class="font-weight-bold text-uppercase text-primary "><i class="fa-solid fa-seedling "></i></h2>
    <hr class="bg-gradient-primary h-0_5r mt-0">
    <div data-aos="fade-right">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Nhóm giống</p>
                        <div class="middle">
                            <a href="{{ route('nhomgiongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Kiểu hình</p>
                        <div class="middle">
                            <a href="{{ route('kieuhinhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Giống</p>
                        <div class="middle">
                            <a href="{{ route('giongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Mã ngoài đồng</p>
                        <div class="middle">
                            <a href="{{ route('mangoaidongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Mã phòng thí nghiệm</p>
                        <div class="middle">
                            <a href="{{ route('maptns.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="font-weight-bold text-uppercase text-primary"><i class="fa-solid fa-ruler"></i></h2>
    <hr class="bg-gradient-primary h-0_5r mt-0">
    <div data-aos="fade-left">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Loại giá trị đo</p>
                        <div class="middle">
                            <a href="{{ route('loaigiatridos.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">Loại sâu bệnh</p>
                        <div class="middle">
                            <a href="{{ route('loaisaubenhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-3">
            <div class="row tinhtrang-font">
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">GĐ trưởng thành</p>
                        <div class="middle">
                            <a href="{{ route('giaidoantruongthanhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">ĐT tính trạng</p>
                        <div class="middle">
                            <a href="{{ route('doituongtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">ĐĐ tính trạng</p>
                        <div class="middle">
                            <a href="{{ route('dacdiemtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-11">
                    <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-light">GT tính trạng</p>
                        <div class="middle">
                            <a href="{{ route('giatritinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

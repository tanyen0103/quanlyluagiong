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
        color: #000000;
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

    .bg-taikhoan{
            background-image: url("{{ asset('public/home/images/bg-creadcrum-01-01.png') }}");
            background-repeat: no-repeat;
            background-size: 100% 100rem;
            background-color: #4e73df;
    }

    </style>
    {{-- Nav Breadcrumb --}}
    <div class="container p-0">
        <div class="nav-breadcrumb bg-gray-100 text-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quản lý tài khoản</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container bg-taikhoan p-3 mb-3">
        <div class="row">
            <div data-aos="fade-right" class="col-lg col-md-12 mb-1">
                <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-dark">Tài khoản</p>
                    <div class="middle">
                        <a href="{{ route('users.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-lg col-md-12 mb-1">
                <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-dark">Quyền</p>
                    <div class="middle">
                        <a href="{{ route('roles.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-users"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

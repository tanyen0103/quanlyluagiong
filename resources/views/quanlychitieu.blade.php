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

    .card:hover .middle{
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
                    <li class="breadcrumb-item active" aria-current="page">Quản lý chỉ tiêu</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-3">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-dark">NGOÀI ĐỒNG</h2>
        </div>
        <div class="row">
            <div data-aos="fade-right" class="col-lg col-md-12 mb-1">
                <div class="bg-success card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('chitieungoaidongs.index') }}" class= "d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-lg col-md-12 mb-1">
                <div class="bg-success card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('giatridongoaidongs.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="bg-gradient-primary h-0_5r"> --}}
    </div>

    <div class="container mb-3">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-dark">TRONG NHÀ</h2>
        </div>
        <div class="row">
            <div data-aos="fade-right" class="col-lg col-md-12 mb-1">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu trong nhà</p>
                    <div class="middle">
                        <a href="{{ route('chitieutrongnhas.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-lg col-md-12 mb-1">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('giatridotrongnhas.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="bg-gradient-primary h-0_5r"> --}}
    </div>


    <div class="container mb-3">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-dark">SÂU BỆNH</h2>
        </div>
        <div class="row">
            <div data-aos="fade-right" class="col-lg col-md-12 mb-1">
                <div class="bg-warning card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu sâu bệnh</p>
                    <div class="middle">
                        <a href="{{ route('chitieutrongnhas.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="col-lg col-md-12 mb-1">
                <div class="bg-warning card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo sâu bệnh</p>
                    <div class="middle">
                        <a href="{{ route('giatridotrongnhas.index') }}" class=" d-flex justify-content-center align-items-center">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr class="bg-gradient-primary h-0_5r"> --}}
    </div>

@endsection

@extends('layouts.app')
@section('content')
<style>
    h2, p {
        text-shadow: 0px 0px 1.5px #000;
    }
    .p{
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      /* backface-visibility: hidden; */
    }
    .img-bg-danhmuc{
        width: 100%;
        height: 20rem;
        object-fit: cover
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

    /* .card:hover .card-danhmuc {
      opacity: 1;
    } */

    .card:hover .middle {
      opacity: 1;
    }

    .card:hover p {
      opacity: 0;
    }

    .btn.middle{
        width: 14rem;
        height: 8rem;
        border-radius: 3px;
    }

    .middle.btn-primary:hover {
        background-color: rgba(255, 255, 255, 0);
        border-color: rgba(255, 255, 255, 0);
    }

    .btn-primary i{
        font-size: 5rem;
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
        <h2 class="font-weight-bold text-uppercase text-dark"><i class="fa-solid fa-sun"></i> Ngoài đồng</h2>
        <div class="row">
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('giatridongoaidongs.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <h2 class="font-weight-bold text-uppercase text-dark"><i class="fa-solid fa-house"></i> Trong nhà</h2>
        <div class="row">
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu trong nhà</p>
                    <div class="middle">
                        <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo ngoài đồng</p>
                    <div class="middle">
                        <a href="{{ route('giatridotrongnhas.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <h2 class="font-weight-bold text-uppercase text-dark"><i class="fa-solid fa-bug"></i> Sâu bệnh</h2>
        <div class="row">
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Chỉ tiêu sâu bệnh</p>
                    <div class="middle">
                        <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-11">
                <div class="bg-primary card card-danhmuc d-flex justify-content-center align-items-center shadow">
                    <p class="text-light">Giá trị đo sâu bệnh</p>
                    <div class="middle">
                        <a href="{{ route('giatridotrongnhas.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

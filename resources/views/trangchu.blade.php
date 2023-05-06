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
        /* font-family: 'Bebas Neue', cursive;
        font-family: 'Roboto', sans-serif; */
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

    .carousel-main{
        height: 25% !important;
        width: 100% !important;
        overflow: hidden;
    }

    .bg-trangchu{
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
                    <li class="breadcrumb-item active" aria-current="page">Trang chủ</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h2 class="font-weight-bold text-dark">DANH MỤC</h2>
    </div>
    {{-- <hr class="bg-gradient-primary h-0_5r mt-0"> --}}
    <div data-aos="fade-right ">
        <div class="container bg-trangchu p-3  mb-3">
            <div class="row ">
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Nhóm giống</p>
                        <div class="middle">
                            <a href="{{ route('nhomgiongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Kiểu hình</p>
                        <div class="middle">
                            <a href="{{ route('kieuhinhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Giống</p>
                        <div class="middle">
                            <a href="{{ route('giongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Mã ngoài đồng</p>
                        <div class="middle">
                            <a href="{{ route('mangoaidongs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark text-center">Mã phòng thí nghiệm</p>
                        <div class="middle">
                            <a href="{{ route('maptns.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Loại giá trị đo</p>
                        <div class="middle">
                            <a href="{{ route('loaigiatridos.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">Loại sâu bệnh</p>
                        <div class="middle">
                            <a href="{{ route('loaisaubenhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tinhtrang-font mt-2">
                @role('Admin')
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">GĐ trưởng thành</p>
                            <div class="middle">
                                <a href="{{ route('giaidoantruongthanhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">ĐT tính trạng</p>
                            <div class="middle">
                                <a href="{{ route('doituongtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">ĐĐ tính trạng</p>
                            <div class="middle">
                                <a href="{{ route('dacdiemtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endrole
                @role('Supermanager')
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">GĐ trưởng thành</p>
                            <div class="middle">
                                <a href="{{ route('giaidoantruongthanhs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">ĐT tính trạng</p>
                            <div class="middle">
                                <a href="{{ route('doituongtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-12 mb-1">
                        <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                            <p class="text-dark">ĐĐ tính trạng</p>
                            <div class="middle">
                                <a href="{{ route('dacdiemtinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                    <i class="fas fa-wrench"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endrole
                <div class="col-lg col-md-12 mb-1">
                    <div class="bg-light card card-danhmuc d-flex justify-content-center align-items-center shadow">
                        <p class="text-dark">GT tính trạng</p>
                        <div class="middle">
                            <a href="{{ route('giatritinhtrangs.index') }}" class=" d-flex justify-content-center align-items-center">
                                <i class="fas fa-wrench"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <hr class="bg-gradient-primary h-0_5r mt-0"> --}}

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-uppercase text-dark">NGOÀI ĐỒNG</i></h2>
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
    </div>

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-uppercase text-dark">TRONG NHÀ</h2>
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
    </div>


    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-bold text-uppercase text-dark">SÂU BỆNH</h2>
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
    </div>

    <script type="text/javascript">
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
      </script>
@endsection

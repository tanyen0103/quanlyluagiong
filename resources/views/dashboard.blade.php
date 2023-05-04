@extends('layouts.app')

@section('content')
    <style>
        .features-icons .features-icons-item .features-icons-icon {
            height: 4rem;
        }

        .features-icons .features-icons-item .features-icons-icon i {
            font-size: 3rem;
        }

        .features-icons i::before{
            margin-bottom: 30px;
        }

        .bg-soluong{
            background-image: url("{{ asset('public/home/images/bg-creadcrum-01-01.png') }}");
            background-repeat: no-repeat;
            background-size: 100% 100rem;
            background-color: #4e73df;
        }

    </style>
    <!-- Begin Page Content -->
    <div class="container pr-0 pl-0" id="quanly">
        {{-- Nav Breadcrumb --}}
        <div class="nav-breadcrumb bg-gray-100 text-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i>  Bảng điều khiển</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Icons Grid-->
    <div class="container bg-soluong shadow mb-3 rounded features-icons text-center text-dark pb-3 pt-4 pr-0 pl-0">
        <div data-aos="fade-up">
            <div class="container mb-3 ">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="card-body shadow bg-light">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                {{-- <div class="features-icons-icon d-flex justify-content-center text-warning">
                                    <i class="fa-solid fa-sun"></i>
                                </div> --}}
                                    <h3 class="text-uppercase">Ngoài đồng</h3>
                                    <p class="lead mb-0">Chỉ tiêu ngoài đồng</p>
                                    <p class="lead mb-0"><b>{{ $totalChiTieuNgoaiDongs }}</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="card-body shadow bg-light">
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                {{-- <div class="features-icons-icon d-flex justify-content-center text-primary">
                                    <i class="fa-solid fa-house"></i>
                                </div> --}}
                                <h3 class="text-uppercase">Trong nhà</h3>
                                <p class="lead mb-0">Chỉ tiêu trong nhà</p>
                                <p class="lead mb-0"><b>{{ $totalChiTieuTrongNhas }}</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card-body shadow bg-light">
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                {{-- <div class="features-icons-icon d-flex justify-content-center text-danger">
                                    <i class="fa-solid fa-bug"></i>
                                </div> --}}
                                <h3 class="text-uppercase">Sâu bệnh</h3>
                                <p class="lead mb-0">Chỉ tiêu sâu bệnh</p>
                                <p class="lead mb-0"><b>{{ $totalChiTieuSauBenhs }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div  class="row" >
                <div data-aos="fade-right" class="col-xl-8 col-md-12">
                    {{-- Chart Pie  --}}
                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tổng quan</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4" data-total-nhom-giongs="{{ $totalNhomGiongs }}" data-total-giongs="{{ $totalGiongs }}" data-total-loai-sau-benhs="{{ $totalLoaiSauBenhs }}">
                                <canvas id="giongChart"></canvas>
                            </div>
                        </div>
                    </div>
                    {{-- End Chart Pie  --}}
                </div>
                <div data-aos="fade-left" class="col-xl-4 col-md-12">
                    <!-- Card Row -->
                    <div class="row" >
                        <!-- Card NhomGiong -->
                        <div class="col-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 16px;">
                                                Nhóm giống</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalNhomGiongs }}</div>
                                        </div>
                                        {{-- <div class="col-auto">
                                            <i class="fa-sharp fa-solid fa-layer-group fa-3x text-primary"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Giong -->
                        <div class="col-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 16px;">
                                                Giống</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalGiongs }}</div>
                                        </div>
                                        {{-- <div class="col-auto">
                                            <i class="fa-sharp fa-solid fa-seedling fa-3x text-success"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card LoaiSauBenh -->
                        <div class="col-12 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 16px;">
                                                Loại sâu bệnh
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalLoaiSauBenhs }}</div>
                                        </div>
                                        {{-- <div class="col-auto">
                                            <i class="fa-sharp fa-solid fa-mosquito fa-3x text-warning"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card Row -->
                    </div>
                </div>
            </div>
        </div>
        {{-- Xuất tổng số lượng --}}
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href="{{ route('thongkes.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                <a href="{{ route('dulieu') }}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm ml-3">
                    <i class="fas fa-search fa-sm text-white-50"></i> Chi tiết dữ liệu</a>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    {{-- Chart Pie  --}}
    var totalNhomGiongs = document.querySelector('.chart-pie').dataset.totalNhomGiongs;
    var totalGiongs = document.querySelector('.chart-pie').dataset.totalGiongs;
    // var totalKieuHinhs = document.querySelector('.chart-pie').dataset.totalKieuHinhs;
    var totalLoaiSauBenhs = document.querySelector('.chart-pie').dataset.totalLoaiSauBenhs;

    var ctx = document.getElementById("giongChart");
    var giongChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ["Nhom Giongs (" + totalNhomGiongs + ")", "Giongs (" + totalGiongs + ")",  "Loai Sau Benhs (" + totalLoaiSauBenhs + ")"],
        datasets: [{
        data: [totalNhomGiongs, totalGiongs, totalLoaiSauBenhs],
        backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#e74a3b'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
    },
        options: {
        maintainAspectRatio: false,
        tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
        },
        legend: {
            display: false
        },
        cutoutPercentage: 80,
        },
    });

     // Phân trang tại dòng
     $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var page = $(this).attr('href').split('page=')[1];
        $.ajax({
            url: url,
            data: {page: page},
            success: function (data) {
                $('#giongs-list').html(data);
                $('html, body').animate({ scrollTop: $('#dataTable').offset().top }, 'slow');
            }
        });
    });

</script>

@endsection

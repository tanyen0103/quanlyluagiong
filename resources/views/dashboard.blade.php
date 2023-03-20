@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container" id="quanly">
        {{-- Nav Breadcrumb --}}
        <div class="nav-breadcrumb bg-gray-100 text-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i>  Bảng điều khiển</a></li>
                </ol>
            </nav>
        </div>

        <!-- Content Row -->
        <div  class="row" >

            <!-- Card NhomGiong -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 16px;">
                                    Nhóm giống</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalNhomGiongs }}</div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                <i class="fa-sharp fa-solid fa-layer-group fa-3x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Giong -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 16px;">
                                    Giống</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalGiongs }}</div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-wheat fa-2x text-gray-300"></i> --}}
                                <i class="fa-sharp fa-solid fa-seedling fa-3x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card KieuHinh -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-size: 16px;">
                                    Kiểu hình
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalKieuHinhs }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> --}}
                                <i class="fa-sharp fa-solid fa-eye fa-3x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card LoaiSauBenh -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-size: 16px;">
                                    Loại sâu bệnh
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalLoaiSauBenhs }}</div>
                            </div>
                            <div class="col-auto">
                                {{-- <i class="fas fa-comments fa-2x text-gray-300"></i> --}}
                                <i class="fa-sharp fa-solid fa-mosquito fa-3x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Stickey button --}}
        {{-- <div class=" sticky-dashboard position-relative position-fixed d-none d-lg-block d-xl-block" style="left:97%; z-index: 5;">
            <a href="#quanly" class="btn btn-primary btn-circle mb-2" title="Thông tin">
                <span class="icon text-white-20">
                    <i class="fas fa-info" ></i>
                </span>
            </a>
            <a href="{{ route("docs") }}" class="btn btn-info btn-circle mb-2" title="Hướng dẫn">
                <span class="icon text-white-20">
                    <i class="fas fa-question"></i>
                </span>
            </a>
            <a href="#ghichu" class="btn btn-warning btn-circle mb-2"  title="Ghi chú">
                <span class="icon text-white-20">
                    <i class="fa-regular fa-note-sticky"></i>
                </span>
            </a>
        </div> --}}

        {{-- Chart Pie  --}}
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tổng quan</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4" data-total-nhom-giongs="{{ $totalNhomGiongs }}" data-total-giongs="{{ $totalGiongs }}" data-total-kieu-hinhs="{{ $totalKieuHinhs }}" data-total-loai-sau-benhs="{{ $totalLoaiSauBenhs }}">
                                <canvas id="giongChart"></canvas>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- BẢNG TÍNH TRẠNG
        <div id="ghichu" class="card shadow mb-5 border-bottom-primary">
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                <div class="">
                    <h3 class="m-0 font-weight-bold text-white">QUY ĐỊNH TÍNH TRẠNG</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row d-flex justify-content-center">
                        <div class="input-group mb-2 col-5">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Tìm kiếm" aria-describedby="button-addon2" id="searchInput">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Đối tượng tính trạng</th>
                                <th>Mô tả</th>

                                <th>Giai đoạn trưởng thành</th>

                                <th>Đặc điểm tính trạng</th>

                                <th>Điểm</th>
                            </tr>
                        </thead>
                        @foreach ($giatritinhtrangs as $item)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_ten}}</td>
                                <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_mota}}</td>

                                <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->GiaiDoanTruongThanh->giaidoantt_ten}}</td>

                                <td>{{ $item->DacDiemTinhTrang->dacdiemtt_ten}}</td>

                                <td>{{ $item->giatritt_diem }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div> --}}
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    {{-- Chart Pie  --}}
    var totalNhomGiongs = document.querySelector('.chart-pie').dataset.totalNhomGiongs;
    var totalGiongs = document.querySelector('.chart-pie').dataset.totalGiongs;
    var totalKieuHinhs = document.querySelector('.chart-pie').dataset.totalKieuHinhs;
    var totalLoaiSauBenhs = document.querySelector('.chart-pie').dataset.totalLoaiSauBenhs;

    var ctx = document.getElementById("giongChart");
    var giongChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
        labels: ["Nhom Giongs (" + totalNhomGiongs + ")", "Giongs (" + totalGiongs + ")", "Kieu Hinhs (" + totalKieuHinhs + ")", "Loai Sau Benhs (" + totalLoaiSauBenhs + ")"],
        datasets: [{
        data: [totalNhomGiongs, totalGiongs, totalKieuHinhs, totalLoaiSauBenhs],
        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#e74a3b'],
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

</script>

@endsection

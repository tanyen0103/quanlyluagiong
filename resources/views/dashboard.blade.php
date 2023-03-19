@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container">
        {{-- Nav Breadcrumb --}}
        <div class="nav-breadcrumb bg-gray-100 text-lg">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i>  Bảng điều khiển</a></li>
                </ol>
            </nav>
        </div>

        <!-- Content Row -->
        <div class="row" >

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
        <div class=" sticky-dashboard position-relative position-fixed d-none d-lg-block d-xl-block" style="left:97%; z-index: 5; transition: left 3s;
        transition-delay: 1s;">
            <a href="#quanly" class="btn btn-primary btn-circle mb-2">
                <span class="icon text-white-20">
                    <i class="fas fa-folder"></i>
                </span>
            </a>
            <a href="#chitieu" class="btn btn-info btn-circle mb-2">
                <span class="icon text-white-20">
                    <i class="fas fa-info-circle"></i>
                </span>
            </a>
            <a href="#ghichu" class="btn btn-warning btn-circle mb-2">
                <span class="icon text-white-20">
                    <i class="fa-regular fa-note-sticky"></i>
                </span>
            </a>
        </div>

        {{-- Hướng dẫn đo chỉ tiêu  --}}
        <div class="row">
            <div class="col-xl col-md-19">
                {{-- Đo chỉ tiêu --}}
                <div id="chitieu" class="card shadow mb-5 border-bottom-primary">
                    {{-- Card header --}}
                    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                        <div class="">
                            <h3 class="m-0 font-weight-bold text-white">HƯỚNG DẪN ĐO CHỈ TIÊU</h3>
                        </div>
                    </div>
                    {{-- Card body --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-pills justify-content-center mb-3 text-center custom" id="pills-tab" role="tablist">
                                    <div class="step-line"></div>
                                    <li class="nav-item btn btn-sm">
                                        <a class="nav-link active custom" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab"
                                        aria-controls="pills-1" aria-selected="true">
                                        {{-- <span class="icon"><i class="bi bi-person-circle"></i></span> --}}
                                        <span class="text">Bước 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item btn btn-sm">
                                        <a class="nav-link custom" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab"
                                        aria-controls="pills-2" aria-selected="false">
                                        {{-- <span class="icon"><i class="bi bi-card-checklist"></i></span> --}}
                                        <span class="text">Bước 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item btn btn-sm">
                                        <a class="nav-link custom" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab"
                                        aria-controls="pills-3" aria-selected="false">
                                        {{-- <span class="icon"><i class="bi bi-credit-card"></i></span> --}}
                                        <span class="text">Bước 3</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content custom pt-4" id="pills-tabContent">
                                    {{-- step1 --}}
                                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="card">
                                        <div class="card-header">
                                        Nhập loại giá trị đo
                                        </div>
                                        <div class="card-body">
                                        <ul>
                                            <li>Tên loại</li>
                                            <li>Đơn vị đo</li>
                                        </ul>
                                        <a href="{{ route('loaigiatridos.index') }}" class="btn btn-primary">Đi đến loại giá trị đo</a>
                                        </div>
                                    </div>
                                </div>
                                    {{-- step2 --}}
                                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            Nhập chỉ tiêu ngoài đồng - trong nhà
                                        </div>
                                        <div class="card-body">
                                            <ul>
                                                <li>Giống</li>
                                                <li>Các giá trị cột mặc định</li>
                                                <li><span class="text-danger font-weight-bold">Chỉ được tạo một chỉ tiêu cho một giống</span></li>
                                            </ul>
                                            <div class="dflex">
                                                <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu ngoài đồng</a>
                                                <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu trong nhà</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                    {{-- step3 --}}
                                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                Nhập giá trị đo ngoài đồng - trong nhà
                                            </div>
                                            <div class="card-body">
                                                <ul>
                                                    <li>Chọn - Giống tương ứng với bảng chỉ tiêu</li>
                                                    <li>Chọn - Tên loại giá trị cần nhập</li>
                                                    <li>Nhập giá trị theo loại</li>
                                                    <li><span class="text-danger font-weight-bold">Không qui định số lần đo</span></li>
                                                </ul>
                                                <div class="dflex">
                                                    <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu ngoài đồng</a>
                                                    <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu trong nhà</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kết thúc đo chỉ tiêu --}}
            </div>
            <div class="col-xl col-md-19">
                {{-- Đo sâu bệnh --}}
                <div class="card shadow mb-5 border-bottom-primary">
                    {{-- Card header --}}
                    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                        <div class="">
                            <h3 class="m-0 font-weight-bold text-white">HƯỚNG DẪN ĐO SÂU BỆNH</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <ul class="nav nav-pills justify-content-center mb-3 text-center custom" id="pills-tab" role="tablist">
                                <div class="step-line"></div>
                                <li class="nav-item btn btn-sm">
                                    <a class="nav-link active custom" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                                    aria-controls="pills-4" aria-selected="true">
                                    {{-- <span class="icon"><i class="bi bi-person-circle"></i></span> --}}
                                    <span class="text">Bước 1</span>
                                    </a>
                                </li>
                                <li class="nav-item btn btn-sm">
                                    <a class="nav-link custom" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab"
                                    aria-controls="pills-5" aria-selected="false">
                                    {{-- <span class="icon"><i class="bi bi-card-checklist"></i></span> --}}
                                    <span class="text">Bước 2</span>
                                    </a>
                                </li>
                                <li class="nav-item btn btn-sm">
                                    <a class="nav-link custom" id="pills-6-tab" data-toggle="pill" href="#pills-6" role="tab"
                                    aria-controls="pills-6" aria-selected="false">
                                    {{-- <span class="icon"><i class="bi bi-credit-card"></i></span> --}}
                                    <span class="text">Bước 3</span>
                                    </a>
                                </li>
                                </ul>
                                <div class="tab-content custom pt-4" id="pills-tabContent">
                                    {{-- step1 --}}
                                <div class="tab-pane fade show active" id="pills-4" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="card">
                                        <div class="card-header">
                                        Nhập loại sâu bệnh đo
                                        </div>
                                        <div class="card-body">
                                        <ul>
                                            <li>Tên sâu bệnh</li>
                                            <li>Đơn vị </li>
                                            <li>Mô tả </li>
                                            <li>Hình ảnh</li>
                                        </ul>
                                        <a href="{{ route('loaisaubenhs.index') }}" class="btn btn-primary">Đi đến loại sâu bệnh</a>
                                        </div>
                                    </div>
                                </div>
                                    {{-- step2 --}}
                                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="card">
                                        <div class="card-header">
                                        Nhập chỉ tiêu sâu bênh
                                        </div>
                                        <div class="card-body">
                                        <ul>
                                            <li>Giống</li>
                                            <li>Các giá trị cột mặc định</li>
                                            <li><span class="text-danger font-weight-bold">Chỉ được tạo một chỉ tiêu cho một giống</span></li>
                                        </ul>
                                        <a href="{{ route('chitieusaubenhs.index') }}" class="btn btn-primary">Đi đến chỉ tiêu sâu bệnh</a>
                                        </div>
                                    </div>
                                </div>
                                    {{-- step3 --}}
                                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="card">
                                            <div class="card-header">
                                            Nhập giá trị đo sâu bệnh
                                            </div>
                                            <div class="card-body">
                                            <ul>
                                                <li>Chọn - Giống tương ứng với bảng chỉ tiêu</li>
                                                <li>Chọn - Tên loại sâu bệnh</li>
                                                <li>Nhập giá trị sâu bệnh</li>
                                                <li><span class="text-danger font-weight-bold">Không qui định số lần đo</span></li>
                                            </ul>
                                            <a href="{{ route('giatridongoaidongs.index') }}" class="btn btn-primary">Đi đến giá trị đo sâu bệnh</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Kết thúc đo sâu bệnh --}}
            </div>
        </div>

        {{-- BẢNG TÍNH TRẠNG --}}
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
        </div>
    </div>


<script>
    // Sticky button
    $(document).ready(function(){
      $(".tab1").hoverSlide({
        backgroundColor: "#2196F3"
      });

      $(".tab2").hoverSlide({
        top: 120,
        backgroundColor: "#F1C40F"
      });

      $(".tab3").hoverSlide({
        top: 180,
        backgroundColor: "#f44336"
      });

      $(".tab4").hoverSlide({
        top: 240,
        backgroundColor: "#555"
      });
});
</script>

@endsection

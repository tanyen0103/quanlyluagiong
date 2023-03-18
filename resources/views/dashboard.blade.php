@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
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

            <!-- Earnings (Monthly) Card Example -->
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

            <!-- Earnings (Monthly) Card Example -->
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

            <!-- Pending Requests Card Example -->
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

        {{-- Đo chỉ tiêu --}}
        <div class="card shadow mb-5 border-bottom-primary">
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
                            <li class="nav-item">
                                <a class="nav-link active custom" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab"
                                aria-controls="pills-1" aria-selected="true">
                                <span class="icon"><i class="bi bi-person-circle"></i></span>
                                <span class="text">Bước 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab"
                                aria-controls="pills-2" aria-selected="false">
                                <span class="icon"><i class="bi bi-card-checklist"></i></span>
                                <span class="text">Bước 2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab"
                                aria-controls="pills-3" aria-selected="false">
                                <span class="icon"><i class="bi bi-credit-card"></i></span>
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
                                <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary">Đi đến chỉ tiêu ngoài đồng</a>
                                <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary">Đi đến chỉ tiêu trong nhà</a>
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
                                    <a href="{{ route('giatridongoaidongs.index') }}" class="btn btn-primary">Đi đến giá trị đo ngoài đồng</a>
                                    <a href="{{ route('giatridotrongnhas.index') }}" class="btn btn-primary">Đi đến giá trị đo trong nhà</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kết thúc đo chỉ tiêu --}}

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
                        <li class="nav-item">
                            <a class="nav-link active custom" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                            aria-controls="pills-4" aria-selected="true">
                            <span class="icon"><i class="bi bi-person-circle"></i></span>
                            <span class="text">Bước 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab"
                            aria-controls="pills-5" aria-selected="false">
                            <span class="icon"><i class="bi bi-card-checklist"></i></span>
                            <span class="text">Bước 2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom" id="pills-6-tab" data-toggle="pill" href="#pills-6" role="tab"
                            aria-controls="pills-6" aria-selected="false">
                            <span class="icon"><i class="bi bi-credit-card"></i></span>
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

        {{-- BẢNG TÍNH TRẠNG --}}
        <div class="card shadow mb-5 border-bottom-primary">
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
                <div class="">
                    <h3 class="m-0 font-weight-bold text-white">Bảng quy định tính trạng</h3>
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


    {{-- <div class="card shadow mb-5 border-bottom-primary">
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng đo ngoài đồng</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridongoaidongs.index') }}">Tuỳ chỉnh</a>
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
                            <th>Nhóm giống</th>
                            <th>Giống</th>
                            <th>Phiến lá</th>
                            <th>Tai lá</th>
                            <th>Góc nhánh</th>
                            <th>Bẹ lá</th>
                            <th>Góc lá</th>
                            <th>Màu sắc góc lá</th>
                            <th>Góc lá đòng</th>
                            <th>Thoát CB</th>
                            <th>Màu sắc góc thân</th>
                            <th>Dáng bông</th>
                            <th>Cong trục bông</th>
                            <th>Râu</th>
                            <th>Tên giá trị đo</th>
                            <th>Đơn vị</th>
                            <th>Giá trị</th>
                        </tr>
                    </thead>
                    @foreach ($giatridongoaidongs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->Giong->NhomGiong->nhomgiong_code }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->Giong->giong_ten }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_phienla }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_taila }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_bela }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocla }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_msgocla }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocladong }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_thoatcb }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_msgocthan }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_dangbong }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong }}</td>
                            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_rau }}</td>

                            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_ten}}</td>
                            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_donvi}}</td>

                            <td>{{ $item->giatridongoaidong_giatri }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5 border-bottom-primary">

        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng đo trong nhà</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridotrongnhas.index') }}">Tuỳ chỉnh</a>
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
                            <th>Nhóm giống</th>
                            <th>Giống</th>
                            <th>Gié C2</th>
                            <th>Độ rụng hạt</th>
                            <th>Màu sắc vỏ trấu</th>
                            <th>Dạng thóc</th>
                            <th>Màu sắc gạo</th>
                            <th>Trọng lượng 1000 hạt</th>
                            <th>Độ ẩm</th>
                            <th>Thơm</th>
                            <th>Đánh giá</th>
                            <th>Tên giá trị đo</th>
                            <th>Đơn vị</th>
                            <th>Giá trị</th>
                        </tr>
                    </thead>
                    @foreach ($giatridotrongnhas as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->ChiTieuTrongNha->Giong->NhomGiong->nhomgiong_code }}</td>
                            <td>{{ $item->ChiTieuTrongNha->Giong->giong_ten }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_giec2 }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_dorunghat }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_msvotrau }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_dangthoc }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_mausacgao }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_tl1000hat }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_doam }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_thom }}</td>
                            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_danhgia }}</td>

                            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_ten}}</td>
                            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_donvi}}</td>

                            <td>{{ $item->giatridotrongnha_giatri }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5 border-bottom-primary">
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng đo sâu bệnh</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridosaubenhs.index') }}">Tuỳ chỉnh</a>
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
                            <th>Nhóm giống</th>
                            <th>Giống</th>
                            <th>Chọn lọc</th>
                            <th>Đánh giá khác</th>

                            <th>Tên loại</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th></th>
                            <th>Đơn vị</th>

                            <th>Giá trị</th>
                        </tr>
                    </thead>
                    @foreach ($giatridosaubenhs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->ChiTieuSauBenh->Giong->NhomGiong->nhomgiong_code }}</td>
                            <td>{{ $item->ChiTieuSauBenh->Giong->giong_ten }}</td>
                            <td>{{ $item->ChiTieuSauBenh->chitieusaubenh_chonloc }}</td>
                            <td>{{ $item->ChiTieuSauBenh->chitieusaubenh_danhgia }}</td>

                            <td>{{ $item->LoaiSauBenh->loaisaubenh_ten}}</td>
                            <td>{{ $item->LoaiSauBenh->loaisaubenh_mota}}</td>
                            <td><img class="d-block" src="{{ env('STORAGE_URL') . $item->LoaiSauBenh->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></td>
                            <td>{{ $item->LoaiSauBenh->loaisaubenh_donvi}}</td>

                            <td>{{ $item->giatridosaubenh_giatri }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div> --}}

@endsection

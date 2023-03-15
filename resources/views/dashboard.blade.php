@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Export Excel</a>
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

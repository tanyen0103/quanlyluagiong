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
        <div  class="row" >
            <div class="col-xl-8 col-md-12">
                {{-- Chart Pie  --}}
                <!-- Content Row -->
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
                {{-- End Chart Pie  --}}
            </div>
            <div class="col-xl-4 col-md-12">
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
                                    <div class="col-auto">
                                        {{-- <i class="fas fa-calendar fa-2x text-gray-300"></i> --}}
                                        <i class="fa-sharp fa-solid fa-layer-group fa-3x text-primary"></i>
                                    </div>
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
                                    <div class="col-auto">
                                        <i class="fa-sharp fa-solid fa-seedling fa-3x text-success"></i>
                                    </div>
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
                                <div class="col-auto">
                                    <i class="fa-sharp fa-solid fa-mosquito fa-3x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Row -->
            </div>
        </div>

    </div>



        {{-- Thống kê giống lúa --}}
        <div class="card shadow mb-3 border-bottom-primary">
            {{-- Card header --}}
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                <h3 class="m-0 font-weight-bold text-white">THỐNG KÊ GIỐNG LÚA</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('dashboards.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                    <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                            </div>
                        </div>
                        <div class="input-group mb-2 col">
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
                                {{-- @php
                                    $numColumnnds = 5;
                                    $numColumntns = 5;
                                    $numColumnsbs = 5;
                                @endphp --}}
                                <th></th>
                                <th colspan="5">Giống lúa</th>
                                {{-- <th colspan="{{ 12 + $numColumnnds }}">Chỉ tiêu ngoài đồng</th>
                                <th colspan="{{ 9 + $numColumntns }}">Chỉ tiêu trong nhà</th>
                                <th colspan="{{ 2 + $numColumnsbs }}">Chỉ tiêu sâu bệnh</th> --}}
                                <th colspan="14">Chỉ tiêu ngoài đồng</th>
                                <th colspan="11">Chỉ tiêu trong nhà</th>
                                <th colspan="4">Chỉ tiêu sâu bệnh</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nhóm</th>
                                <th>Kiểu hình</th>
                                <th>Mã ngoài đồng</th>
                                <th>Mã phòng thí nghiệm</th>
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
                                {{-- <th colspan="{{ $numColumnnds }}">Loại giá trị đo</th> --}}
                                <th>Giá trị đo</th>
                                <th>Giá trị</th>


                                <th>Gié C2</th>
                                <th>Độ rụng hạt</th>
                                <th>Màu sắc vỏ trấu</th>
                                <th>Dạng thóc</th>
                                <th>Màu sắc gạo</th>
                                <th>Trọng lượng 1000 hạt</th>
                                <th>Độ ẩm</th>
                                <th>Thơm</th>
                                <th>Đánh giá</th>
                                {{-- <th colspan="{{ $numColumntns }}">Loại giá trị đo</th> --}}
                                <th>Giá trị đo</th>
                                <th>Giá trị</th>

                                <th>Chọn lọc</th>
                                <th>Đánh giá khác</th>
                                {{-- <th colspan="{{ $numColumnsbs }}">Loại sâu bệnh</th> --}}
                                <th>Giá trị sâu bệnh</th>
                                <th>Giá trị</th>

                            </tr>
                        </thead>
                        @foreach ($giongs as $item)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $item->NhomGiong->nhomgiong_code }}</td>
                                <td>{{ $item->KieuHinh->kieuhinh_ten}}</td>
                                <td>
                                    @foreach ($item->MaNgoaiDong as $field)
                                        <div>{{ $field->field_code }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->MaPTN as $ptn)
                                        <div>{{ $ptn->ptn_code }}</div>
                                    @endforeach
                                </td>
                                <td>{{ $item->giong_ten }}</td>

                                {{-- Chỉ tiêu ngoài đồng  --}}
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_phienla }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_taila }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_gocnhanh }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_bela }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_gocla }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_msgocla }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_gocladong }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_thoatcb }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_msgocthan }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_dangbong }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_congtrucbong }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                        <div>{{ $ctnd->chitieungoaidong_rau }}</div>
                                    @endforeach
                                </td>
                                {{-- @for ($i = 1; $i <= $numColumnnds; $i++)
                                    <td></td>
                                @endfor --}}
                                <td colspan="2">
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                            @foreach ($ctnd->GiaTriDoNgoaiDong as $gtdnd)
                                                <div>
                                                    {{ $gtdnd->LoaiGiaTriDo->loaigiatrido_ten }}
                                                    ({{ $gtdnd->LoaiGiaTriDo->loaigiatrido_donvi }}) =
                                                    {{ $gtdnd->giatridongoaidong_giatri }} </div>
                                                <hr>
                                            @endforeach
                                    @endforeach
                                </td>

                                {{-- Chỉ tiêu trong nhà  --}}
                                 <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_giec2 }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_dorunghat }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_msvotrau }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_dangthoc }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_mausacgao }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_tl1000hat }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_doam }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_thom }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                        <div>{{ $cttn->chitieutrongnha_danhgia }}</div>
                                    @endforeach
                                </td>
                                <td colspan="2">
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                            @foreach ($cttn->GiaTriDoTrongNha as $gtdtn)
                                                <div>{{ $gtdtn->LoaiGiaTriDo->loaigiatrido_ten }}
                                                    ({{ $gtdtn->LoaiGiaTriDo->loaigiatrido_donvi }}) =
                                                    {{ $gtdtn->giatridotrongnha_giatri }}</div>
                                                    <hr>
                                            @endforeach
                                    @endforeach
                                </td>
                                {{-- @for ($i = 1; $i <= $numColumntns; $i++)
                                    <td> </td>
                                @endfor --}}

                                {{-- CHỈ TIÊU SÂU BỆNH --}}

                                <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                        <div>{{ $ctsb->chitieusaubenh_chonloc }}</div>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                        <div>{{ $ctsb->chitieusaubenh_danhgia }}</div>
                                    @endforeach
                                </td>
                                {{-- <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div>{{ $gtdsb->LoaiSauBenh->loaisaubenh_ten }}</div>
                                            @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div><img class="d-block" src="{{ env('STORAGE_URL') . $gtdsb->LoaiSauBenh->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></div>
                                            @endforeach
                                    @endforeach
                                </td> --}}
                                <td colspan="2">
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div>{{ $gtdsb->giatridosaubenh_giatri }} ({{ $gtdsb->LoaiSauBenh->loaisaubenh_donvi }})</div>
                                            @endforeach
                                    @endforeach
                                </td>
                                {{-- @for ($i = 1; $i <= $numColumnsbs; $i++)
                                    <td> </td>
                                @endfor --}}
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    {!! $giongs->links() !!}


        {{-- BẢNG GIÁ TRỊ CHI TIẾT --}}
        <div class="card shadow mb-3 border-bottom-primary">
            {{-- Card header --}}
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                <h3 class="m-0 font-weight-bold text-white">THỐNG KÊ SỐ LƯỢNG</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row d-flex justify-content-center">
                        <div class="col mb-2">
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('thongkes.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                    <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Nhóm giống</th>
                                <th>Giống</th>
                                <th>Loại sâu bệnh</th>
                                <th>Đo sâu bệnh</th>
                                <th>Đo ngoài đồng</th>
                                <th>Đo trong nhà</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tổng</td>
                                <td>{{ $totalNhomGiongs }}</td>
                                <td>{{ $totalGiongs }}</td>
                                <td>{{ $totalLoaiSauBenhs }}</td>
                                <td>{{ $totalGiaTriDoSauBenhs }}</td>
                                <td>{{ $totalGiaTriDoNgoaiDongs }}</td>
                                <td>{{ $totalGiaTriDoTrongNhas }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

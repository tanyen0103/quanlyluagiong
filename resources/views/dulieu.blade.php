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
                    <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i>  Dữ liệu giống lúa</a></li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Thống kê giống lúa --}}
    <div class="container pr-0 pl-0">
        <div id="giongs-list" class="card shadow mb-3 border-bottom-primary">
            {{-- Card header --}}
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
                <h3 class="m-0 font-weight-bold text-white">DỮ LIỆU GIỐNG LÚA</h3>
            </div>
            <div class="card-body">
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
                <div class="table-responsive">
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
                                <th colspan="15" class="text-center">Chỉ tiêu ngoài đồng</th>
                                <th colspan="12" class="text-center">Chỉ tiêu trong nhà</th>
                                <th colspan="5" class="text-center">Chỉ tiêu sâu bệnh</th>
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

                                <th>Loại giá trị đo</th>
                                <th>Giá trị</th>
                                <th>Đơn vị</th>

                                {{-- <th colspan="10">Cao cây</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th>

                                <th colspan="10">Số chồi</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th>

                                <th colspan="10">Dài lá (cm)</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th>

                                <th colspan="10">Rộng lá</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th> --}}

                                {{-- <th colspan="{{ $numColumnnds }}">Loại giá trị đo</th> --}}



                                <th>Gié C2</th>
                                <th>Độ rụng hạt</th>
                                <th>Màu sắc vỏ trấu</th>
                                <th>Dạng thóc</th>
                                <th>Màu sắc gạo</th>

                                <th>Trọng lượng 1000 hạt</th>
                                <th>Độ ẩm</th>
                                <th>Thơm</th>
                                <th>Đánh giá</th>

                                <th>Loại giá trị đo</th>
                                <th>Giá trị</th>
                                <th>Đơn vị</th>

                                {{-- <th colspan="5">D Gạo</th>
                                <th colspan="5">G Gạo</th>

                                <th colspan="10">Dài bông (cm)</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th>

                                <th colspan="10">Số hạt chắc</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th>

                                <th colspan="10">Số hạt lép</th>
                                <th>TB</th>
                                <th>SD</th>
                                <th>M&plusmn;SD</th> --}}


                                {{-- <th colspan="{{ $numColumntns }}">Loại giá trị đo</th> --}}


                                {{-- Sau Benh  --}}
                                {{-- <th colspan="10">1. Bệnh đạo ôn hại lá Pyricularia oryzae</th>
                                <th colspan="10">2. Bệnh đạo ôn cổ bông Pyricularia oryzae</th>
                                <th colspan="10">3. Bệnh bạc lá Xanthomonas oryzae pv. Oryzal</th>
                                <th colspan="10">4. Bệnh khô vằn  Rhizoctonia solani</th>
                                <th colspan="10">5. Sâu đục thân</th>
                                <th colspan="10">6. Sâu cuốn lá Cnaphalocrosis</th>
                                <th colspan="10">7. Rầy nâu (Ninaparvata lugens)</th>
                                <th colspan="10">8. Mũi hành Orseolia oryzae</th> --}}

                                {{-- <th colspan="{{ $numColumnsbs }}">Loại sâu bệnh</th> --}}

                                <th>Loại sâu bệnh</th>
                                <th>Giá trị</th>
                                <th>Đơn vị</th>
                                <th>Chọn lọc</th>
                                <th>Đánh giá khác</th>
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
                                <td colspan="3">
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                            @foreach ($ctnd->GiaTriDoNgoaiDong as $gtdnd)
                                                    <div>
                                                        {{ $gtdnd->LoaiGiaTriDo->loaigiatrido_ten }} ({{ $gtdnd->LoaiGiaTriDo->loaigiatrido_donvi }}) =  {{ $gtdnd->giatridongoaidong_giatri }}
                                                    </div>
                                                    <br>
                                            @endforeach
                                    @endforeach
                                </td>
                                {{-- <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                            @foreach ($ctnd->GiaTriDoNgoaiDong as $gtdnd)
                                                    <div>
                                                        {{ $gtdnd->giatridongoaidong_giatri }}
                                                    </div>
                                                    <br>
                                            @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuNgoaiDong as $ctnd)
                                            @foreach ($ctnd->GiaTriDoNgoaiDong as $gtdnd)
                                                    <div>
                                                        {{ $gtdnd->LoaiGiaTriDo->loaigiatrido_donvi }}
                                                    </div>
                                                    <br>
                                            @endforeach
                                    @endforeach
                                </td> --}}
                                {{-- Cao cay  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

                                {{-- So choi  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

                                {{-- Dai la  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

                                {{-- Rong la  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

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

                                {{-- D Gao  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}

                                 {{-- G Gao  --}}
                                 {{-- <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td> --}}

                                 {{-- Dai bong  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

                                 {{-- So hat chac  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}

                                {{-- So hat lep  --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td></td>
                                <td></td>
                                <td></td> --}}
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
                                <td colspan="3">
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                            @foreach ($cttn->GiaTriDoTrongNha as $gtdtn)
                                                <div>
                                                    {{ $gtdtn->LoaiGiaTriDo->loaigiatrido_ten }}({{ $gtdtn->LoaiGiaTriDo->loaigiatrido_donvi }}) =  {{ $gtdtn->giatridotrongnha_giatri }}
                                                </div>
                                                <br>
                                            @endforeach
                                    @endforeach
                                </td>
                                {{-- <td >
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                            @foreach ($cttn->GiaTriDoTrongNha as $gtdtn)
                                                <div>
                                                    {{ $gtdtn->giatridotrongnha_giatri }}
                                                </div>
                                                <br>
                                            @endforeach
                                    @endforeach
                                </td>
                                <td >
                                    @foreach ($item->ChiTieuTrongNha as $cttn)
                                            @foreach ($cttn->GiaTriDoTrongNha as $gtdtn)
                                                <div>
                                                    {{ $gtdtn->LoaiGiaTriDo->loaigiatrido_donvi }}
                                                </div>
                                                <br>
                                            @endforeach
                                    @endforeach
                                </td> --}}

                                {{-- CHỈ TIÊU SÂU BỆNH --}}
                                {{-- 1. Bệnh đạo ôn hại lá Pyricularia oryzae --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 2. Bệnh đạo ôn cổ bông Pyricularia oryzae --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 3. Bệnh bạc lá Xanthomonas oryzae pv. Oryzal --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 4. Bệnh khô vằn  Rhizoctonia solani --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 5. Sâu đục thân --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 6. Sâu cuốn lá Cnaphalocrosis --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 7. Rầy nâu (Ninaparvata lugens) --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                                {{-- 8. Mũi hành Orseolia oryzae --}}
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}

                                <td colspan="3">
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div>{{ $gtdsb->LoaiSauBenh->loaisaubenh_ten }} ({{ $gtdsb->LoaiSauBenh->loaisaubenh_donvi }}) = {{ $gtdsb->giatridosaubenh_giatri }}</div>
                                            @endforeach
                                    @endforeach
                                </td>

                                {{-- <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div><img class="d-block" src="{{ env('STORAGE_URL') . $gtdsb->LoaiSauBenh->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></div>
                                            @endforeach
                                    @endforeach
                                </td> --}}
                                {{-- <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div>{{ $gtdsb->giatridosaubenh_giatri }} </div>
                                            @endforeach
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($item->ChiTieuSauBenh as $ctsb)
                                            @foreach ($ctsb->GiaTriDoSauBenh as $gtdsb)
                                                <div>{{ $gtdsb->LoaiSauBenh->loaisaubenh_donvi }}</div>
                                            @endforeach
                                    @endforeach
                                </td> --}}
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
    </div>


@endsection

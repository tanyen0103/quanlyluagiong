@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giá trị đo ngoài đồng</li>
            </ol>
        </nav>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-3 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng giá trị đo ngoài đồng</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridongoaidongs.create') }}">Tạo mới</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('giatridongoaidongs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                            <th>No</th>
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
                            <th width='160px'></th>
                        </tr>
                    </thead>
                    @foreach ($giatridongoaidongs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
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
                            <td >
                                <form class="d-flex" action="{{ route('giatridongoaidongs.destroy',$item->id) }}" method="POST">
                                    <a class="btn btn-info mt-1 mr-1" href="{{ route('giatridongoaidongs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                    <a class="btn btn-primary mt-1 mr-1" href="{{ route('giatridongoaidongs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger mt-1" onclick="return confirmDelete()"><i class="fa-solid fa-trash" title="xoá"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    {!! $giatridongoaidongs->links() !!}

@endsection

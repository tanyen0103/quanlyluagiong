@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giá trị đo trong nhà</li>
            </ol>
        </nav>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng giá trị đo trong nhà</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridotrongnhas.create') }}">Tạo mới</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('giatridotrongnhas.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                        </div>
                    </div>
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
                            <th width='160px'></th>
                        </tr>
                    </thead>
                    @foreach ($giatridotrongnhas as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
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
                            <td>
                                <form class="d-flex"  action="{{ route('giatridotrongnhas.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info mt-1 mr-1" href="{{ route('giatridotrongnhas.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                    <a class="btn btn-primary mt-1 mr-1" href="{{ route('giatridotrongnhas.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

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
    {!! $giatridotrongnhas->links() !!}

@endsection

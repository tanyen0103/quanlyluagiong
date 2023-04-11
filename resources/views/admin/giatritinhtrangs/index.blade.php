@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giá trị tính trạng</li>
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
                <h3 class="m-0 font-weight-bold text-white">Bảng giá trị tính trạng</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatritinhtrangs.create') }}">Tạo mới</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('giatritinhtrangs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                            <th>Đối tượng tính trạng</th>
                            <th>Mô tả</th>

                            <th>Giai đoạn trưởng thành</th>

                            <th>Đặc điểm tính trạng</th>

                            <th>Điểm</th>

                            <th width="160px"></th>
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
                            <td>
                                <form action="{{ route('giatritinhtrangs.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info mt-1" href="{{ route('giatritinhtrangs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                    <a class="btn btn-primary mt-1" href="{{ route('giatritinhtrangs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

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
    <div class="container d-flex justify-content-center">
        <a href="{{ route('giatritinhtrangs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
    </div>
    {!! $giatritinhtrangs->links() !!}

@endsection


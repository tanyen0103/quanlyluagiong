@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Giống</li>
            </ol>
        </nav>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-3 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng giống</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giongs.create') }}">Tạo mới</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('giongs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                            <th>Nhóm</th>
                            <th>Kiểu hình</th>
                            <th>Mã ngoài đồng</th>
                            <th>Mã phòng thí nghiệm</th>
                            <th>Tên</th>
                            <th>Nguồn gốc</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th width='160px'></th>
                        </tr>
                    </thead>
                    @foreach ($giongs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            {{-- BelongTo --}}
                            <td>{{ $item->NhomGiong->nhomgiong_code }}</td>
                            <td>{{ $item->KieuHinh->kieuhinh_ten}}</td>

                            {{-- HasMany --}}
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
                            <td>{{ $item->giong_nguongoc }}</td>
                            <td>{{ $item->giong_mota }}</td>
                            <td>
                                <img class="d-block" src="{{ env('STORAGE_URL') . $item->giong_hinhanh }}" alt="Ảnh giống"  width="100" height="100">
                                {{-- <img class="d-block" src="{{ Storage::url($item->giong_hinhanh) }}" alt="Ảnh giống" width="100" height="100"> --}}

                            </td>
                            <td>
                                <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info mt-1" href="{{ route('giongs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                    <a class="btn btn-primary mt-1" href="{{ route('giongs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

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
    {!! $giongs->links() !!}

@endsection

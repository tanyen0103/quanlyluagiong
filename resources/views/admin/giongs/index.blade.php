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
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $message }}</p>
        </div>
    @endif
    @role('Admin')
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
                                <th>Ngày trổ bông</th>
                                <th>Ngày chín</th>
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

                                <td>{{ $item->giong_ngaytrobong }}</td>
                                <td>{{ $item->giong_ngaychin }}</td>
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
                                    <img onclick="openModal(this);" class="d-block" src="{{ env('STORAGE_URL') . $item->giong_hinhanh }}" alt="{{ $item->giong_ten }}"  width="100" height="100">
                                </td>
                                <td>
                                    <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">

                                        <a class="btn btn-info mt-1" href="{{ route('giongs.show',$item->id) }}"><i class="fas fa-eye" title="chi tiết"></i></a>

                                        <a class="btn btn-primary mt-1" href="{{ route('giongs.edit',$item->id) }}" ><i class="fas fa-pen" title="chỉnh sửa"></i></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger mt-1" onclick="return confirmDelete()"><i class="fas fa-trash" title="xoá"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- {!! $giongs->links() !!} --}}
    @endrole

    @role('Supermanager')
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
                                <th>Ngày trổ bông</th>
                                <th>Ngày chín</th>
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

                                <td>{{ $item->giong_ngaytrobong }}</td>
                                <td>{{ $item->giong_ngaychin }}</td>
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
                                    <img onclick="openModal(this);" class="d-block" src="{{ env('STORAGE_URL') . $item->giong_hinhanh }}" alt="{{ $item->giong_ten }}"  width="100" height="100">
                                </td>
                                <td>
                                    <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">

                                        <a class="btn btn-info mt-1" href="{{ route('giongs.show',$item->id) }}"><i class="fas fa-eye" title="chi tiết"></i></a>

                                        <a class="btn btn-primary mt-1" href="{{ route('giongs.edit',$item->id) }}" ><i class="fas fa-pen" title="chỉnh sửa"></i></a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger mt-1" onclick="return confirmDelete()"><i class="fas fa-trash" title="xoá"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        {{-- {!! $giongs->links() !!} --}}
    @endrole

    @role('Staff')
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('giongs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                    </div>
                </div>
                <div class="input-group mb-2 col">
                    <input type="text" class="form-control bg-light small" placeholder="Tìm kiếm giống"
                        aria-label="Tìm kiếm" aria-describedby="button-addon2" id="searchInputCard">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2-card">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 d-flex justify-content-center flex-wrap">
            @foreach ($giongs as $item)
                    <div class="card card-h bg-card border-0 m-1 " style="width: 100%; box-shadow: 0 0 2px #000;">
                        <div class="card-body pt-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <a class="text-dark" href="{{ route('giongs.show',$item->id) }}">
                                    <h5 class="card-title font-weight-bold mb-0">{{ $item->giong_ten}}</h5>
                                </a>
                            </div>
                            <p class="card-text mb-0 d-none d-md-block">{{ $item->giong_ngaytrobong }} - {{ $item->giong_ngaychin }}</p>
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">
                                    <a class="text-dark" href="{{ route('giongs.show',$item->id) }}"><i class="fas fa-eye" title="chi tiết"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    @endrole

    {{-- Trả dữ liệu truy vấn - kiểu dữ liệu Object--}}
    {{-- @php
        echo'<pre>';
            dd($giongs);
        echo' </pre>';
    @endphp --}}
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
@endsection

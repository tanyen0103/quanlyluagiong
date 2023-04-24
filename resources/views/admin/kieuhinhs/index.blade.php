@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kiểu hình</li>
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
                    <h3 class="m-0 font-weight-bold text-white">Bảng kiểu hình</h3>
                </div>
                <div class="">
                    <a class="btn btn-light" href="{{ route('kieuhinhs.create') }}">Tạo mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('kieuhinhs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th width='160px'></th>
                            </tr>
                        </thead>
                        @foreach ($kieuhinhs as $item)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->kieuhinh_ten }}</td>
                                <td>{{ $item->kieuhinh_mota }}</td>
                                <td>
                                    <form  action="{{ route('kieuhinhs.destroy',$item->id) }}" method="POST">

                                        <a class="btn btn-info mt-1" href="{{ route('kieuhinhs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                        <a class="btn btn-primary mt-1" href="{{ route('kieuhinhs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

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
    @endrole

    @role('Supermanager')
        <div class="card shadow mb-3 border-bottom-primary">
            {{-- Card header --}}
            <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
                <div class="">
                    <h3 class="m-0 font-weight-bold text-white">Bảng kiểu hình</h3>
                </div>
                <div class="">
                    <a class="btn btn-light" href="{{ route('kieuhinhs.create') }}">Tạo mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <div class="d-flex justify-content-start">
                                <a href="{{ route('kieuhinhs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
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
                                <th>Tên</th>
                                <th>Mô tả</th>
                                <th width='160px'></th>
                            </tr>
                        </thead>
                        @foreach ($kieuhinhs as $item)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->kieuhinh_ten }}</td>
                                <td>{{ $item->kieuhinh_mota }}</td>
                                <td>
                                    <form  action="{{ route('kieuhinhs.destroy',$item->id) }}" method="POST">

                                        <a class="btn btn-info mt-1" href="{{ route('kieuhinhs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                        <a class="btn btn-primary mt-1" href="{{ route('kieuhinhs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

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
    @endrole
    {{-- {!! $kieuhinhs->links() !!} --}}
    @role('Manager')
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('kieuhinhs.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
                    </div>
                </div>
                <div class="input-group mb-2 col">
                    <input type="text" class="form-control bg-light small" placeholder="Tìm kiếm kiểu hình"
                        aria-label="Tìm kiếm" aria-describedby="button-addon2" id="searchInputCard">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2-card">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center flex-wrap">
            @foreach ($kieuhinhs as $item)
                <div class="card bg-card border-0 m-1" style="width: 13rem; box-shadow: 0 0 1px #000;">
                    <div class="card-body">
                    <h5 class="card-title text-center bg-light pt-1 pb-1 text-primary rounded-bottom">{{ $item->kieuhinh_ten }}</h5>
                    <p class="card-text text-center">{{ $item->kieuhinh_mota }}</p>
                    <div class="d-flex justify-content-center">
                        <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">

                            <a class="btn btn-info mt-1" href="{{ route('kieuhinhs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                            {{-- <a class="btn btn-primary mt-1" href="{{ route('kieuhinhs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a> --}}

                            {{-- @csrf
                            @method('DELETE') --}}

                            {{-- <button type="submit" class="btn btn-danger mt-1" onclick="return confirmDelete()"><i class="fa-solid fa-trash" title="xoá"></i></button> --}}
                        </form>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endrole

@endsection

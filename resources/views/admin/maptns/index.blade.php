@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Mã phòng thí nghiệm</li>
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
                <h3 class="m-0 font-weight-bold text-white">Bảng mã phòng thí nghiệm</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('maptns.create') }}">Tạo mới</a>
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
                            <th>Mã phòng thí nghiệm</th>
                            <th>Giống</th>
                            <th>Mô tả</th>
                            <th width="160px"></th>
                        </tr>
                    </thead>
                    @foreach ($maptns as $item)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->ptn_code }}</td>
                                <td>{{ $item->Giong->giong_ten }}</td>
                                <td>{{ $item->ptn_mota }}</td>
                                <td>
                                    <form action="{{ route('maptns.destroy',$item->id) }}" method="POST">

                                        <a class="btn btn-info mt-1" href="{{ route('maptns.show',$item->id) }}"><i class="fas fa-eye" title="chi tiết"></i></a>

                                        <a class="btn btn-primary mt-1" href="{{ route('maptns.edit',$item->id) }}" ><i class="fas fa-pen" title="chỉnh sửa"></i></a>

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

    {!! $maptns->links() !!}

@endsection

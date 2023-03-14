@extends('layouts.app')

@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng giá trị đo sâu bệnh</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('giatridosaubenhs.create') }}">Tạo mới</a>
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
                            <th>Giống</th>
                            <th>Chọn lọc</th>
                            <th>Đánh giá khác</th>

                            <th>Tên loại</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th></th>
                            <th>Đơn vị</th>

                            <th>Giá trị</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($giatridosaubenhs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->ChiTieuSauBenh->Giong->giong_ten }}</td>
                            <td>{{ $item->ChiTieuSauBenh->chitieusaubenh_chonloc }}</td>
                            <td>{{ $item->ChiTieuSauBenh->chitieusaubenh_danhgia }}</td>

                            <td>{{ $item->LoaiSauBenh->loaisaubenh_ten}}</td>
                            <td>{{ $item->LoaiSauBenh->loaisaubenh_mota}}</td>
                            <td><img class="d-block" src="{{ env('STORAGE_URL') . $item->LoaiSauBenh->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></td>
                            <td>{{ $item->LoaiSauBenh->loaisaubenh_donvi}}</td>

                            <td>{{ $item->giatridosaubenh_giatri }}</td>
                            <td>
                                <form class="d-flex"  action="{{ route('giatridosaubenhs.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info mr-1" href="{{ route('giatridosaubenhs.show',$item->id) }}">Chi tiết</a>

                                    <a class="btn btn-primary mr-1" href="{{ route('giatridosaubenhs.edit',$item->id) }}">Chỉnh sửa</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Xoá</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    {!! $giatridosaubenhs->links() !!}

@endsection

@extends('layout.app')

@section('content')
    <div class="row pt-2 ">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>GIÁ TRỊ ĐO SÂU BỆNH</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giatridosaubenhs.create') }}">TẠO MỚI</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered ">
        <tr class="bg-success text-white">
            <th>No</th>
            <th>Giống</th>
            <th>Chọn lọc</th>
            <th>Đánh giá khác</th>

            <th>Tên loại</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th></th>
            <th>Đơn vị</th>

            <th>Giá trị</th>
            <th class="d-flex" width="280px">Action</th>
        </tr>
        @foreach ($giatridosaubenhs as $item)
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
                <form action="{{ route('giatridosaubenhs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('giatridosaubenhs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('giatridosaubenhs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $giatridosaubenhs->links() !!}

@endsection

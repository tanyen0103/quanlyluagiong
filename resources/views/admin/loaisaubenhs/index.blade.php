@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>LOẠI SÂU BỆNH</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('loaisaubenhs.create') }}">TẠO MỚI</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr class="bg-success text-white">
            <th>No</th>
            <th>Tên</th>
            <th>Đơn vị</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($loaisaubenhs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->loaisaubenh_ten }}</td>
            <td>{{ $item->loaisaubenh_donvi }}</td>
            <td>{{ $item->loaisaubenh_mota }}</td>
            <td><img class="d-block" src="{{ env('STORAGE_URL') . $item->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></td>

            <td>
                <form action="{{ route('loaisaubenhs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('loaisaubenhs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('loaisaubenhs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $loaisaubenhs->links() !!}

@endsection

@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>GIỐNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giongs.create') }}">TẠO MỚI</a>
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
            <th>Nhóm</th>
            <th>Tên</th>
            <th>Nguồn gốc</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($giongs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->giong_ten }}</td>
            <td>{{ $item->NhomGiong->nhomgiong_code }}</td>
            <td>{{ $item->KieuHinh->kieuhinh_ten}}</td>
            <td>{{ $item->giong_nguongoc }}</td>
            <td>{{ $item->giong_mota }}</td>
            <td><img class="d-block" src="{{ env('STORAGE_URL') . $item->giong_hinhanh }}" alt="Ảnh giống"  width="100" height="100"></td>
            <td>
                <form action="{{ route('giongs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('giongs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('giongs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $giongs->links() !!}

@endsection

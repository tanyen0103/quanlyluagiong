@extends('layout.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>NHÓM GIỐNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('nhomgiongs.create') }}">TẠO MỚI</a>
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
            <th>Mã code</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Ngày ngâm</th>
            <th>Ngày cấy</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($nhomgiongs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->nhomgiong_code }}</td>
            <td>{{ $item->nhomgiong_ten }}</td>
            <td>{{ $item->nhomgiong_mota }}</td>
            <td>{{ $item->nhomgiong_ngayngam }}</td>
            <td>{{ $item->nhomgiong_ngaycay }}</td>
            <td>
                <form action="{{ route('nhomgiongs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('nhomgiongs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('nhomgiongs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $nhomgiongs->links() !!}

@endsection

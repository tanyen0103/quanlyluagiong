@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>GIAI ĐOẠN TRƯỞNG THÀNH</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giaidoantruongthanhs.create') }}">Tạo mới</a>
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
            <th>Mô tả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($giaidoantruongthanhs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->giaidoantt_ten }}</td>
            <td>{{ $item->giaidoantt_mota }}</td>
            <td>
                <form action="{{ route('giaidoantruongthanhs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('giaidoantruongthanhs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('giaidoantruongthanhs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $giaidoantruongthanhs->links() !!}

@endsection

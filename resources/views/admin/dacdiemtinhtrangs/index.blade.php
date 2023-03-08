@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>ĐẶC ĐIỂM TÍNH TRẠNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('dacdiemtinhtrangs.create') }}">TẠO MỚI</a>
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
            <th>Đối tượng tính trạng</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dacdiemtinhtrangs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->dacdiemtt_ten }}</td>
            <td>{{ $item->DoiTuongTinhTrang->doituongtt_ten}}</td>
            <td>
                <form action="{{ route('dacdiemtinhtrangs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('dacdiemtinhtrangs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('dacdiemtinhtrangs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $dacdiemtinhtrangs->links() !!}

@endsection


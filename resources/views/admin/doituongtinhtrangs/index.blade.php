@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>ĐỐI TƯỢNG TÍNH TRẠNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('doituongtinhtrangs.create') }}">TẠO MỚI</a>
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
            <th>Giai đoạn trưởng thành</th>
            <th>Mô tả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($doituongtinhtrangs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->doituongtt_ten }}</td>
            <td>{{ $item->GiaiDoanTruongThanh->giaidoantt_ten }}</td>
            <td>{{ $item->doituongtt_mota }}</td>
            <td>
                <form action="{{ route('doituongtinhtrangs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('doituongtinhtrangs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('doituongtinhtrangs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $doituongtinhtrangs->links() !!}

@endsection


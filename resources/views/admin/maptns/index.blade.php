@extends('layouts.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>MÃ PHÒNG THÍ NGHIỆM</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('maptns.create') }}">TẠO MỚI</a>
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
            <th>Code</th>
            <th>Giống</th>
            <th>Mô tả</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($maptns as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->ptn_code }}</td>
            <td>{{ $item->Giong->giong_ten }}</td>
            <td>{{ $item->ptn_mota }}</td>
            <td>
                <form action="{{ route('maptns.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('maptns.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('maptns.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $maptns->links() !!}

@endsection

@extends('layout.app')

@section('content')
    <div class="row pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>CHỈ TIÊU NGOÀI ĐỒNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('chitieungoaidongs.create') }}">TẠO MỚI</a>
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
            <th>Giống</th>
            <th>Phiến lá</th>
            <th>Tai lá</th>
            <th>Góc nhánh</th>
            <th>Bẹ lá</th>
            <th>Góc lá</th>
            <th>Màu sắc góc lá</th>
            <th>Góc lá đòng</th>
            <th>Thoát CB</th>
            <th>Màu sắc góc thân</th>
            <th>Dáng bông</th>
            <th>Cong trục bông</th>
            <th>Râu</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($chitieungoaidongs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->Giong->giong_ten }}</td>
            <td>{{ $item->chitieungoaidong_phienla }}</td>
            <td>{{ $item->chitieungoaidong_taila }}</td>
            <td>{{ $item->chitieungoaidong_gocnhanh }}</td>
            <td>{{ $item->chitieungoaidong_bela }}</td>
            <td>{{ $item->chitieungoaidong_gocla }}</td>
            <td>{{ $item->chitieungoaidong_msgocla }}</td>
            <td>{{ $item->chitieungoaidong_gocladong }}</td>
            <td>{{ $item->chitieungoaidong_thoatcb }}</td>
            <td>{{ $item->chitieungoaidong_msgocthan }}</td>
            <td>{{ $item->chitieungoaidong_dangbong }}</td>
            <td>{{ $item->chitieungoaidong_congtrucbong }}</td>
            <td>{{ $item->chitieungoaidong_rau }}</td>
            <td>
                <form action="{{ route('chitieungoaidongs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('chitieungoaidongs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('chitieungoaidongs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $chitieungoaidongs->links() !!}

@endsection

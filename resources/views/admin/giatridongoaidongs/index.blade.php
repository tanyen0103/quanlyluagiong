@extends('layouts.app')

@section('content')
    <div class="row pt-2 ">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>GIÁ TRỊ ĐO NGOÀI ĐỒNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giatridongoaidongs.create') }}">TẠO MỚI</a>
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
            <th>Tên giá trị đo</th>
            <th>Đơn vị</th>
            <th>Giá trị</th>
            <th class="d-flex" width="280px">Action</th>
        </tr>
        @foreach ($giatridongoaidongs as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->Giong->giong_ten }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_phienla }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_taila }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_bela }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocla }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_msgocla }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_gocladong }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_thoatcb }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_msgocthan }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_dangbong }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong }}</td>
            <td>{{ $item->ChiTieuNgoaiDong->chitieungoaidong_rau }}</td>

            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_ten}}</td>
            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_donvi}}</td>

            <td>{{ $item->giatridongoaidong_giatri }}</td>
            <td>
                <form action="{{ route('giatridongoaidongs.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('giatridongoaidongs.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('giatridongoaidongs.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $giatridongoaidongs->links() !!}

@endsection

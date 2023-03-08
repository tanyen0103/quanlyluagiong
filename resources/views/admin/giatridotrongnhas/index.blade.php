@extends('layouts.app')

@section('content')
    <div class="row pt-2 ">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-center text-success">
                <h2>GIÁ TRỊ ĐO TRONG NHÀ</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giatridotrongnhas.create') }}">TẠO MỚI</a>
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
            <th>Gié C2</th>
            <th>Độ rụng hạt</th>
            <th>Màu sắc vỏ trấu</th>
            <th>Dạng thóc</th>
            <th>Màu sắc gạo</th>
            <th>Trọng lượng 1000 hạt</th>
            <th>Độ ẩm</th>
            <th>Thơm</th>
            <th>Đánh giá</th>
            <th>Tên giá trị đo</th>
            <th>Đơn vị</th>
            <th>Giá trị</th>
            <th class="d-flex" width="280px">Action</th>
        </tr>
        @foreach ($giatridotrongnhas as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->ChiTieuTrongNha->Giong->giong_ten }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_giec2 }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_dorunghat }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_msvotrau }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_dangthoc }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_mausacgao }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_tl1000hat }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_doam }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_thom }}</td>
            <td>{{ $item->ChiTieuTrongNha->chitieutrongnha_danhgia }}</td>

            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_ten}}</td>
            <td>{{ $item->LoaiGiaTriDo->loaigiatrido_donvi}}</td>

            <td>{{ $item->giatridotrongnha_giatri }}</td>
            <td>
                <form action="{{ route('giatridotrongnhas.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('giatridotrongnhas.show',$item->id) }}">Chi tiết</a>

                    <a class="btn btn-warning" href="{{ route('giatridotrongnhas.edit',$item->id) }}">Sửa</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $giatridotrongnhas->links() !!}

@endsection

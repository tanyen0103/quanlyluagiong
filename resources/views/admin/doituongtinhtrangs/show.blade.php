@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>ĐỐI TƯỢNG TÍNH TRẠNG CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giai đoạn trưởng thành :</strong>
				<p>{{ $doituongtinhtrang->GiaiDoanTruongThanh->giaidoantt_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên:</strong>
                <p>{{ $doituongtinhtrang->doituongtt_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                <p>{{ $doituongtinhtrang->doituongtt_mota }}</p>
            </div>
        </div>
    </div>
@endsection

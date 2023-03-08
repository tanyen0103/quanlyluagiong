@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>GIÁ TRỊ ĐO NGOÀI ĐỒNG CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('giatridongoaidongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->Giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phiến lá</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_phienla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tai lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_taila }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc nhánh</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bẹ lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_bela }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc lá</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc góc lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_msgocla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc lá đòng</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocladong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thoát CB:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_thoatcb }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc góc thân</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_msgocthan }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dáng bông:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_dangbong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cong trục bông</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Râu</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_rau }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên giá trị đo</strong>
                <p>{{ $giatridongoaidong->LoaiGiaTriDo->loaigiatrido_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đơn vị</strong>
                <p>{{  $giatridongoaidong->LoaiGiaTriDo->loaigiatrido_donvi }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giá trị</strong>
                <p>{{  $giatridongoaidong->giatridongoaidong_giatri }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('nhomgiongs.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->Giong->giong_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Phiến lá</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_phienla }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Tai lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_taila }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Góc nhánh</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocnhanh }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Bẹ lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_bela }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
               <strong>Góc lá</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocla }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Màu sắc góc lá:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_msgocla }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
               <strong>Góc lá đòng</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_gocladong }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Thoát CB:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_thoatcb }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Màu sắc góc thân</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_msgocthan }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Dáng bông:</strong>
				<p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_dangbong }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Cong trục bông</strong>:</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_congtrucbong }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Râu</strong>
                <p>{{ $giatridongoaidong->ChiTieuNgoaiDong->chitieungoaidong_rau }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Tên giá trị đo</strong>
                <p>{{ $giatridongoaidong->LoaiGiaTriDo->loaigiatrido_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
               <strong>Đơn vị</strong>
                <p>{{  $giatridongoaidong->LoaiGiaTriDo->loaigiatrido_donvi }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Giá trị</strong>
                <p>{{  $giatridongoaidong->giatridongoaidong_giatri }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
    </div>
</div>

@endsection

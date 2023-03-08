@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>MÃ PHÒNG THÍ NGHIỆM CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('chitieungoaidongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $chitieungoaidong->Giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phiến lá:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_phienla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tai lá:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_taila }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc nhánh:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_gocnhanh }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bẹ lá:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_bela }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc lá:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_gocla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc góc lá:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_msgocla }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Góc lá đòng:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_gocladong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thoát CB:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_thoatcb }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc góc thân:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_msgocthan }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dáng bông:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_dangbong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cong trục bông:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_congtrucbong }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Râu:</strong>
                <p>{{ $chitieungoaidong->chitieungoaidong_rau }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>MÃ PHÒNG THÍ NGHIỆM CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('chitieutrongnhas.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $chitieutrongnha->Giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gié C2:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_giec2 }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Độ rụng hạt:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_dorunghat }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc vỏ trấu:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_msvotrau }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dạng thóc:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_dangthoc }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc gạo:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_mausacgao }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trọng lượng 1000 hạt:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_tl1000hat }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Độ ẩm:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_doam }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thơm:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_thom }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đánh giá:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_danhgia }}</p>
            </div>
        </div>
    </div>
@endsection

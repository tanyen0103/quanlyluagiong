@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>GIÁ TRỊ ĐO TRONNG NHÀ CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('giatridotrongnhas.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->Giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gié C2:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_giec2 }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Độ rụng hạt:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_dorunghat }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc vỏ trấu:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_msvotrau }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dạng thóc:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_dangthoc }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Màu sắc gạo:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_mausacgao }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trọng lượng 1000 hạt:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_tl1000hat }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Độ ẩm:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_doam }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Thơm:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_thom }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đánh giá:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_danhgia }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên giá trị đo:</strong>
				<p>{{ $giatridotrongnha->LoaiGiaTriDo->loaigiatrido_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đơn vị:</strong>
                <p>{{ $giatridotrongnha->LoaiGiaTriDo->loaigiatrido_donvi }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giá trị:</strong>
                <p>{{ $giatridotrongnha->giatridotrongnha_giatri }}</p>
            </div>
        </div>
    </div>
@endsection

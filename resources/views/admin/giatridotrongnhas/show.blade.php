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
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->Giong->giong_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Gié C2:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_giec2 }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                  <strong>Độ rụng hạt:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_dorunghat }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
               <strong>Màu sắc vỏ trấu:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_msvotrau }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Dạng thóc:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_dangthoc }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
               <strong>Màu sắc gạo:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_mausacgao }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Trọng lượng 1000 hạt:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_tl1000hat }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
              <strong>Độ ẩm:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_doam }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Thơm:</strong>
				<p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_thom }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Đánh giá:</strong>
                <p>{{ $giatridotrongnha->ChiTieuTrongNha->chitieutrongnha_danhgia }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Tên giá trị đo:</strong>
				<p>{{ $giatridotrongnha->LoaiGiaTriDo->loaigiatrido_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Đơn vị:</strong>
                <p>{{ $giatridotrongnha->LoaiGiaTriDo->loaigiatrido_donvi }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Giá trị:</strong>
                <p>{{ $giatridotrongnha->giatridotrongnha_giatri }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
    </div>
</div>
@endsection

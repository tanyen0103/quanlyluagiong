@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatridosaubenhs.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Giống:</strong>
				        {{ $giatridosaubenh->ChiTieuSauBenh->Giong->giong_ten }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Chọn lọc:</strong>
                        {{ $giatridosaubenh->ChiTieuSauBenh->chitieusaubenh_chonloc }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Đánh giá khác:</strong>
				        {{ $giatridosaubenh->ChiTieuSauBenh->chitieusaubenh_danhgia }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Tên loại:</strong>
				        {{ $giatridosaubenh->LoaiSauBenh->loaisaubenh_ten }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Mô tả:</strong>
                        {{ $giatridosaubenh->LoaiSauBenh->loaisaubenh_mota }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Đơn vị:</strong>
                        {{ $giatridosaubenh->LoaiSauBenh->loaisaubenh_donvi }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                         <strong>Giá trị:</strong>
                        {{ $giatridosaubenh->giatridosaubenh_giatri }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 mr-2 ml-2">
            <div class="form-group">
                {{-- <strong>Hình ảnh:</strong> --}}
                <div>
                    <img class="d-block rounded" src="{{ env('STORAGE_URL') . $giatridosaubenh->LoaiSauBenh->loaisaubenh_hinhanh }}" alt="Ảnh giống"  width="100%"></td>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

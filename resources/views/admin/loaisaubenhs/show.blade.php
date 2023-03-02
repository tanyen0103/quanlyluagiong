@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>LOẠI SÂU BỆNH CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('loaisaubenhs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên loại giá trị đo:</strong>
                {{  $loaisaubenh->loaisaubenh_ten }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                {{  $loaisaubenh->loaisaubenh_mota }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đơn vị:</strong>
                {{  $loaisaubenh->loaisaubenh_donvi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hình ảnh:</strong>
                <div>
                    <img class="d-block rounded" src="{{ env('STORAGE_URL') . $loaisaubenh->loaisaubenh_hinhanh }}" alt="Ảnh sâu bệnh"  width="100">
                </div>
            </div>
        </div>

    </div>
@endsection

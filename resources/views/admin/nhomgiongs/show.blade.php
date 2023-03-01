@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>NHÓM GIỐNG CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('nhomgiongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                {{  $nhomgiong->nhomgiong_code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên nhóm giống:</strong>
                {{  $nhomgiong->nhomgiong_ten }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                {{  $nhomgiong->nhomgiong_mota }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ngày ngâm:</strong>
                {{  $nhomgiong->nhomgiong_ngayngam }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ngày cấy:</strong>
                {{  $nhomgiong->nhomgiong_ngaycay }}
            </div>
        </div>
    </div>
@endsection

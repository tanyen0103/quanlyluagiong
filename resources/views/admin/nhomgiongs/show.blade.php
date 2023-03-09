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
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Code:</strong>
                {{  $nhomgiong->nhomgiong_code }}
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Tên nhóm giống:</strong>
                {{  $nhomgiong->nhomgiong_ten }}
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Mô tả:</strong>
                {{  $nhomgiong->nhomgiong_mota }}
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Ngày ngâm:</strong>
                {{  $nhomgiong->nhomgiong_ngayngam }}
            </div>
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Ngày cấy:</strong>
                {{  $nhomgiong->nhomgiong_ngaycay }}
            </div>
        </div>
    </div>
</div>
@endsection



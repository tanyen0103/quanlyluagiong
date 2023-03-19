@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route ('nhomgiongs.index') }}">Nhóm giống</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
            </ol>
        </nav>
    </div>
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
                <strong>Code:</strong>
                {{  $nhomgiong->nhomgiong_code }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Tên nhóm giống:</strong>
                {{  $nhomgiong->nhomgiong_ten }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Mô tả:</strong>
                {{  $nhomgiong->nhomgiong_mota }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Ngày ngâm:</strong>
                {{  $nhomgiong->nhomgiong_ngayngam }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Ngày cấy:</strong>
                {{  $nhomgiong->nhomgiong_ngaycay }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
    </div>
</div>
@endsection



@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('loaisaubenhs.index') }}">Loại sâu bệnh</a></li>
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
            <a class="btn btn-light" href="{{ route('loaisaubenhs.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Tên sâu bệnh:</strong>
                        {{  $loaisaubenh->loaisaubenh_ten }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Mô tả:</strong>
                        {{  $loaisaubenh->loaisaubenh_mota }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Đơn vị:</strong>
                        {{  $loaisaubenh->loaisaubenh_donvi }}
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 mr-2 ml-2">
            <div class="form-group">
                {{-- <strong>Hình ảnh:</strong> --}}
                <div>
                    <img onclick="openModal(this);" class="d-block rounded" src="{{ env('STORAGE_URL') . $loaisaubenh->loaisaubenh_hinhanh }}" alt="{{  $loaisaubenh->loaisaubenh_ten }}"  width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

@endsection

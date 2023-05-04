@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route ('nhomgiongs.index') }}">Nhóm giống</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
            </ol>
        </nav>
    </div>
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('nhomgiongs.index') }}">Trở về</a>
            </div>
        </div>
        <form action="{{ route('nhomgiongs.update',$nhomgiong->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Code:</strong>
                        <input type="text" value="{{ $nhomgiong->nhomgiong_code }}" @error('nhomgiong_code') is-invalid @enderror name="nhomgiong_code" class="form-control" placeholder="Code nhóm giống">
                        @error('nhomgiong_code')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Tên:</strong>
                        <input type="text" value="{{ $nhomgiong->nhomgiong_ten }}" @error('nhomgiong_ten') is-invalid @enderror name="nhomgiong_ten" class="form-control" placeholder="Tên nhóm giống">
                        @error('nhomgiong_ten')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Mô tả:</strong>
                        <textarea class="form-control" style="height:150px" @error('nhomgiong_mota') is-invalid @enderror name="nhomgiong_mota" placeholder="Mô tả">{{ $nhomgiong->nhomgiong_mota }}</textarea>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Ngày ngâm:</strong>
                        <input type="date" value="{{ $nhomgiong->nhomgiong_ngayngam }}" name="nhomgiong_ngayngam" @error('nhomgiong_ngayngam') is-invalid @enderror class="form-control" >
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Ngày cấy:</strong>
                        <input type="date" value="{{ $nhomgiong->nhomgiong_ngaycay }}" name="nhomgiong_ngaycay" @error('nhomgiong_ngaycay') is-invalid @enderror class="form-control" >
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
@endsection


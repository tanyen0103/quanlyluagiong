@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giongs.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Kiểu hình</strong>:</strong>
                        <p>{{ $giong->kieuhinh->kieuhinh_ten }}</p>
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Giống:</strong>
                        <p>{{ $giong->giong_ten }}</p>
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Nguồn gốc:</strong>
                        <p>{{ $giong->giong_nguongoc }}</p>
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                    <div class="form-group">
                        <strong>Mô tả:</strong>
                        <p>{{  $giong->giong_mota }}</p>
                        <hr class="h-1 mt-0 bg-gradient-primary">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                {{-- <strong>Hình ảnh:</strong> --}}
                <div>
                    <img class="d-block rounded" src="{{ env('STORAGE_URL') . $giong->giong_hinhanh }}" alt="Ảnh giống"  width="80%">
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

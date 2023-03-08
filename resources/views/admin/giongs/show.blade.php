@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>GIỐNG CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('giongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nhóm giống:</strong>
				<p>{{ $giong->nhomgiong->nhomgiong_code }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kiểu hình</strong>:</strong>
                <p>{{ $giong->kieuhinh->kieuhinh_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
                <p>{{ $giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nguồn gốc:</strong>
                <p>{{ $giong->giong_nguongoc }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                <p>{{  $giong->giong_mota }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hình ảnh:</strong>
                <div>
                    <img class="d-block rounded" src="{{ env('STORAGE_URL') . $giong->giong_hinhanh }}" alt="Ảnh giống"  width="100">
                </div>
            </div>
        </div>
    </div>
@endsection

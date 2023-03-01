@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA NHÓM GIỐNG</h2>
            </div>
            <div >
                <a class="btn btn-warning" href="{{ route('nhomgiongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('nhomgiongs.update',$nhomgiong->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Code:</strong>
                    <input type="text" value="{{ $nhomgiong->nhomgiong_code }}" @error('nhomgiong_code') is-invalid @enderror name="nhomgiong_code" class="form-control" placeholder="Code nhóm giống">
                    @error('nhomgiong_code')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên:</strong>
                    <input type="text" value="{{ $nhomgiong->nhomgiong_ten }}" @error('nhomgiong_ten') is-invalid @enderror name="nhomgiong_ten" class="form-control" placeholder="Tên nhóm giống">
                    @error('nhomgiong_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    <textarea class="form-control" style="height:150px" @error('nhomgiong_mota') is-invalid @enderror name="nhomgiong_mota" placeholder="Mô tả">{{ $nhomgiong->nhomgiong_mota }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ngày ngâm:</strong>
                    <input type="date" value="{{ $nhomgiong->nhomgiong_ngayngam }}" name="nhomgiong_ngayngam" @error('nhomgiong_ngayngam') is-invalid @enderror class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ngày cấy:</strong>
                    <input type="date" value="{{ $nhomgiong->nhomgiong_ngaycay }}" name="nhomgiong_ngaycay" @error('nhomgiong_ngaycay') is-invalid @enderror class="form-control" >
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>

    </form>
@endsection

@extends('layouts.app')

@section('content')
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('nhomgiongs.index') }}">Trở về</a>
            </div>
        </div>
        <form action="{{ route('nhomgiongs.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="row mt-1 d-flex justify-content-center">
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <label for="nhomgiong_code">Code nhóm giống: <span class="text-danger font-weight-bold">*</span></label>
                        <input type="text" value="{{old('nhomgiong_code')}}" name="nhomgiong_code" @error('nhomgiong_code') is-invalid @enderror class="form-control" placeholder="Code nhóm giống">
                        @error('nhomgiong_code')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <label for="nhomgiong_ten">Tên nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                        <input type="text" value="{{old('nhomgiong_ten')}}" name="nhomgiong_ten" @error('nhomgiong_ten') is-invalid @enderror class="form-control" placeholder="Tên nhóm giống">
                        @error('nhomgiong_ten')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <strong>Mô tả:</strong>
                        <textarea class="form-control" style="height:150px" value="{{old('nhomgiong_mota')}}" name="nhomgiong_mota" @error('nhomgiong_mota') is-invalid @enderror placeholder="Mô tả"></textarea>
                        @error('nhomgiong_mota')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <strong>Ngày ngâm:</strong>
                        <input type="date" value="{{old('nhomgiong_ngayngam')}}" name="nhomgiong_ngayngam" @error('nhomgiong_ngayngam') is-invalid @enderror class="form-control" >
                        @error('nhomgiong_ngayngam')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                    <div class="form-group">
                        <strong>Ngày cấy:</strong>
                        <input type="date" value="{{old('nhomgiong_ngaycay')}}" name="nhomgiong_ngaycay" @error('nhomgiong_ngaycay') is-invalid @enderror" class="form-control" >
                        @error('nhomgiong_ngaycay')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 text-center m-2">
                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                </div>
            </div>
        </form>
    </div>
@endsection



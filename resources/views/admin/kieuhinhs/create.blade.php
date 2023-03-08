@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI KIỂU HÌNH</h2>
        </div>
        <div class="">
            <a class="btn btn-warning" href="{{ route('kieuhinhs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('kieuhinhs.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kieuhinh_ten">Tên kiểu hình <span class="text-danger font-weight-bold">*</span></label>
                <input type="text" value="{{old('kieuhinh_ten')}}" name="kieuhinh_ten" @error('kieuhinh_ten') is-invalid @enderror class="form-control" placeholder="Tên kiểu hình">
                @error('kieuhinh_ten')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả kiểu hình:</strong>
                <textarea class="form-control" style="height:150px" value="{{old('kieuhinh_mota')}}" name="kieuhinh_mota" @error('kieuhinh_mota') is-invalid @enderror placeholder="Mô tả kiểu hình"></textarea>
                @error('kieuhinh_mota')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-cente m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

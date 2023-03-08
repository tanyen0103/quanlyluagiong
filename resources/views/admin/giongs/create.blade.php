@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI GIỐNG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('giongs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('giongs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nhomgiong_id">Nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                <select id="nhomgiong_id" class="form-control custom-select @error('nhomgiong_id') is-invalid @enderror" name="nhomgiong_id" required autofocus>
                    <option value="">-- Chọn nhóm --</option>
						@foreach($nhomgiong as $item)
							<option value="{{ $item->id }}">{{ $item->nhomgiong_code }}</option>
						@endforeach
                </select>
                @error('nhomgiong_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kieuhinh_id">Kiểu hình <span class="text-danger font-weight-bold">*</span></label>
                <select id="kieuhinh_id" class="form-control custom-select @error('kieuhinh_id') is-invalid @enderror" name="kieuhinh_id" required autofocus>
                    <option value="">-- Chọn kiểu hình --</option>
						@foreach($kieuhinh as $item)
							<option value="{{ $item->id }}">{{ $item->kieuhinh_ten }}</option>
						@endforeach
                </select>
                @error('kieuhinh_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="giong_ten">Tên giống <span class="text-danger font-weight-bold">*</span></label>
            <input id="giong_ten" type="text" class="form-control @error('giong_ten') is-invalid @enderror" name="giong_ten" value="{{ old('giong_ten') }}" required autocomplete="giong_ten" />
            @error('giong_ten')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="giong_nguongoc">Nguồn gốc <span class="text-danger font-weight-bold">*</span></label>
            <input id="giong_nguongoc" type="text" class="form-control @error('giong_nguongoc') is-invalid @enderror" name="giong_nguongoc" value="{{ old('giong_nguongoc') }}" required autocomplete="giong_nguongoc" />
            @error('giong_nguongoc')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="giong_mota">Mô tả</label>
                <textarea class="form-control" style="height:150px" value="{{old('giong_mota')}}" name="giong_mota" @error('giong_mota') is-invalid @enderror placeholder="Mô tả giống"></textarea>
                @error('giong_mota')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label" for="giong_hinhanh">Hình ảnh giống (chú ý: Ảnh không chứa ký tự đặc biệt, size không quá 2M)</label>
                <input id="giong_hinhanh" type="file" class="form-control @error('giong_hinhanh') is-invalid @enderror" name="giong_hinhanh" value="{{ old('giong_hinhanh') }}" required autocomplete="giong_hinhanh" />
                @error('giong_hinhanh')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

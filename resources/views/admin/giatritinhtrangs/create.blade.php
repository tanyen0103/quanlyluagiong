@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI GIÁ TRỊ TÍNH TRẠNG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('giatritinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('giatritinhtrangs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="dacdiemtinhtrang_id">Đặc điểm tính trạng <span class="text-danger font-weight-bold">*</span></label>
                <select id="dacdiemtinhtrang_id" class="form-control custom-select @error('dacdiemtinhtrang_id') is-invalid @enderror" name="dacdiemtinhtrang_id" required autofocus>
                    <option value="">-- Chọn đặc điểm tính trạng --</option>
						@foreach($dacdiemtinhtrang as $item)
							<option value="{{ $item->id }}">{{ $item->dacdiemtt_ten }}</option>
						@endforeach
                </select>
                @error('dacdiemtinhtrang_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="giatritt_diem">Điểm giá trị tính trạng <span class="text-danger font-weight-bold">*</span></label>
            <input id="giatritt_diem" type="text" class="form-control @error('giatritt_diem') is-invalid @enderror" name="giatritt_diem" value="{{ old('giatritt_diem') }}" required autocomplete="giatritt_diem" />
            @error('giatritt_diem')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

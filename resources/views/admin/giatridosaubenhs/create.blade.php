@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI GIÁ TRỊ ĐO SÂU BỆNH</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('giatridosaubenhs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('giatridosaubenhs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="chitieusaubenh_id">Giống chỉ tiêu sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                <select id="chitieusaubenh_id" class="form-control custom-select @error('chitieusaubenh_id') is-invalid @enderror" name="chitieusaubenh_id" required autofocus>
                    <option value="">-- Chọn giống --</option>
						@foreach($chitieusaubenh as $item)
							<option value="{{ $item->id }}">{{ $item->Giong->giong_ten }}</option>
						@endforeach
                </select>
                @error('chitieusaubenh_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="loaisaubenh_id">Loại sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                <select id="loaisaubenh_id" class="form-control custom-select @error('loaisaubenh_id') is-invalid @enderror" name="loaisaubenh_id" required autofocus>
                    <option value="">-- Chọn sâu bệnh --</option>
						@foreach($loaisaubenh as $item)
							<option value="{{ $item->id }}">{{ $item->loaisaubenh_ten }}</option>
						@endforeach
                </select>
                @error('loaisaubenh_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="giatridosaubenh_giatri">Giá trị đo sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
            <input id="giatridosaubenh_giatri" type="text" class="form-control @error('giatridosaubenh_giatri') is-invalid @enderror" name="giatridosaubenh_giatri" value="{{ old('giatridosaubenh_giatri') }}" required autocomplete="giatridosaubenh_giatri" />
            @error('giatridosaubenh_giatri')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

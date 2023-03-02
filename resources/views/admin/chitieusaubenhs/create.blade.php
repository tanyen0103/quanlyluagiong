@extends('layout.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI CHỈ TIÊU NGOÀI ĐỒNG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('chitieusaubenhs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('chitieusaubenhs.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                    <option value="">-- Chọn giống --</option>
						@foreach($giong as $item)
							<option value="{{ $item->id }}">{{ $item->giong_ten }}</option>
						@endforeach
                </select>
                @error('giong_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="chitieusaubenh_chonloc">Chọn lọc:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieusaubenh_chonloc" type="text" class="form-control @error('chitieusaubenh_chonloc') is-invalid @enderror" name="chitieusaubenh_chonloc" value="{{ old('chitieusaubenh_chonloc') }}" required autocomplete="chitieusaubenh_chonloc" />
            @error('chitieusaubenh_chonloc')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-group">
            <label for="chitieusaubenh_danhgia">Đánh giá:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieusaubenh_danhgia" type="text" class="form-control @error('chitieusaubenh_danhgia') is-invalid @enderror" name="chitieusaubenh_danhgia" value="{{ old('chitieusaubenh_danhgia') }}" required autocomplete="chitieusaubenh_danhgia" />
            @error('chitieusaubenh_danhgia')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

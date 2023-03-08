@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI CHỈ TIÊU NGOÀI ĐỒNG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('chitieutrongnhas.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('chitieutrongnhas.store') }}" method="POST" class="needs-validation" novalidate>
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
            <label for="chitieutrongnha_giec2">Gié C2:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_giec2" type="text" class="form-control @error('chitieutrongnha_giec2') is-invalid @enderror" name="chitieutrongnha_giec2" value="{{ old('chitieutrongnha_giec2') }}" required autocomplete="chitieutrongnha_giec2" />
            @error('chitieutrongnha_giec2')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_dorunghat">Độ rụng hạt:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_dorunghat" type="text" class="form-control @error('chitieutrongnha_dorunghat') is-invalid @enderror" name="chitieutrongnha_dorunghat" value="{{ old('chitieutrongnha_dorunghat') }}" required autocomplete="chitieutrongnha_dorunghat" />
            @error('chitieutrongnha_dorunghat')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_msvotrau">Màu sắc vỏ trấu:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_msvotrau" type="text" class="form-control @error('chitieutrongnha_msvotrau') is-invalid @enderror" name="chitieutrongnha_msvotrau" value="{{ old('chitieutrongnha_msvotrau') }}" required autocomplete="chitieutrongnha_msvotrau" />
            @error('chitieutrongnha_msvotrau')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_dangthoc">Dạng thóc:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_dangthoc" type="text" class="form-control @error('chitieutrongnha_dangthoc') is-invalid @enderror" name="chitieutrongnha_dangthoc" value="{{ old('chitieutrongnha_dangthoc') }}" required autocomplete="chitieutrongnha_dangthoc" />
            @error('chitieutrongnha_dangthoc')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_mausacgao">Màu sắc gạo:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_mausacgao" type="text" class="form-control @error('chitieutrongnha_mausacgao') is-invalid @enderror" name="chitieutrongnha_mausacgao" value="{{ old('chitieutrongnha_mausacgao') }}" required autocomplete="chitieutrongnha_mausacgao" />
            @error('chitieutrongnha_mausacgao')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_tl1000hat">Trọng lượng 1000 hạt:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_tl1000hat" type="text" class="form-control @error('chitieutrongnha_tl1000hat') is-invalid @enderror" name="chitieutrongnha_tl1000hat" value="{{ old('chitieutrongnha_tl1000hat') }}" required autocomplete="chitieutrongnha_tl1000hat" />
            @error('chitieutrongnha_tl1000hat')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_doam">Độ ẩm:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_doam" type="text" class="form-control @error('chitieutrongnha_doam') is-invalid @enderror" name="chitieutrongnha_doam" value="{{ old('chitieutrongnha_doam') }}" required autocomplete="chitieutrongnha_doam" />
            @error('chitieutrongnha_doam')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_thom">Thơm:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_thom" type="text" class="form-control @error('chitieutrongnha_thom') is-invalid @enderror" name="chitieutrongnha_thom" value="{{ old('chitieutrongnha_thom') }}" required autocomplete="chitieungoaidong_phienla" />
            @error('chitieutrongnha_thom')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-group">
            <label for="chitieutrongnha_danhgia">Đánh giá:<span class="text-danger font-weight-bold">*</span></label>
            <input id="chitieutrongnha_danhgia" type="text" class="form-control @error('chitieutrongnha_danhgia') is-invalid @enderror" name="chitieutrongnha_danhgia" value="{{ old('chitieutrongnha_danhgia') }}" required autocomplete="chitieutrongnha_danhgia" />
            @error('chitieutrongnha_danhgia')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI GIÁ TRỊ ĐO TRONG NHÀ</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('giatridotrongnhas.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('giatridotrongnhas.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="chitieutrongnha_id">Giống chỉ tiêu trong nhà <span class="text-danger font-weight-bold">*</span></label>
                <select id="chitieutrongnha_id" class="form-control custom-select @error('chitieutrongnha_id') is-invalid @enderror" name="chitieutrongnha_id" required autofocus>
                    <option value="">-- Chọn giống --</option>
						@foreach($chitieutrongnha as $item)
							<option value="{{ $item->id }}">{{ $item->Giong->giong_ten }}</option>
						@endforeach
                </select>
                @error('chitieutrongnha_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="loaigiatrido_id">Giá trị đo <span class="text-danger font-weight-bold">*</span></label>
                <select id="loaigiatrido_id" class="form-control custom-select @error('loaigiatrido_id') is-invalid @enderror" name="loaigiatrido_id" required autofocus>
                    <option value="">-- Chọn giá trị đo --</option>
						@foreach($loaigiatrido as $item)
							<option value="{{ $item->id }}">{{ $item->loaigiatrido_ten }}</option>
						@endforeach
                </select>
                @error('loaigiatrido_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="giatridotrongnha_giatri">Giá trị đo trong nhà <span class="text-danger font-weight-bold">*</span></label>
            <input id="giatridotrongnha_giatri" type="text" class="form-control @error('giatridotrongnha_giatri') is-invalid @enderror" name="giatridotrongnha_giatri" value="{{ old('giatridotrongnha_giatri') }}" required autocomplete="giatridotrongnha_giatri" />
            @error('giatridotrongnha_giatri')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

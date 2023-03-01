@extends('layout.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI ĐỐI TƯỢNG TÍNH TRẠNG</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('doituongtinhtrangs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="giaidoantruongthanh_id">Nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                <select id="giaidoantruongthanh_id" class="form-control custom-select @error('giaidoantruongthanh_id') is-invalid @enderror" name="giaidoantruongthanh_id" required autofocus>
                    <option value="">-- Chọn giai đoạn --</option>
						@foreach($giaidoantruongthanh as $item)
							<option value="{{ $item->id }}">{{ $item->giaidoantt_ten }}</option>
						@endforeach
                </select>
                @error('giaidoantruongthanh_id')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="doituongtt_ten">Tên đối tượng tính trạng <span class="text-danger font-weight-bold">*</span></label>
            <input id="doituongtt_ten" type="text" class="form-control @error('doituongtt_ten') is-invalid @enderror" name="doituongtt_ten" value="{{ old('doituongtt_ten') }}" required autocomplete="doituongtt_ten" />
            @error('doituongtt_ten')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="doituongtt_mota">Mô tả</label>
                <textarea class="form-control" style="height:150px" value="{{old('doituongtt_mota')}}" name="doituongtt_mota" @error('doituongtt_mota') is-invalid @enderror placeholder="Mô tả đối tượng tính trạng"></textarea>
                @error('doituongtt_mota')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                <button type="submit" class="btn btn-warning">Đăng ký</button>
        </div>
    </div>
</form>
@endsection

@extends('layout.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI GIAI ĐOẠN TRƯỞNG THÀNH</h2>
        </div>
        <div class="">
            <a class="btn btn-warning" href="{{ route('giaidoantruongthanhs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('giaidoantruongthanhs.store') }}" method="POST" class="needs-validation" novalidate>
    @csrf
     <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="giaidoantt_ten">Tên giai đoạn trưởng thành <span class="text-danger font-weight-bold">*</span></label>
                <input type="text" value="{{old('giaidoantt_ten')}}" name="giaidoantt_ten" @error('giaidoantt_ten') is-invalid @enderror class="form-control" placeholder="Tên giai đoạn trưởng thành">
                @error('giaidoantt_ten')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả giai đoạn trưởng thành:</strong>
                <textarea class="form-control" style="height:150px" value="{{old('giaidoantt_mota')}}" name="giaidoantt_mota" @error('giaidoantt_mota') is-invalid @enderror placeholder="Mô tả giai đoạn trưởng thành"></textarea>
                @error('giaidoantt_mota')
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

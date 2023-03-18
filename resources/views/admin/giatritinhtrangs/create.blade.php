@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatritinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatritinhtrangs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="dacdiemtinhtrang_id">Đặc điểm tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="dacdiemtinhtrang_id" class="form-control custom-select @error('dacdiemtinhtrang_id') is-invalid @enderror" name="dacdiemtinhtrang_id" required autofocus>
                        <option value="">-- Chọn đặc điểm tính trạng --</option>
                            @foreach($dacdiemtinhtrang as $item)
                                <option value="{{ $item->id }}">{{ $item->DoiTuongTinhTrang->doituongtt_ten }}: {{ $item->DoiTuongTinhTrang->doituongtt_mota }} - {{ $item->DoiTuongTinhTrang->GiaiDoanTruongThanh->giaidoantt_ten }} -{{ $item->dacdiemtt_ten }}</option>
                            @endforeach
                    </select>
                    @error('dacdiemtinhtrang_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatritt_diem">Điểm giá trị tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <input id="giatritt_diem" type="text" class="form-control @error('giatritt_diem') is-invalid @enderror" name="giatritt_diem" value="{{ old('giatritt_diem') }}" required autocomplete="giatritt_diem" />
                    @error('giatritt_diem')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </div>
        </div>
    </form>
</div>



@endsection

@extends('layout.app')

@section('content')
<div class="row bg-success pt-2">
    <div class="col-lg-12 d-flex justify-content-between">
        <div class="text-white">
            <h2>THÊM MỚI LOẠI SÂU BỆNH</h2>
        </div>
        <div class="">
            <a class="btn btn-warning" href="{{ route('loaisaubenhs.index') }}">Trở về</a>
        </div>
    </div>
</div>

<form action="{{ route('loaisaubenhs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf
     <div class="row mt-1 border border-3 border-success">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="loaisaubenh_ten">Tên loại sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                <input type="text" value="{{old('loaisaubenh_ten')}}" name="loaisaubenh_ten" @error('loaisaubenh_ten') is-invalid @enderror class="form-control" placeholder="Tên loại sâu bệnh">
                @error('loaisaubenh_ten')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="loaisaubenh_donvi">Đơn vị</label>
                <input type="text" value="{{old('loaisaubenh_donvi')}}" name="loaisaubenh_donvi" @error('loaisaubenh_donvi') is-invalid @enderror class="form-control" placeholder="Đơn vị của sâu bệnh">
                @error('loaisaubenh_donvi')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="loaisaubenh_mota">Mô tả</label>
                <textarea class="form-control" style="height:150px" value="{{old('loaisaubenh_mota')}}" name="loaisaubenh_mota" @error('loaisaubenh_mota') is-invalid @enderror placeholder="Mô tả sâu bệnh"></textarea>
                @error('loaisaubenh_mota')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="form-label" for="loaisaubenh_hinhanh">Hình ảnh sâu bệnh</label>
                <input id="loaisaubenh_hinhanh" type="file" class="form-control @error('loaisaubenh_hinhanh') is-invalid @enderror" name="loaisaubenh_hinhanh" value="{{ old('loaisaubenh_hinhanh') }}" required autocomplete="loaisaubenh_hinhanh" />
                @error('loaisaubenh_hinhanh')
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

@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA LOẠI SÂU BỆNH ĐO</h2>
            </div>
            <div >
                <a class="btn btn-warning" href="{{ route('loaisaubenhs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('loaisaubenhs.update',$loaisaubenh->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mt-1 border border-3 border-success">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên:</strong>
                    <input type="text" value="{{ $loaisaubenh->loaisaubenh_ten }}" @error('loaisaubenh_ten') is-invalid @enderror name="loaisaubenh_ten" class="form-control" placeholder="Tên nhóm giống">
                    @error('loaisaubenh_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Đơn vị:</strong>
                    <input type="text" value="{{ $loaisaubenh->loaisaubenh_donvi }}" @error('loaisaubenh_donvi') is-invalid @enderror name="loaisaubenh_donvi" class="form-control" placeholder="Code nhóm giống">
                    @error('loaisaubenh_donvi')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả sâu bệnh:</strong>
                    <textarea class="form-control" style="height:150px" @error('loaisaubenh_mota') is-invalid @enderror name="loaisaubenh_mota" placeholder="Mô tả giống">{{ $loaisaubenh->loaisaubenh_mota }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<label for="loaisaubenh_hinhanh">Hình ảnh sâu bệnh</label>
                    @if(!empty($loaisaubenh->loaisaubenh_hinhanh))
                        <img class="d-block rounded" src="{{ env('STORAGE_URL') . $loaisaubenh->loaisaubenh_hinhanh }}" width="100" />
                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                    @endif
                    <input type="file" class="form-control @error('loaisaubenh_hinhanh') is-invalid @enderror" id="loaisaubenh_hinhanh" name="loaisaubenh_hinhanh" value="{{ $loaisaubenh->loaisaubenh_hinhanh }}" />
                    @error('loaisaubenh_hinhanh')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
				</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>

    </form>
@endsection

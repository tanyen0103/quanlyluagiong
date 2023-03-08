@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA GIỐNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('giongs.update',$giong->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-1 border border-3 border-success">
            <input type="hidden" id="id" name="id" value="{{ $giong->id }}" />
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="nhomgiong_id">Nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="nhomgiong_id" class="form-control custom-select @error('nhomgiong_id') is-invalid @enderror" name="nhomgiong_id" required autofocus>
                        <option value="">-- Chọn nhóm --</option>
                        @foreach($nhomgiong as $item)
                            <option value="{{ $item->id }}" {{ ($giong->nhomgiong_id == $item->id) ? 'selected' : '' }}>{{ $item->nhomgiong_code }}</option>
                        @endforeach
                    </select>
                    @error('nhomgiong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="kieuhinh_id">Kiểu hình<span class="text-danger font-weight-bold">*</span></label>
                    <select id="kieuhinh_id" class="form-control custom-select @error('kieuhinh_id') is-invalid @enderror" name="kieuhinh_id" required autofocus>
                        <option value="">-- Chọn kiểu hình --</option>
                        @foreach($kieuhinh as $item)
                            <option value="{{ $item->id }}" {{ ($giong->kieuhinh_id == $item->id) ? 'selected' : '' }}>{{ $item->kieuhinh_ten }}</option>
                        @endforeach
                    </select>
                    @error('kieuhinh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_ten">Tên giống<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giong->giong_ten }}" @error('giong_ten') is-invalid @enderror name="giong_ten" class="form-control" placeholder="Tên giống">
                    @error('giong_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_nguongoc">Nguồn gốc<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giong->giong_nguongoc }}" @error('giong_nguongoc') is-invalid @enderror name="giong_nguongoc" class="form-control" placeholder="Nguồn gốc">
                    @error('giong_nguongoc')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả giống:</strong>
                    <textarea class="form-control" style="height:150px" @error('giong_mota') is-invalid @enderror name="giong_mota" placeholder="Mô tả giống">{{ $giong->giong_mota }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
					<label for="giong_hinhanh">Hình ảnh giống</label>
                    @if(!empty($giong->giong_hinhanh))
                        <img class="d-block rounded" src="{{ env('STORAGE_URL') . $giong->giong_hinhanh }}" width="100" />
                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                    @endif
                    <input type="file" class="form-control @error('giong_hinhanh') is-invalid @enderror" id="giong_hinhanh" name="giong_hinhanh" value="{{ $giong->giong_hinhanh }}" />
                    @error('giong_hinhanh')
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

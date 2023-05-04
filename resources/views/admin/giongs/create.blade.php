@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('giongs.index') }}">Giống</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tạo mới</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giongs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giongs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="nhomgiong_id">Nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="nhomgiong_id" class="form-control custom-select @error('nhomgiong_id') is-invalid @enderror" name="nhomgiong_id" required autofocus>
                        <option value="">-- Chọn nhóm --</option>
                            @foreach($nhomgiong as $item)
                                <option value="{{ $item->id }}">{{ $item->nhomgiong_code }}</option>
                            @endforeach
                    </select>
                    @error('nhomgiong_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="kieuhinh_id">Kiểu hình <span class="text-danger font-weight-bold">*</span></label>
                    <select id="kieuhinh_id" class="form-control custom-select @error('kieuhinh_id') is-invalid @enderror" name="kieuhinh_id" required autofocus>
                        <option value="">-- Chọn kiểu hình --</option>
                            @foreach($kieuhinh as $item)
                                <option value="{{ $item->id }}">{{ $item->kieuhinh_ten }}</option>
                            @endforeach
                    </select>
                    @error('kieuhinh_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Ngày trổ bông:</strong>
                    <input type="date" value="{{old('giong_ngaytrobong')}}" name="giong_ngaytrobong" @error('giong_ngaytrobong') is-invalid @enderror class="form-control" >
                    @error('giong_ngaytrobong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Ngày chín:</strong>
                    <input type="date" value="{{old('giong_ngaychin')}}" name="giong_ngaychin" @error('giong_ngaychin') is-invalid @enderror" class="form-control" >
                    @error('giong_ngaychin')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_ten">Tên giống <span class="text-danger font-weight-bold">*</span></label>
                    <input id="giong_ten" type="text" class="form-control @error('giong_ten') is-invalid @enderror" name="giong_ten" value="{{ old('giong_ten') }}" required autocomplete="giong_ten" />
                    @error('giong_ten')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_nguongoc">Nguồn gốc <span class="text-danger font-weight-bold">*</span></label>
                    <input id="giong_nguongoc" type="text" class="form-control @error('giong_nguongoc') is-invalid @enderror" name="giong_nguongoc" value="{{ old('giong_nguongoc') }}" required autocomplete="giong_nguongoc" />
                    @error('giong_nguongoc')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_mota">Mô tả</label>
                    <textarea class="form-control" style="height:150px" value="{{old('giong_mota')}}" name="giong_mota" @error('giong_mota') is-invalid @enderror placeholder="Mô tả giống"></textarea>
                    @error('giong_mota')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label class="form-label" for="giong_hinhanh">Hình ảnh giống (chú ý: Ảnh không chứa ký tự đặc biệt, size không quá 2M)</label>
                    <input id="giong_hinhanh" type="file" class="form-control @error('giong_hinhanh') is-invalid @enderror" name="giong_hinhanh" value="{{ old('giong_hinhanh') }}" required autocomplete="giong_hinhanh" />
                    @error('giong_hinhanh')
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

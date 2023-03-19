@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('giatritinhtrangs.index') }}">Giá trị tính trạng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatritinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatritinhtrangs.update',$giatritinhtrang->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $giatritinhtrang->id }}" />
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="dacdiemtinhtrang_id">Đặc điểm tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="dacdiemtinhtrang_id" class="form-control custom-select @error('dacdiemtinhtrang_id') is-invalid @enderror" name="dacdiemtinhtrang_id" required autofocus>
                        <option value="">-- Chọn đặc điểm --</option>
                        @foreach($dacdiemtinhtrang as $item)
                            <option value="{{ $item->id }}" {{ ($giatritinhtrang->dacdiemtinhtrang_id == $item->id) ? 'selected' : '' }}>{{ $item->dacdiemtt_ten }}</option>
                        @endforeach
                    </select>
                    @error('dacdiemtinhtrang_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatritt_diem">Điểm:<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatritinhtrang->giatritt_diem }}" @error('giatritt_diem') is-invalid @enderror name="giatritt_diem" class="form-control" placeholder="Điểm giá trị tính trạng">
                    @error('giatritt_diem')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>


@endsection

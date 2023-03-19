@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('doituongtinhtrangs.index') }}">Đối tượng tính trạng</a></li>
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
            <a class="btn btn-light" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('doituongtinhtrangs.update',$doituongtinhtrang->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $doituongtinhtrang->id }}" />
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giaidoantruongthanh_id">Giai đoạn trưởng thành <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giaidoantruongthanh_id" class="form-control custom-select @error('giaidoantruongthanh_id') is-invalid @enderror" name="giaidoantruongthanh_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giaidoantruongthanh as $item)
                            <option value="{{ $item->id }}" {{ ($doituongtinhtrang->giaidoantruongthanh_id == $item->id) ? 'selected' : '' }}>{{ $item->giaidoantt_ten }}</option>
                        @endforeach
                    </select>
                    @error('giaidoantruongthanh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="doituongtt_ten">Tên:<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $doituongtinhtrang->doituongtt_ten }}" @error('doituongtt_ten') is-invalid @enderror name="doituongtt_ten" class="form-control" placeholder="Tên đối tượng tính trạng">
                    @error('doituongtt_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    <textarea class="form-control" style="height:150px" @error('doituongtt_mota') is-invalid @enderror name="doituongtt_mota" placeholder="Mô tả">{{  $doituongtinhtrang->doituongtt_mota }}</textarea>
                </div>
            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>


@endsection

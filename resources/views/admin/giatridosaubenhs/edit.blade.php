@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatridosaubenhs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatridosaubenhs.update',$giatridosaubenh->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-1 d-flex justify-content-center">
            <input type="hidden" id="id" name="id" value="{{ $giatridosaubenh->id }}" />
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieusaubenh_id">Giống chỉ tiêu sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieusaubenh_id" class="form-control custom-select @error('chitieusaubenh_id') is-invalid @enderror" name="chitieusaubenh_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($chitieusaubenh as $item)
                            <option value="{{ $item->id }}" {{ ($giatridosaubenh->chitieusaubenh_id == $item->id) ? 'selected' : '' }}>{{ $item->Giong->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('chitieusaubenh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaisaubenh_id">Loại sâu bệnh<span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaisaubenh_id" class="form-control custom-select @error('loaisaubenh_id') is-invalid @enderror" name="loaisaubenh_id" required autofocus>
                        <option value="">-- Chọn loại --</option>
                        @foreach($loaisaubenh as $item)
                            <option value="{{ $item->id }}" {{ ($giatridosaubenh->loaisaubenh_id == $item->id) ? 'selected' : '' }}>{{ $item->loaisaubenh_ten }}</option>
                        @endforeach
                    </select>
                    @error('loaisaubenh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatridosaubenh_giatri">Giá trị đo sâu bệnh<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatridosaubenh->giatridosaubenh_giatri }}" @error('giatridosaubenh_giatri') is-invalid @enderror name="giatridosaubenh_giatri" class="form-control" placeholder="Giá trị đo ngoài đồng">
                    @error('giatridosaubenh_giatri')
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

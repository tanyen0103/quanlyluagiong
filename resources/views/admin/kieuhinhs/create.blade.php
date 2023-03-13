@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('kieuhinhs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('kieuhinhs.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="kieuhinh_ten">Tên kiểu hình <span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{old('kieuhinh_ten')}}" name="kieuhinh_ten" @error('kieuhinh_ten') is-invalid @enderror class="form-control" placeholder="Tên kiểu hình">
                    @error('kieuhinh_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Mô tả kiểu hình:</strong>
                    <textarea class="form-control" style="height:150px" value="{{old('kieuhinh_mota')}}" name="kieuhinh_mota" @error('kieuhinh_mota') is-invalid @enderror placeholder="Mô tả kiểu hình"></textarea>
                    @error('kieuhinh_mota')
                        <strong class="text-danger">{{ $message }}</strong>
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

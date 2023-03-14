@extends('layouts.app')

@section('content')

<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('loaigiatridos.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('loaigiatridos.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
         <div class="row mt-1 d-flex justify-content-center">

            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaigiatrido_ten">Tên loại giá trị đo <span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{old('loaigiatrido_ten')}}" name="loaigiatrido_ten" @error('loaigiatrido_ten') is-invalid @enderror class="form-control" placeholder="Tên loại giá trị đo">
                    @error('loaigiatrido_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaigiatrido_donvi">Đơn vị <span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{old('loaigiatrido_donvi')}}" name="loaigiatrido_donvi" @error('loaigiatrido_donvi') is-invalid @enderror class="form-control" placeholder="Đơn vị của loai giá trị đo">
                    @error('loaigiatrido_donvi')
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

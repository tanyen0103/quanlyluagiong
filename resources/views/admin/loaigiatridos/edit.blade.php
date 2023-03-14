@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('loaigiatridos.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('loaigiatridos.update',$loaigiatrido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-1 d-flex justify-content-center">

            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Tên:</strong>
                    <input type="text" value="{{ $loaigiatrido->loaigiatrido_ten }}" @error('loaigiatrido_ten') is-invalid @enderror name="loaigiatrido_ten" class="form-control" placeholder="Tên nhóm giống">
                    @error('loaigiatrido_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Đơn vị:</strong>
                    <input type="text" value="{{ $loaigiatrido->loaigiatrido_donvi }}" @error('loaigiatrido_donvi') is-invalid @enderror name="loaigiatrido_donvi" class="form-control" placeholder="Code nhóm giống">
                    @error('loaigiatrido_donvi')
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

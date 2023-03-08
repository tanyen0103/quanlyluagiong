@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA LOẠI GIÁ TRỊ ĐO</h2>
            </div>
            <div >
                <a class="btn btn-warning" href="{{ route('loaigiatridos.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('loaigiatridos.update',$loaigiatrido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-1 border border-3 border-success">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên:</strong>
                    <input type="text" value="{{ $loaigiatrido->loaigiatrido_ten }}" @error('loaigiatrido_ten') is-invalid @enderror name="loaigiatrido_ten" class="form-control" placeholder="Tên nhóm giống">
                    @error('loaigiatrido_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Đơn vị:</strong>
                    <input type="text" value="{{ $loaigiatrido->loaigiatrido_donvi }}" @error('loaigiatrido_donvi') is-invalid @enderror name="loaigiatrido_donvi" class="form-control" placeholder="Code nhóm giống">
                    @error('loaigiatrido_donvi')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>

    </form>
@endsection

@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giaidoantruongthanhs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giaidoantruongthanhs.update',$giaidoantruongthanh->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Tên giai đoạn trưởng thành:</strong>
                    <input type="text" value="{{ $giaidoantruongthanh->giaidoantt_ten }}" @error('giaidoantt_ten') is-invalid @enderror name="giaidoantt_ten" class="form-control" placeholder="Tên giai đoạn trưởng thành">
                    @error('giaidoantt_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Mô tả giai đoạn trưởng thành:</strong>
                    <textarea class="form-control" style="height:150px" @error('giaidoantt_mota') is-invalid @enderror name="giaidoantt_mota" placeholder="Mô tả giai đoạn trưởng thành">{{ $giaidoantruongthanh->giaidoantt_mota }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>


@endsection

@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA KIỂU HÌNH</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giaidoantruongthanhs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('giaidoantruongthanhs.update',$giaidoantruongthanh->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên giai đoạn trưởng thành:</strong>
                    <input type="text" value="{{ $giaidoantruongthanh->giaidoantt_ten }}" @error('giaidoantt_ten') is-invalid @enderror name="giaidoantt_ten" class="form-control" placeholder="Tên giai đoạn trưởng thành">
                    @error('giaidoantt_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả giai đoạn trưởng thành:</strong>
                    <textarea class="form-control" style="height:150px" @error('giaidoantt_mota') is-invalid @enderror name="giaidoantt_mota" placeholder="Mô tả giai đoạn trưởng thành">{{ $giaidoantruongthanh->giaidoantt_mota }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection

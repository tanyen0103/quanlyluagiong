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
    <form action="{{ route('giaidoantruongthanhs.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giaidoantt_ten"><strong>Tên giai đoạn trưởng thành</strong> <span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{old('giaidoantt_ten')}}" name="giaidoantt_ten" @error('giaidoantt_ten') is-invalid @enderror class="form-control" placeholder="Tên giai đoạn trưởng thành">
                    @error('giaidoantt_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <strong>Mô tả giai đoạn trưởng thành:</strong>
                    <textarea class="form-control" style="height:150px" value="{{old('giaidoantt_mota')}}" name="giaidoantt_mota" @error('giaidoantt_mota') is-invalid @enderror placeholder="Mô tả giai đoạn trưởng thành"></textarea>
                    @error('giaidoantt_mota')
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

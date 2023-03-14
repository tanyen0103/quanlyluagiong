@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('dacdiemtinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('dacdiemtinhtrangs.update',$dacdiemtinhtrang->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $dacdiemtinhtrang->id }}" />
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="doituongtinhtrang_id">Đối tượng tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="doituongtinhtrang_id" class="form-control custom-select @error('doituongtinhtrang_id') is-invalid @enderror" name="doituongtinhtrang_id" required autofocus>
                        <option value="">-- Chọn đối tượng --</option>
                        @foreach($doituongtinhtrang as $item)
                            <option value="{{ $item->id }}" {{ ($dacdiemtinhtrang->doituongtinhtrang_id == $item->id) ? 'selected' : '' }}>{{ $item->doituongtt_ten }}</option>
                        @endforeach
                    </select>
                    @error('doituongtinhtrang_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="dacdiemtt_ten">Tên:<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $dacdiemtinhtrang->dacdiemtt_ten }}" @error('dacdiemtt_ten') is-invalid @enderror name="dacdiemtt_ten" class="form-control" placeholder="Tên đối tượng tính trạng">
                    @error('dacdiemtt_ten')
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

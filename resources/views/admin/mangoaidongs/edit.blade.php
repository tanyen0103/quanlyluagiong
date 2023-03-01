@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA MÃ NGOÀI ĐỒNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('mangoaidongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('mangoaidongs.update',$mangoaidong->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $mangoaidong->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($mangoaidong->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="field_code">Mã Code<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $mangoaidong->field_code }}" @error('field_code') is-invalid @enderror name="field_code" class="form-control" placeholder="Code mã ngoài đồng">
                    @error('field_code')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    <textarea class="form-control" style="height:150px" @error('field_mota') is-invalid @enderror name="field_mota" placeholder="Mô tả">{{ $mangoaidong->field_mota }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection

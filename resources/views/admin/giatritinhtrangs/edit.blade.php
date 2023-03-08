@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA GIÁ TRỊ TÍNH TRẠNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giatritinhtrangs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('giatritinhtrangs.update',$giatritinhtrang->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $giatritinhtrang->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="dacdiemtinhtrang_id">Đặc điểm tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="dacdiemtinhtrang_id" class="form-control custom-select @error('dacdiemtinhtrang_id') is-invalid @enderror" name="dacdiemtinhtrang_id" required autofocus>
                        <option value="">-- Chọn đặc điểm --</option>
                        @foreach($dacdiemtinhtrang as $item)
                            <option value="{{ $item->id }}" {{ ($giatritinhtrang->dacdiemtinhtrang_id == $item->id) ? 'selected' : '' }}>{{ $item->dacdiemtt_ten }}</option>
                        @endforeach
                    </select>
                    @error('dacdiemtinhtrang_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giatritt_diem">Điểm:<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatritinhtrang->giatritt_diem }}" @error('giatritt_diem') is-invalid @enderror name="giatritt_diem" class="form-control" placeholder="Điểm giá trị tính trạng">
                    @error('giatritt_diem')
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

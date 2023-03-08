@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA GIÁ TRỊ ĐO NGOÀI ĐỒNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('giatridongoaidongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('giatridongoaidongs.update',$giatridongoaidong->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-1 border border-3 border-success">
            <input type="hidden" id="id" name="id" value="{{ $giatridongoaidong->id }}" />
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_id">Giống chỉ tiêu ngoài đồng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieungoaidong_id" class="form-control custom-select @error('chitieungoaidong_id') is-invalid @enderror" name="chitieungoaidong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($chitieungoaidong as $item)
                            <option value="{{ $item->id }}" {{ ($giatridongoaidong->chitieungoaidong_id == $item->id) ? 'selected' : '' }}>{{ $item->Giong->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('chitieungoaidong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="loaigiatrido_id">Giá trị đo<span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaigiatrido_id" class="form-control custom-select @error('loaigiatrido_id') is-invalid @enderror" name="loaigiatrido_id" required autofocus>
                        <option value="">-- Chọn giá trị đo --</option>
                        @foreach($loaigiatrido as $item)
                            <option value="{{ $item->id }}" {{ ($giatridongoaidong->loaigiatrido_id == $item->id) ? 'selected' : '' }}>{{ $item->loaigiatrido_ten }}</option>
                        @endforeach
                    </select>
                    @error('loaigiatrido_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giatridongoaidong_giatri">Giá trị đo ngoài đồng<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatridongoaidong->giatridongoaidong_giatri }}" @error('giatridongoaidong_giatri') is-invalid @enderror name="giatridongoaidong_giatri" class="form-control" placeholder="Giá trị đo ngoài đồng">
                    @error('giatridongoaidong_giatri')
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

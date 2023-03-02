@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA CHỈ TIÊU SÂU BỆNH</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('chitieusaubenhs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('chitieusaubenhs.update',$chitieusaubenh->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $chitieusaubenh->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($chitieusaubenh->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieusaubenh_chonloc">Chọn lọc</label>
                    <input type="text" value="{{ $chitieusaubenh->chitieusaubenh_chonloc }}" @error('chitieusaubenh_chonloc') is-invalid @enderror name="chitieusaubenh_chonloc" class="form-control" placeholder="Gié C2">
                    @error('chitieusaubenh_chonloc')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieusaubenh_danhgia">Đánh giá</label>
                    <input type="text" value="{{ $chitieusaubenh->chitieusaubenh_danhgia }}" @error('chitieusaubenh_danhgia') is-invalid @enderror name="chitieusaubenh_danhgia" class="form-control" placeholder="Đánh giá">
                    @error('chitieusaubenh_danhgia')
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

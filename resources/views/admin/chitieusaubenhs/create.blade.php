@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('chitieusaubenhs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('chitieusaubenhs.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                            @foreach($giong as $item)
                                <option value="{{ $item->id }}">{{ $item->giong_ten }}</option>
                            @endforeach
                    </select>
                    @error('giong_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieusaubenh_chonloc">Chọn lọc:<span class="text-danger font-weight-bold">*</span></label>
                    <input id="chitieusaubenh_chonloc" type="text" class="form-control @error('chitieusaubenh_chonloc') is-invalid @enderror" name="chitieusaubenh_chonloc" value="{{ old('chitieusaubenh_chonloc') }}" required autocomplete="chitieusaubenh_chonloc" />
                    @error('chitieusaubenh_chonloc')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieusaubenh_danhgia">Đánh giá:<span class="text-danger font-weight-bold">*</span></label>
                    <input id="chitieusaubenh_danhgia" type="text" class="form-control @error('chitieusaubenh_danhgia') is-invalid @enderror" name="chitieusaubenh_danhgia" value="{{ old('chitieusaubenh_danhgia') }}" required autocomplete="chitieusaubenh_danhgia" />
                    @error('chitieusaubenh_danhgia')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
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

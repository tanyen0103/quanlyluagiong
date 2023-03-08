@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA CHỈ TIÊU TRONG NHÀ</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('chitieutrongnhas.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('chitieutrongnhas.update',$chitieutrongnha->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $chitieutrongnha->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($chitieutrongnha->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_giec2">Gié C2</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_giec2 }}" @error('chitieutrongnha_giec2') is-invalid @enderror name="chitieutrongnha_giec2" class="form-control" placeholder="Gié C2">
                    @error('chitieutrongnha_giec2')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_dorunghat">Độ rụng hạt</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_dorunghat }}" @error('chitieutrongnha_dorunghat') is-invalid @enderror name="chitieutrongnha_dorunghat" class="form-control" placeholder="Độ rụng hạt">
                    @error('chitieutrongnha_dorunghat')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_msvotrau">Màu sắc vỏ trấu</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_msvotrau }}" @error('chitieutrongnha_msvotrau') is-invalid @enderror name="chitieutrongnha_msvotrau" class="form-control" placeholder="Màu sắc vỏ trấu">
                    @error('chitieutrongnha_msvotrau')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_dangthoc">Dạng thóc</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_dangthoc }}" @error('chitieutrongnha_dangthoc') is-invalid @enderror name="chitieutrongnha_dangthoc" class="form-control" placeholder="Dạng thóc">
                    @error('chitieutrongnha_dangthoc')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_mausacgao">Màu sắc gạo</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_mausacgao }}" @error('chitieutrongnha_mausacgao') is-invalid @enderror name="chitieutrongnha_mausacgao" class="form-control" placeholder="Màu sắc gạo">
                    @error('chitieutrongnha_mausacgao')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_tl1000hat">Trọng lượng 1000 hạt</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_tl1000hat }}" @error('chitieutrongnha_tl1000hat') is-invalid @enderror name="chitieutrongnha_tl1000hat" class="form-control" placeholder="Trọng lượng 1000 hạt">
                    @error('chitieutrongnha_tl1000hat')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_doam">Độ ẩm</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_doam }}" @error('chitieutrongnha_doam') is-invalid @enderror name="chitieutrongnha_doam" class="form-control" placeholder="Độ ẩm">
                    @error('chitieutrongnha_doam')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_thom">Thơm</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_thom }}" @error('chitieutrongnha_thom') is-invalid @enderror name="chitieutrongnha_thom" class="form-control" placeholder="Thơm">
                    @error('chitieutrongnha_thom')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieutrongnha_danhgia">Đánh giá</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_danhgia }}" @error('chitieutrongnha_danhgia') is-invalid @enderror name="chitieutrongnha_danhgia" class="form-control" placeholder="Đánh giá">
                    @error('chitieutrongnha_danhgia')
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

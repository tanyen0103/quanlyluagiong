@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA ĐỐI TƯỢNG TÍNH TRẠNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('doituongtinhtrangs.update',$doituongtinhtrang->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $doituongtinhtrang->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giaidoantruongthanh_id">Giai đoạn trưởng thành <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giaidoantruongthanh_id" class="form-control custom-select @error('giaidoantruongthanh_id') is-invalid @enderror" name="giaidoantruongthanh_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giaidoantruongthanh as $item)
                            <option value="{{ $item->id }}" {{ ($doituongtinhtrang->giaidoantruongthanh_id == $item->id) ? 'selected' : '' }}>{{ $item->giaidoantt_ten }}</option>
                        @endforeach
                    </select>
                    @error('giaidoantruongthanh_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="doituongtt_ten">Tên:<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $doituongtinhtrang->doituongtt_ten }}" @error('doituongtt_ten') is-invalid @enderror name="doituongtt_ten" class="form-control" placeholder="Tên đối tượng tính trạng">
                    @error('doituongtt_ten')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    <textarea class="form-control" style="height:150px" @error('doituongtt_mota') is-invalid @enderror name="doituongtt_mota" placeholder="Mô tả">{{  $doituongtinhtrang->doituongtt_mota }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>
    </form>
@endsection

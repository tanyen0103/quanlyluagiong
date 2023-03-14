@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('doituongtinhtrangs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giaidoantruongthanh_id">Nhóm giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giaidoantruongthanh_id" class="form-control custom-select @error('giaidoantruongthanh_id') is-invalid @enderror" name="giaidoantruongthanh_id" required autofocus>
                        <option value="">-- Chọn giai đoạn --</option>
                            @foreach($giaidoantruongthanh as $item)
                                <option value="{{ $item->id }}">{{ $item->giaidoantt_ten }}</option>
                            @endforeach
                    </select>
                    @error('giaidoantruongthanh_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="doituongtt_ten">Tên đối tượng tính trạng <span class="text-danger font-weight-bold">*</span></label>
                    <input id="doituongtt_ten" type="text" class="form-control @error('doituongtt_ten') is-invalid @enderror" name="doituongtt_ten" value="{{ old('doituongtt_ten') }}" required autocomplete="doituongtt_ten" />
                    @error('doituongtt_ten')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="doituongtt_mota">Mô tả</label>
                    <textarea class="form-control" style="height:150px" value="{{old('doituongtt_mota')}}" name="doituongtt_mota" @error('doituongtt_mota') is-invalid @enderror placeholder="Mô tả đối tượng tính trạng"></textarea>
                    @error('doituongtt_mota')
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

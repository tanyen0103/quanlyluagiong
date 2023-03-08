@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>SỬA CHỈ TIÊU NGOÀI ĐỒNG</h2>
            </div>
            <div class="">
                <a class="btn btn-warning" href="{{ route('chitieungoaidongs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <form action="{{ route('chitieungoaidongs.update',$chitieungoaidong->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $chitieungoaidong->id }}" />
        <div class="row mt-1 border border-3 border-success">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($chitieungoaidong->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_phienla">Phiến lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_phienla }}" @error('chitieungoaidong_phienla') is-invalid @enderror name="chitieungoaidong_phienla" class="form-control" placeholder="Phiến lá">
                    @error('chitieungoaidong_phienla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_taila">Tai lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_taila }}" @error('chitieungoaidong_taila') is-invalid @enderror name="chitieungoaidong_taila" class="form-control" placeholder="Tai lá">
                    @error('chitieungoaidong_taila')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_gocnhanh">Góc nhánh</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocnhanh }}" @error('chitieungoaidong_gocnhanh') is-invalid @enderror name="chitieungoaidong_gocnhanh" class="form-control" placeholder="Góc nhánh">
                    @error('chitieungoaidong_gocnhanh')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_bela">Bẹ lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_bela }}" @error('chitieungoaidong_bela') is-invalid @enderror name="chitieungoaidong_bela" class="form-control" placeholder="Bẹ lá">
                    @error('chitieungoaidong_bela')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_gocla">Góc lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocla }}" @error('chitieungoaidong_gocla') is-invalid @enderror name="chitieungoaidong_gocla" class="form-control" placeholder="Góc lá">
                    @error('chitieungoaidong_gocla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocla">Màu sắc góc lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_msgocla }}" @error('chitieungoaidong_msgocla') is-invalid @enderror name="chitieungoaidong_msgocla" class="form-control" placeholder="Màu sắc góc lá">
                    @error('chitieungoaidong_msgocla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_gocladong">Góc lá đòng</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocladong }}" @error('chitieungoaidong_gocladong') is-invalid @enderror name="chitieungoaidong_gocladong" class="form-control" placeholder="Góc lá đòng">
                    @error('chitieungoaidong_gocladong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_thoatcb">Thoát CB</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_thoatcb }}" @error('chitieungoaidong_thoatcb') is-invalid @enderror name="chitieungoaidong_thoatcb" class="form-control" placeholder="Thoát CB">
                    @error('chitieungoaidong_thoatcb')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocthan">Màu sắc góc thân</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_msgocthan }}" @error('chitieungoaidong_msgocthan') is-invalid @enderror name="chitieungoaidong_msgocthan" class="form-control" placeholder="Màu sắc góc thân">
                    @error('chitieungoaidong_msgocthan')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_dangbong">Dáng bông</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_dangbong }}" @error('chitieungoaidong_dangbong') is-invalid @enderror name="chitieungoaidong_dangbong" class="form-control" placeholder="Dáng bôn">
                    @error('chitieungoaidong_dangbong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_congtrucbong">Cong trục bông</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_congtrucbong }}" @error('chitieungoaidong_congtrucbong') is-invalid @enderror name="chitieungoaidong_congtrucbong" class="form-control" placeholder="Cong trục bông">
                    @error('chitieungoaidong_congtrucbong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="chitieungoaidong_rau">Râu</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_rau }}" @error('chitieungoaidong_rau') is-invalid @enderror name="chitieungoaidong_rau" class="form-control" placeholder="Râu">
                    @error('chitieungoaidong_rau')
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

@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('nhomgiongs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('chitieungoaidongs.store') }}" method="POST" class="needs-validation" novalidate>
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
                    <label for="chitieungoaidong_phienla">Phiến lá:</label>
                    <input id="chitieungoaidong_phienla" type="text" class="form-control @error('chitieungoaidong_phienla') is-invalid @enderror" name="chitieungoaidong_phienla" value="{{ old('chitieungoaidong_phienla') }}" required autocomplete="chitieungoaidong_phienla" />
                    @error('chitieungoaidong_phienla')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_taila">Tai lá:</label>
                    <input id="chitieungoaidong_taila" type="text" class="form-control @error('chitieungoaidong_taila') is-invalid @enderror" name="chitieungoaidong_taila" value="{{ old('chitieungoaidong_taila') }}" required autocomplete="chitieungoaidong_taila" />
                    @error('chitieungoaidong_taila')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocnhanh">Góc nhánh:</label>
                    <input id="chitieungoaidong_gocnhanh" type="text" class="form-control @error('chitieungoaidong_gocnhanh') is-invalid @enderror" name="chitieungoaidong_gocnhanh" value="{{ old('chitieungoaidong_gocnhanh') }}" required autocomplete="chitieungoaidong_gocnhanh" />
                    @error('chitieungoaidong_gocnhanh')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_bela">Bẹ lá:</label>
                    <input id="chitieungoaidong_bela" type="text" class="form-control @error('chitieungoaidong_bela') is-invalid @enderror" name="chitieungoaidong_bela" value="{{ old('chitieungoaidong_bela') }}" required autocomplete="chitieungoaidong_bela" />
                    @error('chitieungoaidong_bela')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocla">Góc lá:</label>
                    <input id="chitieungoaidong_gocla" type="text" class="form-control @error('chitieungoaidong_gocla') is-invalid @enderror" name="chitieungoaidong_gocla" value="{{ old('chitieungoaidong_gocla') }}" required autocomplete="chitieungoaidong_gocla" />
                    @error('chitieungoaidong_gocla')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocla">Màu sắc góc lá:</label>
                    <input id="chitieungoaidong_msgocla" type="text" class="form-control @error('chitieungoaidong_msgocla') is-invalid @enderror" name="chitieungoaidong_msgocla" value="{{ old('chitieungoaidong_msgocla') }}" required autocomplete="chitieungoaidong_msgocla" />
                    @error('chitieungoaidong_msgocla')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocladong">Góc lá đồng:</label>
                    <input id="chitieungoaidong_gocladong" type="text" class="form-control @error('chitieungoaidong_gocladong') is-invalid @enderror" name="chitieungoaidong_gocladong" value="{{ old('chitieungoaidong_gocladong') }}" required autocomplete="chitieungoaidong_gocladong" />
                    @error('chitieungoaidong_gocladong')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_thoatcb">Thoát cổ bông:</label>
                    <input id="chitieungoaidong_thoatcb" type="text" class="form-control @error('chitieungoaidong_thoatcb') is-invalid @enderror" name="chitieungoaidong_thoatcb" value="{{ old('chitieungoaidong_thoatcb') }}" required autocomplete="chitieungoaidong_thoatcb" />
                    @error('chitieungoaidong_thoatcb')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocthan">Màu sắc góc thân:</label>
                    <input id="chitieungoaidong_msgocthan" type="text" class="form-control @error('chitieungoaidong_msgocthan') is-invalid @enderror" name="chitieungoaidong_msgocthan" value="{{ old('chitieungoaidong_msgocthan') }}" required autocomplete="chitieungoaidong_msgocthan" />
                    @error('chitieungoaidong_msgocthan')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_dangbong">Dáng bông:</label>
                    <input id="chitieungoaidong_dangbong" type="text" class="form-control @error('chitieungoaidong_dangbong') is-invalid @enderror" name="chitieungoaidong_dangbong" value="{{ old('chitieungoaidong_dangbong') }}" required autocomplete="chitieungoaidong_dangbong" />
                    @error('chitieungoaidong_dangbong')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_congtrucbong">Cong trục bông:</label>
                    <input id="chitieungoaidong_congtrucbong" type="text" class="form-control @error('chitieungoaidong_congtrucbong') is-invalid @enderror" name="chitieungoaidong_congtrucbong" value="{{ old('chitieungoaidong_congtrucbong') }}" required autocomplete="chitieungoaidong_congtrucbong" />
                    @error('chitieungoaidong_congtrucbong')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_rau">Râu:</label>
                    <input id="chitieungoaidong_rau" type="text" class="form-control @error('chitieungoaidong_rau') is-invalid @enderror" name="chitieungoaidong_rau" value="{{ old('chitieungoaidong_rau') }}" required autocomplete="chitieungoaidong_rau" />
                    @error('chitieungoaidong_rau')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
            </div>
        </div>
    </form>
</div>


@endsection

@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatridotrongnhas.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatridotrongnhas.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_id">Giống chỉ tiêu trong nhà <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieutrongnha_id" class="form-control custom-select @error('chitieutrongnha_id') is-invalid @enderror" name="chitieutrongnha_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                            @foreach($chitieutrongnha as $item)
                                <option value="{{ $item->id }}">{{ $item->Giong->giong_ten }}</option>
                            @endforeach
                    </select>
                    @error('chitieutrongnha_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaigiatrido_id">Giá trị đo <span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaigiatrido_id" class="form-control custom-select @error('loaigiatrido_id') is-invalid @enderror" name="loaigiatrido_id" required autofocus>
                        <option value="">-- Chọn giá trị đo --</option>
                            @foreach($loaigiatrido as $item)
                                <option value="{{ $item->id }}">{{ $item->loaigiatrido_ten }}</option>
                            @endforeach
                    </select>
                    @error('loaigiatrido_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatridotrongnha_giatri">Giá trị đo trong nhà <span class="text-danger font-weight-bold">*</span></label>
                    <input id="giatridotrongnha_giatri" type="text" class="form-control @error('giatridotrongnha_giatri') is-invalid @enderror" name="giatridotrongnha_giatri" value="{{ old('giatridotrongnha_giatri') }}" required autocomplete="giatridotrongnha_giatri" />
                    @error('giatridotrongnha_giatri')
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

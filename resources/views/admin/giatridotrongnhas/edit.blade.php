@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatridongoaidongs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatridotrongnhas.update',$giatridotrongnha->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-1 d-flex justify-content-center">
            <input type="hidden" id="id" name="id" value="{{ $giatridotrongnha->id }}" />
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_id">Giống chỉ tiêu ngoài đồng <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieutrongnha_id" class="form-control custom-select @error('chitieutrongnha_id') is-invalid @enderror" name="chitieutrongnha_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($chitieutrongnha as $item)
                            <option value="{{ $item->id }}" {{ ($giatridotrongnha->chitieutrongnha_id == $item->id) ? 'selected' : '' }}>{{ $item->Giong->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('chitieutrongnha_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaigiatrido_id">Giá trị đo<span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaigiatrido_id" class="form-control custom-select @error('loaigiatrido_id') is-invalid @enderror" name="loaigiatrido_id" required autofocus>
                        <option value="">-- Chọn giá trị đo --</option>
                        @foreach($loaigiatrido as $item)
                            <option value="{{ $item->id }}" {{ ($giatridotrongnha->loaigiatrido_id == $item->id) ? 'selected' : '' }}>{{ $item->loaigiatrido_ten }}</option>
                        @endforeach
                    </select>
                    @error('loaigiatrido_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatridotrongnha_giatri">Giá trị đo trong nhà<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatridotrongnha->giatridotrongnha_giatri }}" @error('giatridotrongnha_giatri') is-invalid @enderror name="giatridotrongnha_giatri" class="form-control" placeholder="Giá trị đo ngoài đồng">
                    @error('giatridotrongnha_giatri')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
            </div>
        </div>
    </form>
</div>



@endsection

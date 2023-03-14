@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('doituongtinhtrangs.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Giai đoạn trưởng thành :</strong>
				<p>{{ $doituongtinhtrang->GiaiDoanTruongThanh->giaidoantt_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Tên:</strong>
                <p>{{ $doituongtinhtrang->doituongtt_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Mô tả:</strong>
                <p>{{ $doituongtinhtrang->doituongtt_mota }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>

    </div>
</div>
@endsection

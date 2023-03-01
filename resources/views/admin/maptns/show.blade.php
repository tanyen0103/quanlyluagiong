@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>MÃ PHÒNG THÍ NGHIỆM CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('maptns.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $maptn->Giong->giong_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code Mã Ngoài Đồng:</strong>
                <p>{{ $maptn->field_code }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                <p>{{ $maptn->field_mota }}</p>
            </div>
        </div>
    </div>
@endsection

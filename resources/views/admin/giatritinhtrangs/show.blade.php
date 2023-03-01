@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>GIÁ TRỊ TÍNH TRẠNG CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('giatritinhtrangs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Giai đoạn trưởng thành :</strong>
				<p>{{ $giatritinhtrang->dacdiemtinhtrang->dacdiemtt_ten }}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Điểm:</strong>
                <p>{{ $giatritinhtrang->giatritt_diem }}</p>
            </div>
        </div>
    </div>
@endsection

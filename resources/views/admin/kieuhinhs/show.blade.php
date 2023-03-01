@extends('layout.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>KIỂU HÌNH CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('kieuhinhs.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên kiểu hình:</strong>
                {{  $kieuhinh->kieuhinh_ten }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô tả:</strong>
                {{  $kieuhinh->kieuhinh_mota }}
            </div>
        </div>

    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row bg-success pt-2">
        <div class="col-lg-12 d-flex justify-content-between">
            <div class="text-white">
                <h2>LOẠI GIÁ TRỊ ĐO CHI TIẾT</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('loaigiatridos.index') }}">Trở về</a>
            </div>
        </div>
    </div>

    <div class="row mt-1 border border-3 border-success">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên loại giá trị đo:</strong>
                {{  $loaigiatrido->loaigiatrido_ten }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Đơn vị:</strong>
                {{  $loaigiatrido->loaigiatrido_donvi }}
            </div>
        </div>

    </div>
@endsection

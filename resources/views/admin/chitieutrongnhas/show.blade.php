@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('chitieutrongnhas.index') }}">Chỉ tiêu trong nhà</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('chitieutrongnhas.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Giống:</strong>
				<p>{{ $chitieutrongnha->Giong->giong_ten }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Gié C2:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_giec2 }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Độ rụng hạt:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_dorunghat }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Màu sắc vỏ trấu:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_msvotrau }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Dạng thóc:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_dangthoc }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                 <strong>Màu sắc gạo:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_mausacgao }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Trọng lượng 1000 hạt:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_tl1000hat }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Độ ẩm:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_doam }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Thơm:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_thom }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
        <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
            <div class="form-group">
                <strong>Đánh giá:</strong>
                <p>{{ $chitieutrongnha->chitieutrongnha_danhgia }}</p>
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>
    </div>
</div>
@endsection

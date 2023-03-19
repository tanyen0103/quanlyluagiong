@extends('layouts.app')

@section('content')
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route ('kieuhinhs.index') }}">Kiểu hình</a></li>
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
                <a class="btn btn-light" href="{{ route('kieuhinhs.index') }}">Trở về</a>
            </div>
        </div>
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                <div class="form-group">
                    <strong>Tên kiểu hình:</strong>
                {{  $kieuhinh->kieuhinh_ten }}
                </div>
                <hr class="h-1 mt-0 bg-gradient-primary">
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 mr-2 ml-2">
                <div class="form-group">
                    <strong>Mô tả:</strong>
                    {{  $kieuhinh->kieuhinh_mota }}
                </div>
                <hr class="h-1 mt-0 bg-gradient-primary">
            </div>
        </div>
    </div>
@endsection

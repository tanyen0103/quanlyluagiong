@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
            </ol>
        </nav>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Chào mừng!') }} {{ Auth::user()->name }}
                    </h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="{{ asset('/public/home/images/qlgl-logo-black-01.png') }}" alt="">
                    </div>
                    <p>Lúa là một trong những loại cây trồng quan trọng nhất trên thế giới, đóng vai
                        trò chính trong sản xuất lương thực. Việc quản lý lúa giống là một phần quan
                        trọng trong việc đảm bảo sự ổn định của sản xuất lúa.
                    </p>
                    <a target="_blank" rel="nofollow" href="{{ route('dashboard') }}">Chuyển sang <strong>bảng điều khiển</strong>  &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <style>
        .docs{
        }
    </style>
    {{-- Nav Breadcrumb --}}
    <div class="nav-breadcrumb bg-gray-100 text-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Hướng dẫn</li>
            </ol>
        </nav>
    </div>

    {{-- Đo chỉ tiêu --}}
    <div id="chitieu" class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">HƯỚNG DẪN ĐO CHỈ TIÊU</h3>
            </div>
        </div>
        {{-- Card body --}}
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills justify-content-center mb-3 text-center custom" id="pills-tab" role="tablist">
                        <div class="step-line"></div>
                        <li class="nav-item btn btn-sm">
                            <a class="nav-link active custom" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab"
                            aria-controls="pills-1" aria-selected="true">
                            {{-- <span class="icon"><i class="bi bi-person-circle"></i></span> --}}
                            <span class="text">Bước 1</span>
                            </a>
                        </li>
                        <li class="nav-item btn btn-sm">
                            <a class="nav-link custom" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab"
                            aria-controls="pills-2" aria-selected="false">
                            {{-- <span class="icon"><i class="bi bi-card-checklist"></i></span> --}}
                            <span class="text">Bước 2</span>
                            </a>
                        </li>
                        <li class="nav-item btn btn-sm">
                            <a class="nav-link custom" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab"
                            aria-controls="pills-3" aria-selected="false">
                            {{-- <span class="icon"><i class="bi bi-credit-card"></i></span> --}}
                            <span class="text">Bước 3</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content custom pt-4" id="pills-tabContent">
                        {{-- step1 --}}
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card">
                            <div class="card-header">
                            Nhập loại giá trị đo
                            </div>
                            <div class="card-body">
                            <ul>
                                <li>Tên loại</li>
                                <li>Đơn vị đo</li>
                            </ul>
                            <a href="{{ route('loaigiatridos.index') }}" class="btn btn-primary">Đi đến loại giá trị đo</a>
                            </div>
                        </div>
                    </div>
                        {{-- step2 --}}
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                Nhập chỉ tiêu ngoài đồng - trong nhà
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Giống</li>
                                    <li>Các giá trị cột mặc định</li>
                                    <li><span class="text-danger font-weight-bold">Chỉ được tạo một chỉ tiêu cho một giống</span></li>
                                </ul>
                                <div class="dflex">
                                    <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu ngoài đồng</a>
                                    <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary mb-2">Đi đến chỉ tiêu trong nhà</a>
                                </div>

                            </div>
                        </div>
                    </div>
                        {{-- step3 --}}
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="card">
                                <div class="card-header">
                                    Nhập giá trị đo ngoài đồng - trong nhà
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Chọn - Giống tương ứng với bảng chỉ tiêu</li>
                                        <li>Chọn - Tên loại giá trị cần nhập</li>
                                        <li>Nhập giá trị theo loại</li>
                                        <li><span class="text-danger font-weight-bold">Không qui định số lần đo</span></li>
                                    </ul>
                                    <div class="dflex">
                                        <a href="{{ route('chitieungoaidongs.index') }}" class="btn btn-primary mb-2">Đi đến GTĐ ngoài đồng</a>
                                        <a href="{{ route('chitieutrongnhas.index') }}" class="btn btn-primary mb-2">Đi đến GTĐ trong nhà</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kết thúc đo chỉ tiêu --}}

    {{-- Đo sâu bệnh --}}
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-center">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">HƯỚNG DẪN ĐO SÂU BỆNH</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills justify-content-center mb-3 text-center custom" id="pills-tab" role="tablist">
                    <div class="step-line"></div>
                    <li class="nav-item btn btn-sm">
                        <a class="nav-link active custom" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab"
                        aria-controls="pills-4" aria-selected="true">
                        {{-- <span class="icon"><i class="bi bi-person-circle"></i></span> --}}
                        <span class="text">Bước 1</span>
                        </a>
                    </li>
                    <li class="nav-item btn btn-sm">
                        <a class="nav-link custom" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab"
                        aria-controls="pills-5" aria-selected="false">
                        {{-- <span class="icon"><i class="bi bi-card-checklist"></i></span> --}}
                        <span class="text">Bước 2</span>
                        </a>
                    </li>
                    <li class="nav-item btn btn-sm">
                        <a class="nav-link custom" id="pills-6-tab" data-toggle="pill" href="#pills-6" role="tab"
                        aria-controls="pills-6" aria-selected="false">
                        {{-- <span class="icon"><i class="bi bi-credit-card"></i></span> --}}
                        <span class="text">Bước 3</span>
                        </a>
                    </li>
                    </ul>
                    <div class="tab-content custom pt-4" id="pills-tabContent">
                        {{-- step1 --}}
                    <div class="tab-pane fade show active" id="pills-4" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card">
                            <div class="card-header">
                            Nhập loại sâu bệnh đo
                            </div>
                            <div class="card-body">
                            <ul>
                                <li>Tên sâu bệnh</li>
                                <li>Đơn vị </li>
                                <li>Mô tả </li>
                                <li>Hình ảnh</li>
                            </ul>
                            <a href="{{ route('loaisaubenhs.index') }}" class="btn btn-primary">Đi đến loại sâu bệnh</a>
                            </div>
                        </div>
                    </div>
                        {{-- step2 --}}
                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card">
                            <div class="card-header">
                            Nhập chỉ tiêu sâu bênh
                            </div>
                            <div class="card-body">
                            <ul>
                                <li>Giống</li>
                                <li>Các giá trị cột mặc định</li>
                                <li><span class="text-danger font-weight-bold">Chỉ được tạo một chỉ tiêu cho một giống</span></li>
                            </ul>
                            <a href="{{ route('chitieusaubenhs.index') }}" class="btn btn-primary">Đi đến chỉ tiêu sâu bệnh</a>
                            </div>
                        </div>
                    </div>
                        {{-- step3 --}}
                    <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="card">
                                <div class="card-header">
                                Nhập giá trị đo sâu bệnh
                                </div>
                                <div class="card-body">
                                <ul>
                                    <li>Chọn - Giống tương ứng với bảng chỉ tiêu</li>
                                    <li>Chọn - Tên loại sâu bệnh</li>
                                    <li>Nhập giá trị sâu bệnh</li>
                                    <li><span class="text-danger font-weight-bold">Không qui định số lần đo</span></li>
                                </ul>
                                <a href="{{ route('giatridongoaidongs.index') }}" class="btn btn-primary">Đi đến giá trị đo sâu bệnh</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="docs mb-5 p-2 shadow">
        <h2 class="text-primary">TÀI LIỆU THAM KHẢO</h2>
        <ul>
            <li>
                <p>2006 - MARD - Phuc trang giong lua - Conventional Rice-Technical Procedure for Seed Production
                    <a href="{{ asset('/public/document/2006 - MARD - Phuc trang giong lua - Conventional Rice-Technical Procedure for Seed Production.pdf') }}">Xem tài liệu</a>
                </p>
            </li>
            <li>
                <p>2013 – IRRI - Standard Evaluation System (SES) for Rice
                    <a href="{{ asset('/public/document/2013 – IRRI - Standard Evaluation System (SES) for Rice.pdf') }}">Xem tài liệu</a>
                </p>
            </li>
            <li>
                <p>2022 - 5.Data Bo giong LM Noi 22&23
                    <a href="{{ asset('/public/document/2022 - 5.Data Bo giong LM Noi 22&23.xlsx') }}">Xem tài liệu</a>
                </p>
            </li>
            <li>
                <p>2022 LMN - Mo ta hinh thai rice
                    <a href="{{ asset('/public/document/2022 LMN - Mo ta hinh thai rice.docx') }}">Xem tài liệu</a>
                </p>
            </li>
        </ul>
    </div>
@endsection

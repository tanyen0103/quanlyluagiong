<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.header')
    <style>
        .slide-nav{
            background-image: url("//www.gstatic.com/mobilesdk/190424_mobilesdk/nav_nachos@2x.png");
            background-position: left 10 bottom 0;
            background-repeat: repeat-y;
            background-size: 256px 600px;
        }

        /* .spinner-wrapper{
            background-color: #0aa6ee;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.2s;
        }
        .spinner-border{
            height: 60px;
            width: 60px;
        } */

        .animated {
            -webkit-animation-duration: 20s;
            animation-duration: 20s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
        }

        .yt-loader {
            -webkit-animation-name: horizontalProgressBar;
            animation-name: horizontalProgressBar;
            -webkit-animation-timing-function: ease;
            animation-timing-function: ease;
            background: rgb(255, 255, 255);
            height: 3px;
            left: 0;
            position: fixed;
            top: 0;
            width: 0%;
            z-index: 9999;
        }

        @keyframes horizontalProgressBar
        {
            0%   {width: 0%;}
            25%  {width: 22%;}
            50%  {width: 55%;}
            75%  {width: 83%;}
            100% {width:100%;}
        }

        @-webkit-keyframes horizontalProgressBar /* Safari and Chrome */
        {
            0%   {width: 0%;}
            25%  {width: 22%;}
            50%  {width: 55%;}
            75%  {width: 83%;}
            100% {width:100%;}
        }

    </style>
</head>
<body id="page-top">
        <div class="animated yt-loader bg-gray"></div>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav slide-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('trangchu') }}">
                <div class="sidebar-brand-icon ">
                    <img src="{{ asset('public/home/logo/AGU.png') }}" alt="" width="50" srcset="">
                </div>
                <div class="sidebar-brand-text mx-3">{{ __('Quản Lý Giống Lúa') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bảng điều khiển</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- Admin  --}}
            @role('Admin')
                <!-- Heading -->
                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('danhmuc') }}"> DANH MỤC</a>
                </div>
                <!-- Nav Item - Người quản lí -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Danh mục</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            {{-- <h6 class="collapse-header text-danger">Quản lý thông tin:</h6> --}}
                            <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Nhóm giống</a>
                            <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Kiểu hình</a>
                            <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Giống</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('mangoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Mã ngoài đồng</a>
                            <a class="collapse-item" href="{{ route('maptns.index') }}"><i class="fas fa-fw fa-caret-right"></i> Mã PTN</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại GTD</a>
                            <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại SB</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('giaidoantruongthanhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GĐ Trưởng thành</a>
                            <a class="collapse-item" href="{{ route('doituongtinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> ĐT Tính trạng</a>
                            <a class="collapse-item" href="{{ route('dacdiemtinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> ĐĐ Tính trạng</a>
                            <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GT Tính trạng</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('chitieu') }}"> CHỈ TIÊU</a>
                </div>
                <!-- Nav Item - Ngoài đồng -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNgoaiDong"
                        aria-expanded="true" aria-controls="collapseNgoaiDong">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Ngoài đồng</span>
                    </a>
                    <div id="collapseNgoaiDong" class="collapse" aria-labelledby="headingNgoaiDong"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu ngoài đồng:</h6>
                            <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                            <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Ngoài đồng</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Trong nhà -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrongNha"
                        aria-expanded="true" aria-controls="collapseTrongNha">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Trong nhà</span>
                    </a>
                    <div id="collapseTrongNha" class="collapse" aria-labelledby="headingTrongNha"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu trong nhà:</h6>
                            <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu TN</a>
                            <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Trong nhà</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Sâu bệnh -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSauBenh"
                        aria-expanded="true" aria-controls="collapseSauBenh">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Sâu bệnh</span>
                    </a>
                    <div id="collapseSauBenh" class="collapse" aria-labelledby="headingSauBenh"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu sâu bệnh:</h6>
                            <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu SB</a>
                            <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Sâu bệnh</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
            @endrole

            {{-- SuperStaff  --}}
            @role('Supermanager')
                <!-- Heading -->
                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('danhmuc') }}"> DANH MỤC</a>
                </div>
                <!-- Nav Item - Người quản lí -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Danh mục</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            {{-- <h6 class="collapse-header text-danger">Quản lý thông tin:</h6> --}}
                            <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Nhóm giống</a>
                            <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Kiểu hình</a>
                            <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Giống</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('mangoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Mã ngoài đồng</a>
                            <a class="collapse-item" href="{{ route('maptns.index') }}"><i class="fas fa-fw fa-caret-right"></i> Mã PTN</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại GTD</a>
                            <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại SB</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('giaidoantruongthanhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GĐ Trưởng thành</a>
                            <a class="collapse-item" href="{{ route('doituongtinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> ĐT Tính trạng</a>
                            <a class="collapse-item" href="{{ route('dacdiemtinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> ĐĐ Tính trạng</a>
                            <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GT Tính trạng</a>
                        </div>
                    </div>
                </li>

                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('chitieu') }}"> CHỈ TIÊU</a>
                </div>
                <!-- Nav Item - Ngoài đồng -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNgoaiDong"
                        aria-expanded="true" aria-controls="collapseNgoaiDong">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Ngoài đồng</span>
                    </a>
                    <div id="collapseNgoaiDong" class="collapse" aria-labelledby="headingNgoaiDong"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu ngoài đồng:</h6>
                            <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                            <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Ngoài đồng</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Trong nhà -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrongNha"
                        aria-expanded="true" aria-controls="collapseTrongNha">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Trong nhà</span>
                    </a>
                    <div id="collapseTrongNha" class="collapse" aria-labelledby="headingTrongNha"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu trong nhà:</h6>
                            <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu TN</a>
                            <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Trong nhà</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Sâu bệnh -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSauBenh"
                        aria-expanded="true" aria-controls="collapseSauBenh">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Sâu bệnh</span>
                    </a>
                    <div id="collapseSauBenh" class="collapse" aria-labelledby="headingSauBenh"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu sâu bệnh:</h6>
                            <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu SB</a>
                            <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Sâu bệnh</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
            @endrole

            {{-- Staff --}}
            @role('Staff')
                <!-- Heading -->
                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('danhmuc') }}"> DANH MỤC</a>
                </div>
                <!-- Nav Item - Người dùng -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Danh mục</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            {{-- <h6 class="collapse-header">Manager:</h6> --}}
                            <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Nhóm giống</a>
                            <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Kiểu hình</a>
                            <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Giống</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại GTD</a>
                            <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Loại SB</a>
                            <hr>
                            <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GT Tính trạng</a>
                            <hr>
                            <a class="collapse-item text-danger" href="">Quyền: Staff</a>
                        </div>
                    </div>
                </li>

                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('chitieu') }}"> CHỈ TIÊU</a>
                </div>
                <!-- Nav Item - Ngoài đồng -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNgoaiDong"
                        aria-expanded="true" aria-controls="collapseNgoaiDong">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Ngoài đồng</span>
                    </a>
                    <div id="collapseNgoaiDong" class="collapse" aria-labelledby="headingNgoaiDong"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu ngoài đồng:</h6>
                            <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                            <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Ngoài đồng</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Trong nhà -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrongNha"
                        aria-expanded="true" aria-controls="collapseTrongNha">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Trong nhà</span>
                    </a>
                    <div id="collapseTrongNha" class="collapse" aria-labelledby="headingTrongNha"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu trong nhà:</h6>
                            <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu TN</a>
                            <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Trong nhà</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Sâu bệnh -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSauBenh"
                        aria-expanded="true" aria-controls="collapseSauBenh">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Sâu bệnh</span>
                    </a>
                    <div id="collapseSauBenh" class="collapse" aria-labelledby="headingSauBenh"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header text-danger">Chỉ tiêu sâu bệnh:</h6>
                            <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> Chỉ tiêu SB</a>
                            <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fas fa-fw fa-caret-right"></i> GTĐ Sâu bệnh</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
            @endrole

            {{-- User & Roles --}}
            @role('Admin')
                <!-- Heading -->
                <div class="sidebar-heading">
                    <a class="text-light" href="{{ route('quanlytaikhoan') }}">  TÀI KHOẢN</a>
                </div>

                <!-- Nav Item - Quản lí tài khoản -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Quản lí tài khoản</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{ route('users.index') }}"><i class="fas fa-fw fa-caret-right"></i> Tài khoản</a>
                            <a class="collapse-item" href="{{ route('roles.index') }}"><i class="fas fa-fw fa-caret-right"></i> Phân quyền</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            @endrole

            <!-- Sidebar Toggler (Sidebar) -->
            {{-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> --}}

            {{-- @endguest --}}
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-glass navbar-light mb-4 bg-white topbar shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Time -->
                    <div class="text-danger mt-3 d-none d-lg-inline">
                        {{-- <p> <span id="current-time">{{ now(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('d-m-Y H:i:s') }}</span> <i class="fas fa-fw fa-fire"></i></p> --}}
                        <p id="current-time">{{ now(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('d-m-Y H:i:s') }}</p>
                    </div>

                    <div class="container">
                        <div id="ww_0728d62b4eb35" v='1.3' loc='id' a='{"t":"ticker","lang":"vi","sl_lpl":1,"ids":["wl5510"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather for the Following Location: <a href="https://2ua.org/de/vnm/an_giang/karte/" id="ww_0728d62b4eb35_u" target="_blank">karte von An Giang, Vietnam</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_0728d62b4eb35"></script>
                    </div>
                    <!-- Topbar Navbar Login Avatar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item no-arrow">
                                <a class="nav-link text-primary" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a>
                            </li>
                        @endif

                        @else
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="{{ route("docs") }}" class="btn btn-info btn-circle mb-2" title="Hướng dẫn">
                                    <span class="icon text-white-20">
                                        <i class="fas fa-fw fa-file" style="font-size:1.5rem;"></i>
                                    </span>
                                </a>
                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">

                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                        <i class="fas fa-fw fa-user text-gray-400" style="font-size:1.5rem;"></i>
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                                        <i class="fas fa-fw fa-info mr-2 text-gray-400"></i>
                                        {{ __('Thông tin') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Đăng xuất') }}
                                    </a>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="content_bg">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
        </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white p-3" >
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Quan ly giong lua 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up" style="font-size: 1.5rem;"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Bạn có chắc chắn muốn đăng xuất?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p>Bấm "Đăng xuất" để đăng xuất khỏi tài khoản của bạn.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Đăng xuất</button>
            </form>
            </div>
        </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>

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
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                        <div class="sidebar-brand-icon ">
                            <img src="{{ asset('public/home/logo/AGU.png') }}" alt="" width="50" srcset="">
                        </div>
                        <div class="sidebar-brand-text mx-3">Quản Lý Giống Lúa</div>
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

                    {{-- Manager  --}}
                    @role('Admin')
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            QUẢN LÍ
                        </div>
                        <!-- Nav Item - Người quản lí -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Giống lúa</span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    {{-- <h6 class="collapse-header text-danger">Quản lý thông tin:</h6> --}}
                                    <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fa-solid fa-caret-right"></i> Nhóm giống</a>
                                    <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fa-solid fa-caret-right"></i> Kiểu hình</a>
                                    <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fa-solid fa-caret-right"></i> Giống</a>
                                    <hr>
                                    <a class="collapse-item" href="{{ route('mangoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Mã ngoài đồng</a>
                                    <a class="collapse-item" href="{{ route('maptns.index') }}"><i class="fa-solid fa-caret-right"></i> Mã PTN</a>
                                    {{-- <hr class="">
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a> --}}
                                    <hr>
                                    <a class="collapse-item" href="{{ route('giaidoantruongthanhs.index') }}"><i class="fa-solid fa-caret-right"></i> GĐ Trưởng thành</a>
                                    <a class="collapse-item" href="{{ route('doituongtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐT Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('dacdiemtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐĐ Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> GT Tính trạng</a>
                                </div>
                            </div>
                        </li>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                                    <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Ngoài đồng</a>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu TN</a>
                                    <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Trong nhà</a>
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
                                    <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Loại SB</a>
                                    <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu SB</a>
                                    <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Sâu bệnh</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    @endrole
                    @role('Supermanager')
                       <!-- Heading -->
                       <div class="sidebar-heading">
                        QUẢN LÍ
                        </div>
                        <!-- Nav Item - Người quản lí -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Giống lúa</span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    {{-- <h6 class="collapse-header text-danger">Quản lý thông tin:</h6> --}}
                                    <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fa-solid fa-caret-right"></i> Nhóm giống</a>
                                    <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fa-solid fa-caret-right"></i> Kiểu hình</a>
                                    <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fa-solid fa-caret-right"></i> Giống</a>
                                    <hr>
                                    <a class="collapse-item" href="{{ route('mangoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Mã ngoài đồng</a>
                                    <a class="collapse-item" href="{{ route('maptns.index') }}"><i class="fa-solid fa-caret-right"></i> Mã PTN</a>
                                    {{-- <hr class="">
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a> --}}
                                    <hr>
                                    <a class="collapse-item" href="{{ route('giaidoantruongthanhs.index') }}"><i class="fa-solid fa-caret-right"></i> GĐ Trưởng thành</a>
                                    <a class="collapse-item" href="{{ route('doituongtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐT Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('dacdiemtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐĐ Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> GT Tính trạng</a>
                                </div>
                            </div>
                        </li>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                                    <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Ngoài đồng</a>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu TN</a>
                                    <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Trong nhà</a>
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
                                    <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Loại SB</a>
                                    <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu SB</a>
                                    <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Sâu bệnh</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    @endrole
                    @role('Manager')
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            QUẢN LÍ
                        </div>
                        <!-- Nav Item - Người dùng -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                                aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Giống lúa</span>
                            </a>
                            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    {{-- <h6 class="collapse-header">Manager:</h6> --}}
                                    <a class="collapse-item" href="{{ route('nhomgiongs.index') }}"><i class="fa-solid fa-caret-right"></i> Nhóm giống</a>
                                    <a class="collapse-item" href="{{ route('kieuhinhs.index') }}"><i class="fa-solid fa-caret-right"></i> Kiểu hình</a>
                                    <a class="collapse-item" href="{{ route('giongs.index') }}"><i class="fa-solid fa-caret-right"></i> Giống</a>
                                    <hr>
                                    <a class="collapse-item" href="{{ route('mangoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Mã ngoài đồng</a>
                                    <a class="collapse-item" href="{{ route('maptns.index') }}"><i class="fa-solid fa-caret-right"></i> Mã PTN</a>
                                    {{-- <hr>
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a> --}}
                                    <hr>
                                    <a class="collapse-item" href="{{ route('giaidoantruongthanhs.index') }}"><i class="fa-solid fa-caret-right"></i> GĐ Trưởng thành</a>
                                    <a class="collapse-item" href="{{ route('doituongtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐT Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('dacdiemtinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> ĐĐ Tính trạng</a>
                                    <a class="collapse-item" href="{{ route('giatritinhtrangs.index') }}"><i class="fa-solid fa-caret-right"></i> GT Tính trạng</a>
                                    <hr>
                                    <a class="collapse-item text-danger" href="">Quyền: Manager</a>
                                </div>
                            </div>
                        </li>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieungoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ Tiêu NĐ</a>
                                    <a class="collapse-item" href="{{ route('giatridongoaidongs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Ngoài đồng</a>
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
                                    <a class="collapse-item" href="{{ route('loaigiatridos.index') }}"><i class="fa-solid fa-caret-right"></i> Loại GTD</a>
                                    <a class="collapse-item" href="{{ route('chitieutrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu TN</a>
                                    <a class="collapse-item" href="{{ route('giatridotrongnhas.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Trong nhà</a>
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
                                    <a class="collapse-item" href="{{ route('loaisaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Loại SB</a>
                                    <a class="collapse-item" href="{{ route('chitieusaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> Chỉ tiêu SB</a>
                                    <a class="collapse-item" href="{{ route('giatridosaubenhs.index') }}"><i class="fa-solid fa-caret-right"></i> GTĐ Sâu bệnh</a>
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
                            Quản lí tài khoản
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
                                    <a class="collapse-item" href="{{ route('users.index') }}"><i class="fa-solid fa-caret-right"></i> Tài khoản</a>
                                    <a class="collapse-item" href="{{ route('roles.index') }}"><i class="fa-solid fa-caret-right"></i> Phân quyền</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">
                    @endrole
                    @role('Supermanager')
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Quản lí tài khoản
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
                                    <a class="collapse-item" href="{{ route('roles.index') }}"><i class="fa-solid fa-caret-right"></i> Phân quyền</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">
                    @endrole


                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                {{-- @endguest --}}
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Time -->
                        <div class="text-danger mt-3 d-none d-lg-inline">
                            <p> <span id="current-time">{{ now(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('d-m-Y H:i:s') }}</span> <i class="fa-solid fa-fire"></i></p>
                        </div>

                        <!-- Topbar Navbar Login Avatar -->
                        <ul class="navbar-nav ml-auto">
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @else

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                        {{-- <img class="img-profile rounded-circle"
                                            src="{{asset('public/teamplates/img/undraw_profile.svg')}}"> --}}
                                            <i class="fa-sharp fa-solid fa-circle-user fa-2x text-primary"></i>
                                    </a>

                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-modal').style.display='block'">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            {{ __('Logout') }}
                                        </a>
                                    </div>

                                </li>
                            @endguest
                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container">
                        {{-- Stickey button --}}
                        <div class=" sticky-dashboard position-relative position-fixed d-none d-lg-block d-xl-block" style="left:97%; z-index: 5;">
                            <a href="{{ route("dashboard") }}" class="btn btn-primary btn-circle mb-2" title="Thông tin">
                                <span class="icon text-white-20">
                                    <i class="fas fa-info" ></i>
                                </span>
                            </a>
                            <a href="{{ route("docs") }}" class="btn btn-info btn-circle mb-2" title="Hướng dẫn">
                                <span class="icon text-white-20">
                                    <i class="fas fa-question"></i>
                                </span>
                            </a>
                        </div>
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white p-3" >
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Quan li giong lua 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div id="logout-modal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bạn có chắc chắn muốn đăng xuất?</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                </div>
                <div class="modal-body">
                    <p>Bấm "Đăng xuất" để đăng xuất khỏi tài khoản của bạn.</p>
                    <p>Hoặc load lại trang để huỷ</p>
                </div>
                <div class="modal-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Đăng xuất</button>
                    </form>
                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button> --}}
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>

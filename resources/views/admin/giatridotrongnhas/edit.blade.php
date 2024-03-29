@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('giatridotrongnhas.index') }}">Giá trị đo trong nhà</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class="card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa-regular fa-note-sticky"></i>
            </button>
            <a class="btn btn-light" href="{{ route('giatridotrongnhas.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatridotrongnhas.update',$giatridotrongnha->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-1 d-flex justify-content-center">
            <input type="hidden" id="id" name="id" value="{{ $giatridotrongnha->id }}" />
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_id">Giống chỉ tiêu trong nhà <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieutrongnha_id" class="form-control custom-select @error('chitieutrongnha_id') is-invalid @enderror" name="chitieutrongnha_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($chitieutrongnha as $item)
                            <option value="{{ $item->id }}" {{ ($giatridotrongnha->chitieutrongnha_id == $item->id) ? 'selected' : '' }}>{{ $item->Giong->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('chitieutrongnha_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaigiatrido_id">Giá trị đo<span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaigiatrido_id" class="form-control custom-select @error('loaigiatrido_id') is-invalid @enderror" name="loaigiatrido_id" required autofocus>
                        <option value="">-- Chọn giá trị đo --</option>
                        @foreach($loaigiatrido as $item)
                            <option value="{{ $item->id }}" {{ ($giatridotrongnha->loaigiatrido_id == $item->id) ? 'selected' : '' }}>{{ $item->loaigiatrido_ten }}</option>
                        @endforeach
                    </select>
                    @error('loaigiatrido_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatridotrongnha_giatri">Giá trị đo trong nhà<span class="text-danger font-weight-bold">*</span></label>
                    <input type="text" value="{{ $giatridotrongnha->giatridotrongnha_giatri }}" @error('giatridotrongnha_giatri') is-invalid @enderror name="giatridotrongnha_giatri" class="form-control" placeholder="Giá trị đo ngoài đồng">
                    @error('giatridotrongnha_giatri')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content  border-bottom-primary ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Bảng quy định tính trạng</h5>
          <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{-- BẢNG TÍNH TRẠNG --}}
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row d-flex justify-content-center">
                            <div class="input-group mb-2 col-5">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                    aria-label="Tìm kiếm" aria-describedby="button-addon2" id="searchInput">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Đối tượng tính trạng</th>
                                    <th>Mô tả</th>

                                    <th>Giai đoạn trưởng thành</th>

                                    <th>Đặc điểm tính trạng</th>

                                    <th>Điểm</th>
                                </tr>
                            </thead>
                            @foreach ($giatritinhtrangs as $item)
                            <tbody>
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_ten}}</td>
                                    <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->doituongtt_mota}}</td>

                                    <td>{{ $item->DacDiemTinhTrang->DoiTuongTinhTrang->GiaiDoanTruongThanh->giaidoantt_ten}}</td>

                                    <td>{{ $item->DacDiemTinhTrang->dacdiemtt_ten}}</td>

                                    <td>{{ $item->giatritt_diem }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div> --}}
      </div>
    </div>
</div>

@endsection

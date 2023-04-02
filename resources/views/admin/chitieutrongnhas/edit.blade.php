@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('chitieutrongnhas.index') }}">Chỉ tiêu trong nhà</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fa-regular fa-note-sticky"></i>
              </button>
            <a class="btn btn-light" href="{{ route('chitieutrongnhas.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('chitieutrongnhas.update',$chitieutrongnha->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $chitieutrongnha->id }}" />
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($chitieutrongnha->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_giec2">Gié C2</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_giec2 }}" @error('chitieutrongnha_giec2') is-invalid @enderror name="chitieutrongnha_giec2" class="form-control" placeholder="Gié C2">
                    @error('chitieutrongnha_giec2')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_dorunghat">Độ rụng hạt</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_dorunghat }}" @error('chitieutrongnha_dorunghat') is-invalid @enderror name="chitieutrongnha_dorunghat" class="form-control" placeholder="Độ rụng hạt">
                    @error('chitieutrongnha_dorunghat')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_msvotrau">Màu sắc vỏ trấu</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_msvotrau }}" @error('chitieutrongnha_msvotrau') is-invalid @enderror name="chitieutrongnha_msvotrau" class="form-control" placeholder="Màu sắc vỏ trấu">
                    @error('chitieutrongnha_msvotrau')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_dangthoc">Dạng thóc</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_dangthoc }}" @error('chitieutrongnha_dangthoc') is-invalid @enderror name="chitieutrongnha_dangthoc" class="form-control" placeholder="Dạng thóc">
                    @error('chitieutrongnha_dangthoc')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_mausacgao">Màu sắc gạo</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_mausacgao }}" @error('chitieutrongnha_mausacgao') is-invalid @enderror name="chitieutrongnha_mausacgao" class="form-control" placeholder="Màu sắc gạo">
                    @error('chitieutrongnha_mausacgao')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_tl1000hat">Trọng lượng 1000 hạt</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_tl1000hat }}" @error('chitieutrongnha_tl1000hat') is-invalid @enderror name="chitieutrongnha_tl1000hat" class="form-control" placeholder="Trọng lượng 1000 hạt">
                    @error('chitieutrongnha_tl1000hat')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_doam">Độ ẩm</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_doam }}" @error('chitieutrongnha_doam') is-invalid @enderror name="chitieutrongnha_doam" class="form-control" placeholder="Độ ẩm">
                    @error('chitieutrongnha_doam')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_thom">Thơm</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_thom }}" @error('chitieutrongnha_thom') is-invalid @enderror name="chitieutrongnha_thom" class="form-control" placeholder="Thơm">
                    @error('chitieutrongnha_thom')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieutrongnha_danhgia">Đánh giá</label>
                    <input type="text" value="{{ $chitieutrongnha->chitieutrongnha_danhgia }}" @error('chitieutrongnha_danhgia') is-invalid @enderror name="chitieutrongnha_danhgia" class="form-control" placeholder="Đánh giá">
                    @error('chitieutrongnha_danhgia')
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
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Ghi chú</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{-- BẢNG TÍNH TRẠNG --}}
            <div class="card shadow mb-5 border-bottom-primary">
                <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
                    <div class="">
                        <h3 class="m-0 font-weight-bold text-white">Bảng quy định tính trạng</h3>
                    </div>
                </div>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
</div>

@endsection

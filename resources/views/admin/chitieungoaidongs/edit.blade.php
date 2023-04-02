@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('chitieungoaidongs.index') }}">Chỉ tiêu ngoài đồng</a></li>
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
            <a class="btn btn-light" href="{{ route('chitieungoaidongs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('chitieungoaidongs.update',$chitieungoaidong->id) }}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" id="id" name="id" value="{{ $chitieungoaidong->id }}" />
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giong_id">Giống <span class="text-danger font-weight-bold">*</span></label>
                    <select id="giong_id" class="form-control custom-select @error('giong_id') is-invalid @enderror" name="giong_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                        @foreach($giong as $item)
                            <option value="{{ $item->id }}" {{ ($chitieungoaidong->giong_id == $item->id) ? 'selected' : '' }}>{{ $item->giong_ten }}</option>
                        @endforeach
                    </select>
                    @error('giong_id')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_phienla">Phiến lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_phienla }}" @error('chitieungoaidong_phienla') is-invalid @enderror name="chitieungoaidong_phienla" class="form-control" placeholder="Phiến lá">
                    @error('chitieungoaidong_phienla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_taila">Tai lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_taila }}" @error('chitieungoaidong_taila') is-invalid @enderror name="chitieungoaidong_taila" class="form-control" placeholder="Tai lá">
                    @error('chitieungoaidong_taila')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocnhanh">Góc nhánh</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocnhanh }}" @error('chitieungoaidong_gocnhanh') is-invalid @enderror name="chitieungoaidong_gocnhanh" class="form-control" placeholder="Góc nhánh">
                    @error('chitieungoaidong_gocnhanh')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_bela">Bẹ lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_bela }}" @error('chitieungoaidong_bela') is-invalid @enderror name="chitieungoaidong_bela" class="form-control" placeholder="Bẹ lá">
                    @error('chitieungoaidong_bela')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocla">Góc lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocla }}" @error('chitieungoaidong_gocla') is-invalid @enderror name="chitieungoaidong_gocla" class="form-control" placeholder="Góc lá">
                    @error('chitieungoaidong_gocla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocla">Màu sắc góc lá</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_msgocla }}" @error('chitieungoaidong_msgocla') is-invalid @enderror name="chitieungoaidong_msgocla" class="form-control" placeholder="Màu sắc góc lá">
                    @error('chitieungoaidong_msgocla')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_gocladong">Góc lá đòng</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_gocladong }}" @error('chitieungoaidong_gocladong') is-invalid @enderror name="chitieungoaidong_gocladong" class="form-control" placeholder="Góc lá đòng">
                    @error('chitieungoaidong_gocladong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_thoatcb">Thoát CB</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_thoatcb }}" @error('chitieungoaidong_thoatcb') is-invalid @enderror name="chitieungoaidong_thoatcb" class="form-control" placeholder="Thoát CB">
                    @error('chitieungoaidong_thoatcb')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_msgocthan">Màu sắc góc thân</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_msgocthan }}" @error('chitieungoaidong_msgocthan') is-invalid @enderror name="chitieungoaidong_msgocthan" class="form-control" placeholder="Màu sắc góc thân">
                    @error('chitieungoaidong_msgocthan')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_dangbong">Dáng bông</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_dangbong }}" @error('chitieungoaidong_dangbong') is-invalid @enderror name="chitieungoaidong_dangbong" class="form-control" placeholder="Dáng bôn">
                    @error('chitieungoaidong_dangbong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_congtrucbong">Cong trục bông</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_congtrucbong }}" @error('chitieungoaidong_congtrucbong') is-invalid @enderror name="chitieungoaidong_congtrucbong" class="form-control" placeholder="Cong trục bông">
                    @error('chitieungoaidong_congtrucbong')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieungoaidong_rau">Râu</label>
                    <input type="text" value="{{ $chitieungoaidong->chitieungoaidong_rau }}" @error('chitieungoaidong_rau') is-invalid @enderror name="chitieungoaidong_rau" class="form-control" placeholder="Râu">
                    @error('chitieungoaidong_rau')
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

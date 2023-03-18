@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng đối tượng tính trạng</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('doituongtinhtrangs.create') }}">Tạo mới</a>
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
                            <th>Tên đối tượng tính trạng</th>
                            <th>Mô tả</th>
                            <th>Giai đoạn trưởng thành</th>
                            <th width='160px'></th>
                        </tr>
                    </thead>
                    @foreach ($doituongtinhtrangs as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->doituongtt_ten }}</td>
                            <td>{{ $item->doituongtt_mota }}</td>
                            <td>{{ $item->GiaiDoanTruongThanh->giaidoantt_ten }}</td>
                            <td>
                                <form action="{{ route('doituongtinhtrangs.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info mt-1" href="{{ route('doituongtinhtrangs.show',$item->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>

                                    <a class="btn btn-primary mt-1" href="{{ route('doituongtinhtrangs.edit',$item->id) }}" ><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger mt-1"><i class="fa-solid fa-trash" title="xoá"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    {!! $doituongtinhtrangs->links() !!}

@endsection


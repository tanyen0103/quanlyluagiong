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
                <h3 class="m-0 font-weight-bold text-white">Bảng chỉ tiêu trong nhà</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('chitieutrongnhas.create') }}">Tạo mới</a>
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
                            <th>Giống</th>
                            <th>Gié C2</th>
                            <th>Độ rụng hạt</th>
                            <th>Màu sắc vỏ trấu</th>
                            <th>Dạng thóc</th>
                            <th>Màu sắc gạo</th>
                            <th>Trọng lượng 1000 hạt</th>
                            <th>Độ ẩm</th>
                            <th>Thơm</th>
                            <th>Đánh giá</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    @foreach ($chitieutrongnhas as $item)
                    <tbody>
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->Giong->giong_ten }}</td>
                            <td>{{ $item->chitieutrongnha_giec2 }}</td>
                            <td>{{ $item->chitieutrongnha_dorunghat }}</td>
                            <td>{{ $item->chitieutrongnha_msvotrau }}</td>
                            <td>{{ $item->chitieutrongnha_dangthoc }}</td>
                            <td>{{ $item->chitieutrongnha_mausacgao }}</td>
                            <td>{{ $item->chitieutrongnha_tl1000hat }}</td>
                            <td>{{ $item->chitieutrongnha_doam }}</td>
                            <td>{{ $item->chitieutrongnha_thom }}</td>
                            <td>{{ $item->chitieutrongnha_danhgia }}</td>
                            <td>
                                <form action="{{ route('chitieutrongnhas.destroy',$item->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('chitieutrongnhas.show',$item->id) }}">Chi tiết</a>

                                    <a class="btn btn-primary" href="{{ route('chitieutrongnhas.edit',$item->id) }}">Chỉnh sửa</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Xoá</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    {!! $chitieutrongnhas->links() !!}

@endsection

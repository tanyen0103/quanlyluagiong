@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card shadow mb-5 border-bottom-primary">
        {{-- Card header --}}
        <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
            <div class="">
                <h3 class="m-0 font-weight-bold text-white">Bảng tài khoản</h3>
            </div>
            <div class="">
                <a class="btn btn-light" href="{{ route('users.create') }}">Tạo mới</a>
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

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th width="160px"></th>
                    </tr>
                    @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class="text-dark badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-info mt-1" href="{{ route('users.show',$user->id) }}"><i class="fa-regular fa-eye" title="chi tiết"></i></a>
                                <a class="btn btn-primary mt-1" href="{{ route('users.edit',$user->id) }}"><i class="fa-solid fa-pen-to-square" title="chỉnh sửa"></i></a>
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                {!! Form::button('<i class="fa-solid fa-trash" title="xoá"></i>', ['type' => 'submit', 'class' => 'btn btn-danger mt-1', 'onclick' => "return confirmDelete()"]) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <a href="{{ route('users.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Xuất Excel</a>
    </div>
{!! $data->render() !!}
@endsection

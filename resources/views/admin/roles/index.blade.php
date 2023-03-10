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
            <h3 class="m-0 font-weight-bold text-white">Bảng quyền</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('roles.create') }}">Tạo mới</a>
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
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Chi tiết</a>
                        @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Chỉnh sửa</a>
                        @endcan
                        @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Xoá', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


{!! $roles->render() !!}


<p class="text-center text-primary"><small>Quản lý lúa giống</small></p>
@endsection

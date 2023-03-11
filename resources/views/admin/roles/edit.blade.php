@extends('layouts.app')


@section('content')
<style>
    .permission-list {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
    }

    .permission-list label {
        display: block;
    }
</style>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chỉnh sửa</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('roles.index') }}">Trở về</a>
        </div>
    </div>
    {{-- Card form roles --}}
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
        <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                    <label>
                        {{ Form::checkbox('select-all', null, null, array('class' => 'select-all')) }}
                        Chọn tất cả
                    </label>
                    <hr class="h-1 mt-0 bg-gradient-primary">
                    @foreach($permission as $key => $value)
                        @if(strpos($value->name, '-') !== false)
                            @php
                            $permissionParts = explode('-', $value->name);
                            $permissionPrefix = $permissionParts[0];
                            $permissionSuffix = $permissionParts[1];
                            @endphp
                            @if($key == 0 || strpos($permission[$key-1]->name, $permissionPrefix.'-') === false)
                            <div class="row">
                            @endif
                            <div class="col-md-3">
                            <label>
                                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}
                                {{-- {{ $permissionSuffix }} --}}
                            </label>
                            </div>
                            @if($key == count($permission)-1 || strpos($permission[$key+1]->name, $permissionPrefix.'-') === false)
                            </div>
                            @endif
                        @else
                            <div class="col-md-3">
                            <label class="border">
                                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}
                            </label>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 text-center m-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    {!! Form::close() !!}

</div>



<script>
    // Lấy tất cả các checkbox
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Lấy checkbox "Chọn tất cả"
    const selectAllCheckbox = document.querySelector('.select-all');

    // Xử lý sự kiện khi người dùng nhấp vào checkbox "Chọn tất cả"
    selectAllCheckbox.addEventListener('click', function() {
      checkboxes.forEach(function(checkbox) {
        checkbox.checked = selectAllCheckbox.checked;
      });
    });
</script>
@endsection


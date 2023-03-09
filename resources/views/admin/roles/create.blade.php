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
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>


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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            <label>
                {{ Form::checkbox('select-all', null, null, array('class' => 'select-all')) }}
                Chọn tất cả
            </label>
            <br/>
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
                        {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
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
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </div>
</div>
{!! Form::close() !!}
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

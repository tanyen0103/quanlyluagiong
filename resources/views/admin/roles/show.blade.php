@extends('layouts.app')

@section('content')
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Chi tiết</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('roles.index') }}">Trở về</a>
        </div>
    </div>
    <div class="row mt-1 d-flex justify-content-center">
        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
            <hr class="h-1 mt-0 bg-gradient-primary">
        </div>

        <div class="col-xs-11 col-sm-11 col-md-11">
            <div class="form-group">
                <strong>Permissions:</strong>
                <br/>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success m-2">{{ $v->name }},</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

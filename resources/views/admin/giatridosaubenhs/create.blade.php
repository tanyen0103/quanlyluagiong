@extends('layouts.app')

@section('content')
{{-- Nav Breadcrumb --}}
<div class="nav-breadcrumb bg-gray-100 text-lg">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{ route ('dashboard') }}" class="text-lg"><i class="fas fa-fw fa-house"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route ('giatridosaubenhs.index') }}">Giá trị đo sâu bệnh</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tạo mới</li>
        </ol>
    </nav>
</div>
<div class="card shadow mb-5 border-bottom-primary">
    {{-- Card header --}}
    <div class=" card-header bg-gradient-primary py-3 d-flex justify-content-between">
        <div class="">
            <h3 class="m-0 font-weight-bold text-white">Thêm mới</h3>
        </div>
        <div class="">
            <a class="btn btn-light" href="{{ route('giatridosaubenhs.index') }}">Trở về</a>
        </div>
    </div>
    <form action="{{ route('giatridosaubenhs.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf
         <div class="row mt-1 d-flex justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="chitieusaubenh_id">Giống chỉ tiêu sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                    <select id="chitieusaubenh_id" class="form-control custom-select @error('chitieusaubenh_id') is-invalid @enderror" name="chitieusaubenh_id" required autofocus>
                        <option value="">-- Chọn giống --</option>
                            @foreach($chitieusaubenh as $item)
                                <option value="{{ $item->id }}">{{ $item->Giong->giong_ten }}</option>
                            @endforeach
                    </select>
                    @error('chitieusaubenh_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="loaisaubenh_id">Loại sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
                    <select id="loaisaubenh_id" class="form-control custom-select @error('loaisaubenh_id') is-invalid @enderror" name="loaisaubenh_id" required autofocus>
                        <option value="">-- Chọn sâu bệnh --</option>
                            @foreach($loaisaubenh as $item)
                                <option value="{{ $item->id }}">{{ $item->loaisaubenh_ten }}</option>
                            @endforeach
                    </select>
                    @error('loaisaubenh_id')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2">
                <div class="form-group">
                    <label for="giatridosaubenh_giatri">Giá trị đo sâu bệnh <span class="text-danger font-weight-bold"></span></label>
                    <div id="dynamic-inputs">

                    </div>
                    @error('giatridosaubenh_giatri')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <button type="button" id="add-input" class="btn btn-primary mt-2">+</button>
                </div>
            </div>

            <div class="col-xs-10 col-sm-10 col-md-10 mr-2 ml-2 text-center m-2">
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var addInputButton = document.getElementById('add-input');
        var dynamicInputs = document.getElementById('dynamic-inputs');
        var inputCounter = 1;

        addInputButton.addEventListener('click', function() {
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('class', 'form-control mt-2  @error('giatridosaubenh_giatri') is-invalid @enderror');
            input.setAttribute('name', 'giatridosaubenh_giatri[]');
            dynamicInputs.appendChild(input);
            inputCounter++;
        });
    });
</script>
@endsection

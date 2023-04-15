@extends('layouts.app')

@section('content')
<style>
    .bg-login{
            background-image: url("{{ asset('public/home/images/bg-creadcrum-01-01.png') }}");
            background-repeat: no-repeat;
            background-size: 100% 100rem;
            background-color: #4e73df;
        }
</style>
<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card bg-login o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4">{{ __('ĐĂNG NHẬP') }}</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user
                                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                                placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback text-white" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user
                                                @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}"
                                                required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback text-white" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-light btn-user">
                                                {{ __('ĐĂNG NHẬP') }}
                                            </button>
                                        </div>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a href="mailto:tanyen0103@gmail.com" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Liên hệ với Gmail
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

@endsection

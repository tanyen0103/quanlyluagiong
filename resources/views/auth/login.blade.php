@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                            <div class="">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Vui lòng đăng nhập') }}</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user
                                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                                placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user
                                                @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}"
                                                required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('ĐĂNG NHẬP') }}
                                        </button>

                                        {{-- <div class="form-check d-flex justify-content-center">
                                            <div>
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div> --}}

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
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

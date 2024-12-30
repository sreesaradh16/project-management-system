@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')
<div class="page">
    <div class="">
        <div class="col col-login mx-auto">
            <div class="text-center">
                <img src="{{ asset('images/brand/logo.png')}}" class="header-brand-img" alt="">
            </div>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-6">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title">
                        Login
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required">
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control @error('email') is-invalid @enderror input100" value="{{ old('email') }}" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="zmdi zmdi-account" aria-hidden="true"></i>
                        </span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror input100" name="password" required autocomplete="current-password">
                        <i class="fa fa-eye" id="togglePassword" style="cursor: pointer; float:right; position: relative; right: 0.7rem; top: -28px;"></i>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                        </span>
                    </div> 

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn btn-primary">
                            Login
                        </button>
                    </div>
                    <div class="text-center pt-3">
                        <p class="text-dark mb-0">Not a member?<a href="{{route('register')}}" class="text-primary ml-1">Sign UP now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('#togglePassword').click(function() {
        const password = $('#password');
        const type = password.attr('type') === 'password' ? 'text' : 'password';
        password.attr('type', type);
        $(this).toggleClass('fa-eye-slash');
    });
</script>
@endpush
@extends('layouts.guest')

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="../assets/img/stisla-fill.svg" alt="logo" width="80"
                        class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span
                            class="font-weight-bold">{{ config('app.name') }}</span></h4>
                    <p class="text-muted">Before you get started, you must login.</p>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email or Username') }}</label>
                            <input id="email" type="text" class="form-control" name="email" tabindex="1"
                                :value="old('email')" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email or username
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                required autocomplete="current-password">
                            <div class="invalid-feedback">
                                please fill in your password
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                    id="remember_me">
                                <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            @if (Route::has('password.request'))
                                <a class="float-left mt-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                {{ __('Log in') }}
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Don't have an account? <a href="{{ route('register') }}">Create new one</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; {{ config('app.name') }} {{ date('Y') }}
                        <p>Made with 💙 by {{ config('app.creator') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="{{ asset('./img/login.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Welcome back, my friend!</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank"
                            href="https://unsplash.com/photos/ZVmKivW07EA">Ilia Usmanov</a> on <a class="text-light bb"
                            target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

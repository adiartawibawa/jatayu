@extends('layouts.guest')

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-2 min-vh-100 order-1 bg-white">
                <div class="p-4 m-3">
                    <img src="../assets/img/stisla-fill.svg" alt="logo" width="80"
                        class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span
                            class="font-weight-bold">{{ config('app.name') }}</span></h4>
                    <p class="text-muted">You must registered to get started</p>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                        @csrf

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <div class="invalid-feedback">
                                Please fill in your name
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" :value="old('email')"
                                required>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="d-block">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control pwstrength"
                                data-indicator="pwindicator" name="password" required autocomplete="new-password">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="d-block">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group text-small">
                            @if (App\Jatayu::hasTermsAndPrivacyPolicyFeature())
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="terms" id="terms">
                                    <label class="custom-control-label" for="terms">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" >' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" >' . __('Privacy Policy') . '</a>',
]) !!}
                                    </label>
                                </div>
                            @endif
                        </div>

                        <div class="form-group text-right">
                            <div class="float-left mt-3">
                                <a href="{{ route('login') }}"> Already registered ? </a>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                {{ __('Register Me') }}
                            </button>
                        </div>

                    </form>

                    <div class="text-center text-small">
                        Copyright &copy; {{ config('app.name') }} {{ date('Y') }}
                        <p>Made with 💙 by {{ config('app.creator') }}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-1 order-2 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="{{ asset('./img/register.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Nice you here, fellas!</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank"
                            href="https://unsplash.com/photos/R3rFY78bXVY">Bhaumik Kaji</a> on <a class="text-light bb"
                            target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

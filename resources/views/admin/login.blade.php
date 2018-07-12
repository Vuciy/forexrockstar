@extends('layouts.app')

@section('title', 'Login')
@section('content')

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="index.html">Home</a></li>
                    <li>Admin Login</li>
                </ul>
                <h1 class="white-text">Admin Log in</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Login -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-centered">
                <div class="login-form">
                    <h4>{{ __('Login') }}</h4>
                    <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                        <div class="form-group row">    
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group row">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="main-button icon-button">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /login -->

@include('includes.footer')

@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js/scrpts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.master')

@section('title-meta')
    <title>Custom Printed Packaging Boxes With Logo | {{ config('app.name') }} </title>
    <meta name="description"
        content="Get your custom Printed Packaging boxes with logo from us and attract as many customers you want by having cardboard boxes wholesale for your business!">
    <link rel="canonical" href="{{ config('app.url') }}" />
@endsection

@section('custom-css')
@endsection

@section('content')
    <!-- Body main wrapper start -->
    <div class="wrapper login">

        <!-- Start of header area -->
        @include('partials.header')
        <!-- End of header area -->

        <!--breadcumb area start -->
        {{-- <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Login Register</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="{{ route('index') }}">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div> --}}
        <!--breadcumb area end -->

        <!-- Account Area Start -->
        <div class="account-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('password.email') }}" class="login-side">
                            @csrf
                            <div class="login-reg">
                                <h3>Confirm Email</h3>
                                <div class="input-box mb-20">
                                    <label class="control-label">E-Mail</label>
                                    <input type="email" placeholder="E-Mail" value="" name="email"
                                        class="info @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="frm-action">
                                <div class="input-box tci-box">
                                    <a role="button" type="submit" onclick="$(this).closest('form').submit();"
                                        class="btn-def btn2">Login</a>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="forgotten forg">Forgotten
                                        Password</a>
                                @endif
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Account Area End -->

        <!-- footer area start-->
        @include('partials.footer')
        <!--footer area start-->



    </div>
    <!-- Body main wrapper end -->
@endsection

@section('custom-script')
@endsection

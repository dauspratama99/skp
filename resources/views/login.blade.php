@extends('layouts.auth')

@section('auth')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card">
                    @if (\Session::has('errors'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('errors') !!}</li>
                        </ul>
                    </div>
                    @endif
                    <div class="card-body p-5">
                        <div class="text-center d-lg-none">
                            <img src="svg/modulr.svg" class="mb-5" width="150" alt="Modulr Logo">
                        </div>
                        <h1>{{ __('Login') }}</h1>
                        <p class="text-muted">Sign In to your account</p>

                        <form action="{{ route('user.postlogin') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                        </svg>
                                    </span>
                                </div>
                                <input id="login" type="text" class="form-control" name="login" value=""
                                    placeholder="{{ __('nip') }}" required autofocus>

                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked">
                                            </use>
                                        </svg>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="{{ __('Password') }}" required>

                            </div>
                            <div class="input-group mb-3">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary px4">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none">
                    <div class="card-body text-center">
                        <div>
                            <img src="{{ ('assets/img/unand.png') }}" width="100" height="150" class="img-fluid"
                                alt="Responsive image">
                            <h2>{{ __('SISKP') }}</h2>
                            <p> Sistem Informasi Universitas Andalas</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

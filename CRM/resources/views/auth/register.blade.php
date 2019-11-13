{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Register') }}
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                {{ __('Name') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="name" autofocus="" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="email">
                                {{ __('E-Mail Address') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password">
                                {{ __('Password') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required="" type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="password-confirm">
                                {{ __('Confirm Password') }}
                            </label>
                            <div class="col-md-6">
                                <input autocomplete="new-password" class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 --}}
@extends('layouts.pass')
@section('title','Registrar ')
@section('locationfiles','')
@section('tipocss','register.css')
@section('classbody','vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column register-bg blank-page blank-page')
    
@section('content')
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="row" id="register-page">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
                    <form class="login-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">
                                    {{ __('Register') }}
                                </h5>
                                <p class="ml-4">
                                    Join to our community now !
                                </p>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    person_outline
                                </i>
                                <input id="name" name="name" type="text" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                                    <label class="center-align" for="name">
                                        {{ __('Name') }}
                                    </label>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                       
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    mail_outline
                                </i>
                                <input id="email" name="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    <label for="email">
                                        {{ __('E-Mail Address') }}
                                    </label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    lock_outline
                                </i>
                                <input id="password" name="password" type="password" class="@error('password') is-invalid @enderror">
                                    <label for="password">
                                        {{ __('Password') }}
                                    </label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    lock_outline
                                </i>
                                <input type="password" id="password-confirm" name="password_confirmation" required="">

                                    <label for="password-confirm">
                                        {{ __('Confirm Password') }}
                                    </label>
                                </input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <p class="margin medium-small">
                                    @if (Route::has('login'))
                                    <a href="{{ route('login') }}">
                                        {{ __('Already have an account? Login') }}
                                    </a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

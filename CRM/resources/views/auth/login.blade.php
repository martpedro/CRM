@extends('layouts.pass')
@section('title','Inicio de Sesión')
@section('locationfiles','')
@section('tipocss','login.css')
@section('classbody',' vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg blank-page blank-page')
    
@section('content')
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="row" id="login-page">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form action="{{ route('login') }}" method="POST" class="login-form">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">
                                    {{ __('Login') }}
                                </h5>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    person_outline
                                </i>
                                <input class="@error('email') is-invalid @enderror" id="email" name="email" required="" type="text" value="{{ old('email') }}">
                                    <label class="center-align " for="email">
                                        {{ __('E-Mail Address') }}
                                    </label>
                                </input>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">
                                    lock_outline
                                </i>
                                <input class="@error('password') is-invalid @enderror" name="password" id="password" type="password">
                                    <label for="password">
                                        {{ __('Password') }}
                                    </label>
                                </input>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1">
                                <p>
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                        <span>
                                           {{ __('Remember Me') }}
                                        </span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                {{-- <a class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-blue col s12" href="index-2.html">
                                    {{ __('Login') }}
                                </a> --}}
                                <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-blue col s12">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small">
                                     @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                </p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small">
                                    {{-- <a href="user-forgot-password.html">
                                        Forgot password ?
                                    </a> --}}
                                    @if (Route::has('password.request'))
                                        <a  href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
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

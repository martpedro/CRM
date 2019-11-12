@extends('layouts.pass')
@section('title','Inicio de Sesión')
    
@section('content')
            <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="row" id="login-page">
                        <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                            <form class="login-form">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <h5 class="ml-4">
                                            Sign in
                                        </h5>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">
                                            person_outline
                                        </i>
                                        <input id="username" type="text">
                                            <label class="center-align" for="username">
                                                Username
                                            </label>
                                        </input>
                                    </div>
                                </div>
                                <div class="row margin">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix pt-2">
                                            lock_outline
                                        </i>
                                        <input id="password" type="password">
                                            <label for="password">
                                                Password
                                            </label>
                                        </input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12 ml-2 mt-1">
                                        <p>
                                            <label>
                                                <input type="checkbox"/>
                                                <span>
                                                    Remember Me
                                                </span>
                                            </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" href="index-2.html">
                                            Login
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin medium-small">
                                            <a href="user-register.html">
                                                Register Now!
                                            </a>
                                        </p>
                                    </div>
                                    <div class="input-field col s6 m6 l6">
                                        <p class="margin right-align medium-small">
                                            <a href="user-forgot-password.html">
                                                Forgot password ?
                                            </a>
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
@extends('layouts.login')

@section('content')

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><section class="flexbox-container">
                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header no-border">
                                <div class="card-title text-xs-center">
                                    <img src="{{ asset('images/logo.png') }}" alt="branding logo" width="100">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Ingresar al administrador</span></h6>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input id="email" type="email" placeholder="Digita tu usuario" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg input-lg" name="email" value="{{ old('email') }}" required autofocus>
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback red" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input id="password" type="password" placeholder="Digita tu contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-lg input-lg" name="password" required>
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback red" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="form-group row">
                                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember" name="remember" id="remember">
                                                    <label for="remember-me"> Recuérdame</label>
                                                </fieldset>
                                            </div>
                                            <!--
                                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            </div>
                                            -->
                                        </fieldset>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Ingresar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection

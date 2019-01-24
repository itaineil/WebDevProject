@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <h2 id = "WelcomePage" class = "wow swing text-center" wow-delay = "1.5s" data-wow-iteration = "3" >Welcome to Development Support Network</h2> !-->
                <div class="card-header wow rubberBand" data-wow-iteration = "3">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right wow fadeInLeft" wow-delay="1.5s" id = "labelEmail">{{ __('E-Mail Address') }}</label><i class = "fa fa-envelope fa-2x"></i>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} wow fadeInLeft" name="email" value="{{ old('email') }}" required autofocus id= "textFieldEmail">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right wow fadeInLeft" wow-delay="1.8s" id = "labelPassword">{{ __('Password') }}</label><i class = "fa fa-key fa-2x"></i>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} wow fadeInLeft" name="password" required id = "textfieldPassword">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label wow bounceInDown" data- wow-delay="2.0s" for="remember" data-wow-iteration = "3s">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary wow bounceInDown">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link wow bounceInDown" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('htmlheader_title', 'alta de usuario')

@section('main-content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<section class="signup">
    <div class="container">
            <h2 class="form-title text-center text-primary">Modulo de alta al sistema</h2>
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">{{ __('Register') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="apePat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="apePat" type="text" class="form-control{{ $errors->has('apePat') ? ' is-invalid' : '' }}" name="apePat" value="{{ old('apePat') }}" placeholder="{{ __('Apellido paterno') }}" required autofocus>

                            @if ($errors->has('apePat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('apePat') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="apeMat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input id="apeMat" type="text" class="form-control{{ $errors->has('apeMat') ? ' is-invalid' : '' }}" name="apeMat" value="{{ old('apeMat') }}" placeholder="{{ __('Apellido materno') }}" required autofocus>

                        @if ($errors->has('apeMat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('apeMat') }}</strong>
                            </span>
                        @endif
                </div>

                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="Una contraseña válida es un conjuto de caracteres, donde cada uno consiste de una letra mayúscula o minúscula, o un dígito. La contraseña debe empezar con una letra y contener al menos un dígito" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                        </div>

                        <div class="form-group form-button">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    {{--  <a href="#" class="signup-image-link">Ya tengo una cuenta</a>  --}}
                </div>
            </div>
        </div>
        

    </section>
@endsection

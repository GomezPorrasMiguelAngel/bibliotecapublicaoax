@extends('layouts.app2')
@section('content')
<section class="signup">
        <div class="container">
                        <h2 class="form-title text-center text-primary">¡Bienvenidos al sistema!</h2>
            <div class="signup-content">
                    <div class="signin-image">
                            <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                            {{--  <a href="#" class="signup-image-link">Create an account</a>  --}}
                        </div>
                <div class="signup-form">
		    <h2 class="form-title">{{ __('Login') }}</h2>
                    <form method="POST" class="register-form" action="{{ route('login') }}">
                        @csrf
                          <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email "></i></label>

                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        
                            <div class="form-group">
                                <label for="password" class="zmdi zmdi-lock"></label>
    
                                <div>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                            <input id="remember-me" class="agree-term" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="label-agree-term" for="remember-me">
                                                    <span><span></span></span>{{ __('Remember Me') }}
                                            </label>
                                </div>

                        <div class="form-group form-button">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-justify" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


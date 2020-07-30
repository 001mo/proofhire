@extends('layouts.app')

@section('head_title')
<title>{{ __('ProofHire | Login') }}</title>
@endsection

@section('head_fonts')
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
@endsection

@section('head_css')
<link rel="stylesheet" href="{{ URL::asset('css/login.css')}}"/>
@endsection



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="login-content">
            <div class="login-header text-center">
                <h4>{{ __('sign in') }}</h4>
            
                <button class="btn-block"><img src="{{ URL::asset('assets/SVGs/social-media-icons/facebook-f.svg') }}"/> {{ __('Continue with facebook') }}</button>
                <button class="btn-block"><img src="{{ URL::asset('assets/SVGs/social-media-icons/google.svg') }}"/> {{ __('Continue with google') }}</button>
            </div>


            <div class="login-body align-items-center">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="input-group flex-nowrap">
                        <img src="{{ URL::asset('assets/SVGs/login-icons/user.svg') }}">
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Username or email address') }}"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group flex-nowrap">
                        <img src="{{ URL::asset('assets/SVGs/login-icons/password-lock-full.svg') }}">
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                            <a href="">{{ __('view') }}</a>
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            {{ __('keep me signed until i sign out') }}
                        </label>
                    </div>


                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info btn-block">{{ __('sign in') }}</button>
                    </div>
  

                    

                    @if (Route::has('password.request'))
                    <div class="form-group">
                        <a class="a-border" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                    @endif
                </form>
            </div>

            <div class="login-footer text-center">
                <p>{{ __('Not member a yet ? ') }}<a class="a-border" href="{{ url('register') }}">{{ __('sign up') }}</a></p>
            </div>
        </div>
    </div>
</div>
@endsection



@section('footer')
<footer>
    <div class="container-fluid">
        <div class="footer row col-md-12 justify-content-center">
            <div class="terms">    
                <ul class="list-unstyled">
                    <li class="list-item">
                        <a href="#!">{{ __('Terms of use') }}</a>
                    </li>
                    <li class="list-item">
                        <a href="#!">{{ __('Privacy & policy') }}</a>
                    </li>
                    <li class="list-item">
                        <a href="#!">{{ __('Cookies') }}</a>
                    </li>
                    <li class="list-item">
                        <a href="#!">{{ __('Site map') }}</a>
                    </li>
                    <li class="list-item">
                        <a href="#!">{{ __('Help') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
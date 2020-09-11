@extends('layouts.app')

@section('head_title')
<title>{{ __('signup | proofhire') }}</title>
@endsection

@section('head_css')
<link rel="stylesheet" href="{{ asset('css/signing.css') }}">
@endsection


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="signing-content">
            <!-- --------------------   SIGN UP ((HEADER)) AREA   ------------------- -->
            <div class="signing-header">
                <h4>{{ __('Sign up') }}</h4>

                <!-- SIGNIN WITH GOOGLE BUTTON -->
                <button class="btn-block">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path fill="#2196F3" 
                        d="M320,85.333h64c5.891,0,10.667-4.776,10.667-10.667v-64C394.667,4.776,389.891,0,384,0h-64
                            c-64.772,0.071-117.263,52.561-117.333,117.333V192H128c-5.891,0-10.667,4.776-10.667,10.667v64c0,5.891,4.776,10.667,10.667,10.667
                            h74.667v224c0,5.891,4.776,10.667,10.667,10.667h64c5.891,0,10.667-4.776,10.667-10.667v-224h74.667
                            c4.589-0.003,8.662-2.942,10.112-7.296l21.333-64c1.862-5.589-1.16-11.629-6.749-13.491c-1.084-0.361-2.22-0.546-3.363-0.547h-96
                            v-74.667C288,99.66,302.327,85.333,320,85.333z" />
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg> 
                    </span>
                    {{ __('Continue with facebook') }}
                </button>

                <!-- SIGNIN WITH FACEBOOK BUTTON -->
                <button class="btn-block pr-3">
                    <span>
                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m420.7 450.7c-44.4 37.5-101.999 61.3-164.7 61.3-93.3 0-175.201-51.4-219.6-126.4l16.622-76.622 73.678-13.678c17.1 55.199 68.699 95.7 129.3 95.7 29.399 0 56.7-9.3 79.2-25.8l70.8 10.8z"
                                    fill="#59c36a" />
                                <path
                                    d="m420.7 450.7-14.7-74.7-70.8-10.8c-22.5 16.5-49.801 25.8-79.2 25.8v121c62.701 0 120.3-23.8 164.7-61.3z"
                                    fill="#00a66c" />
                                <g id="Connected_Home_1_">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="m121 256c0 13.799 2.1 26.999 5.7 39.3l-90.3 90.3c-22.5-37.8-36.4-82.201-36.4-129.6 0-47.401 13.9-91.8 36.4-129.6l72.473 12.473 17.827 77.827c-3.6 12.299-5.7 25.499-5.7 39.3z"
                                                    fill="#ffda2d" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <path
                                    d="m512 256c0 77.999-36.099 147.9-91.3 194.7l-85.5-85.5c17.399-12.601 32.1-29.401 41.7-49.2h-120.9c-8.401 0-15-6.601-15-15v-90c0-8.401 6.599-15 15-15h236.8c7.2 0 13.5 5.099 14.7 12.299 3 15.601 4.5 31.8 4.5 47.701z"
                                    fill="#4086f4" />
                                <path
                                    d="m376.901 316c-9.6 19.799-24.302 36.599-41.7 49.2l85.499 85.5c55.201-46.8 91.3-116.7 91.3-194.7 0-15.901-1.5-32.1-4.501-47.701-1.199-7.2-7.5-12.299-14.7-12.299h-236.799v120z"
                                    fill="#4175df" />
                                <path
                                    d="m424.9 71.499c.3 4.2-1.5 8.101-4.2 11.1l-64.2 63.9c-5.099 5.4-13.499 6-19.499 1.5-23.702-17.699-51.602-26.999-81.001-26.999-60.601 0-112.2 40.499-129.3 95.7l-90.3-90.3c44.399-75 126.3-126.4 219.6-126.4 59.7 0 117.9 22 163.5 60.399 3.3 2.701 5.1 6.9 5.4 11.1z"
                                    fill="#ff641a" />
                                <path
                                    d="m337 147.999c6 4.501 14.399 3.9 19.499-1.5l64.2-63.9c2.701-2.999 4.501-6.899 4.2-11.1s-2.1-8.399-5.4-11.1c-45.599-38.399-103.799-60.399-163.499-60.399v121c29.399 0 57.299 9.3 81 26.999z"
                                    fill="#f03800" />
                            </g>
                        </svg>
                    </span>
                    {{ __('Continue with google') }}
                </button>

                <div class="or"><span>{{ __('or') }}</span></div>
            </div>

            
            
            <!-- --------------------   SIGN UP ((BODY)) AREA   ------------------- -->
            <div class="signing-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <!----------------------------- EMAIL INPUT AREA ----------------------->
                    <div class="form-group has-input">
                        <div class="input-group flex-nowrap">
                            <span>
                                <svg viewBox="0 0 512 512" focusable="false">
                                    <g><g><g>
                                    <path d="M486.4,59.733H25.6c-14.138,0-25.6,11.461-25.6,25.6v341.333c0,14.138,11.461,25.6,25.6,25.6h460.8
                                        c14.138,0,25.6-11.461,25.6-25.6V85.333C512,71.195,500.539,59.733,486.4,59.733z M494.933,426.667
                                        c0,4.713-3.82,8.533-8.533,8.533H25.6c-4.713,0-8.533-3.82-8.533-8.533V85.333c0-4.713,3.82-8.533,8.533-8.533h460.8
                                        c4.713,0,8.533,3.82,8.533,8.533V426.667z"/>
                                    <path d="M470.076,93.898c-2.255-0.197-4.496,0.51-6.229,1.966L266.982,261.239c-6.349,5.337-15.616,5.337-21.965,0L48.154,95.863
                                        c-2.335-1.96-5.539-2.526-8.404-1.484c-2.865,1.042-4.957,3.534-5.487,6.537s0.582,6.06,2.917,8.02l196.864,165.367
                                        c12.688,10.683,31.224,10.683,43.913,0L474.82,108.937c1.734-1.455,2.818-3.539,3.015-5.794c0.197-2.255-0.51-4.496-1.966-6.229
                                        C474.415,95.179,472.331,94.095,470.076,93.898z"/>
                                    <path d="M164.124,273.13c-3.021-0.674-6.169,0.34-8.229,2.65l-119.467,128c-2.162,2.214-2.956,5.426-2.074,8.392
                                        c0.882,2.967,3.301,5.223,6.321,5.897c3.021,0.674,6.169-0.34,8.229-2.65l119.467-128c2.162-2.214,2.956-5.426,2.074-8.392
                                        C169.563,276.061,167.145,273.804,164.124,273.13z"/>
                                    <path d="M356.105,275.78c-2.059-2.31-5.208-3.324-8.229-2.65c-3.021,0.674-5.439,2.931-6.321,5.897
                                        c-0.882,2.967-0.088,6.178,2.074,8.392l119.467,128c3.24,3.318,8.536,3.442,11.927,0.278c3.391-3.164,3.635-8.456,0.549-11.918
                                        L356.105,275.78z"/>
                                        </g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </span>

                            <span class="input-label">{{ __('Email or username') }}</span>
                            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email">
                        </div>
                        @error('email')
                        <div class="invalid-message">
                            <span class="err-sign">
                                <i class="fas fa-exclamation-circle"></i>
                            </span>
                            <span class="err-message">
                                {{ $message }}
                            </span>
                        </div>
                        @enderror
                    </div>
                    


                    <!---------------------- PASSWORD INPUT AREA ---------------------->
                    <div class="form-group has-input">
                        <div class="input-group flex-nowrap">
                            <span>  
                                <svg focusable="false" viewBox="0 0 448 512">
                                    <path fill="#002333"
                                        d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                                    </path>
                                </svg>
                            </span>
                            
                            <span class="input-label">{{ __('Password') }}</span>

                            <input type="password" id="password" class="form-control" name="password" autocomplete="off">

                            <button type="button" id="eyes">
                                <span>
                                    <svg id="eye-slash" focusable="false" viewBox="0 0 640 512">
                                    <path fill="#505050" 
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                    </svg>
                                </span>
                                
                                <span>
                                    <svg id="eye" focusable="false" class="display-none" viewBox="0 0 576 512">
                                        <path fill="#008cff"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        @error('password')
                        <div class="invalid-message">
                            <span class="err-sign">
                                <i class="fas fa-exclamation-circle"></i>
                            </span>
                            <span class="err-message">
                                {{ $message }}
                            </span>
                        </div>
                        @enderror
                    </div>



                    <div class="form-group text-center">
                        <button id="submit" type="submit" class="btn btn-info btn-block">{{ __('Create an account') }}</button>
                    </div>

                    <div class="form-group text-left check-policy">
                        {{ __('By creating an accouny you\'ll accept all') }}<br><a target="_blank" href="https://google.com">{{ __(' our terms of use, and policy') }}</a>
                    </div>
                </form>
            </div>



            <!-- --------------------   SIGN UP ((BODY)) AREA   ------------------- -->
            <div class="signing-footer">
                <p>{{ __('Already member ? ') }}<a class="a-border" href="{{ url('login') }}">{{ __('Login') }}</a></p>
            </div>
        </div>
    </div>
</div>
@endsection



@section('footer')
<footer>
    <div class="container-fluid">
        <div class="footer row col-md-12 mt-4 justify-content-center">
            <div id="terms" class="terms">
                <ul id="list-unstyled" class="list-unstyled">
                    <li class="list-item">
                        <a href="#!">{{ __('Terms of use')}}</a>
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

@section('external_javascript')
<script src="{{ asset('js/signing.js') }}"></script>
@endsection
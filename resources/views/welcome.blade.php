@extends('layouts.app')

@section('head_title','welocme screen')

@section('head_css')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome/portfolio.css') }}">
<link rel="stylesheet" href="{{ asset('css/welcome/timeline.css') }}">
@endsection



@section('navbar')
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <!---------------------- BRADN LOGO -------------------->
        <a class="navbar-brand js-scroll-trigger" href="#top">
            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path fill="#ff0077"
                    d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z">
                </path>
            </svg>
        </a>
        <!-- COLLAPSE BUTTON -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars ml-1"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link nav-btn btn btn-outline-secondary js-scroll-trigger" href="{{ url('/login') }}">login</a></li>
                <li class="nav-item"><a class="nav-link nav-btn btn btn-primary js-scroll-trigger" href="{{ url('/register') }}">sign up</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection



<!-------------------------------------- CONTENT ------------------------------------->
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Get Started</a>
    </div>
</header>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>


<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2012</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2014</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>Be Part<br />Of Our<br />Story!</h4>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection


@section('footer')
<footer class="page-footer">
    <div class="container-fluid">
        <div class="header row">

            <!--------------- PRODUCTS AND SOLUTIONS ---------->
            <div class="column col-md-4 mx-auto quick-access">
                <h6 class="font-weight-bold">{{ __('products & solutions') }}</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">{{ __('Skills Proof') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Live Interviews') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Video Interviews') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Sort Candidates') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Safe Money & Time') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Zapier Integration') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('APIs') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Pricing') }}</a>
                    </li>
                </ul>
            </div>

            <hr class="bg-white clearfix w-100 d-md-none">

            <!--------------- COMPANY ------------->
            <div class="column col-md-4 mx-auto quick-access">
                <h6 class="font-weight-bold">{{ __('company') }}</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">{{ __('About') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Clients') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Careers') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Why ProofHire') }}</a>
                    </li>
                    <li>
                        <a href="#!">{{ __('Contact US') }}</a>
                    </li>
                </ul>
            </div>

            <hr class="bg-white clearfix w-100 d-md-none">

            <div class="column col-md-4 mx-auto">

                <div class="brand-logo mb-5 col-md-12 text-center">
                    <a href="{{ url('/') }}">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path fill="#ff0077"
                                d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="social-media row col-md-12 justify-content-center">
                    <h3 class="font-weight-bold text-center">{{ __('Folow us') }}</h3>
                    <ul class="list-unstyled text-center">
                        <li>
                            <a target="_blank" href="https://www.facebook.com/proofhire">
                                <svg viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="#4a7aff"/><path d="m267.234375 511.738281c136.171875-5.878906 244.765625-118.121093 244.765625-255.738281 0-.996094-.027344-1.988281-.039062-2.984375l-177.699219-177.703125-190 198.59375 105.566406 105.566406-48.675781 66.183594zm0 0" fill="#0053bf"/>
                                    <path d="m334.261719 75.3125v57.96875s-66.554688-9.660156-66.554688 33.277344v42.9375h60.113281l-7.511718 65.480468h-52.601563v170.679688h-66.554687v-170.679688l-56.894532-1.074218v-64.40625h55.820313v-49.378906s-3.683594-73.457032 68.703125-86.949219c30.058594-5.605469 65.480469 2.144531 65.480469 2.144531zm0 0" fill="#fff"/>
                                    <path d="m334.261719 133.28125v-57.96875s-35.421875-7.75-65.480469-2.144531c-4.695312.875-9.0625 2.007812-13.136719 3.347656v369.140625h12.0625v-170.679688h52.597657l7.515624-65.480468h-60.113281s0 0 0-42.9375 66.554688-33.277344 66.554688-33.277344zm0 0" fill="#dce1eb"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.twitter.com/proofhire">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#03A9F4;" d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                        c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                        c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                        c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                        c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                        c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                        C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                        C480.224,136.96,497.728,118.496,512,97.248z"/>
                                    <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/proofhire">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="42.966156268" x2="469.0337477" y1="469.0296477168"
                                        y2="42.9620562848">
                                        <stop offset="0" stop-color="#ffd600" />
                                        <stop offset=".5" stop-color="#ff0100" />
                                        <stop offset="1" stop-color="#d800b9" />
                                    </linearGradient>
                                    <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="163.0429956456" x2="348.9539083464" y1="348.9538083312"
                                        y2="163.0428956304">
                                        <stop offset="0" stop-color="#ff6400" />
                                        <stop offset=".5" stop-color="#ff0100" />
                                        <stop offset="1" stop-color="#fd0056" />
                                    </linearGradient>
                                    <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="370.9291325432" x2="414.3727849912" y1="141.0676714336"
                                        y2="97.6240189856">
                                        <stop offset="0" stop-color="#f30072" />
                                        <stop offset="1" stop-color="#e50097" />
                                    </linearGradient>
                                    <path
                                        d="m510.460938 150.453125c-1.246094-27.25-5.574219-45.859375-11.902344-62.140625-6.425782-17.082031-16.503906-32.554688-29.527344-45.34375-12.785156-13.023438-28.261719-23.105469-45.34375-29.535156-16.285156-6.324219-34.890625-10.648438-62.140625-11.886719-27.300781-1.25-36.023437-1.546875-105.546875-1.546875s-78.246094.296875-105.546875 1.539062c-27.25 1.246094-45.855469 5.574219-62.140625 11.902344-17.082031 6.425782-32.554688 16.503906-45.34375 29.527344-13.023438 12.785156-23.105469 28.257812-29.535156 45.339844-6.324219 16.285156-10.648438 34.894531-11.886719 62.140625-1.25 27.304687-1.546875 36.023437-1.546875 105.546875 0 69.527344.296875 78.25 1.546875 105.550781 1.242187 27.246094 5.570313 45.855469 11.898437 62.140625 6.425782 17.078125 16.503907 32.554688 29.527344 45.339844 12.785156 13.023437 28.261719 23.101562 45.34375 29.527344 16.28125 6.332031 34.890625 10.65625 62.140625 11.902343 27.304688 1.246094 36.023438 1.539063 105.546875 1.539063 69.523438 0 78.246094-.292969 105.546875-1.539063 27.25-1.246093 45.855469-5.570312 62.140625-11.902343 34.386719-13.296876 61.570313-40.480469 74.867188-74.867188 6.332031-16.285156 10.65625-34.894531 11.902344-62.140625 1.242187-27.304687 1.539062-36.023437 1.539062-105.546875 0-69.527344-.296875-78.246094-1.539062-105.546875zm-46.082032 208.996094c-1.136718 24.960937-5.308594 38.515625-8.8125 47.535156-8.613281 22.328125-26.257812 39.972656-48.585937 48.585937-9.019531 3.503907-22.574219 7.675782-47.535157 8.8125-26.988281 1.234376-35.085937 1.492188-103.445312 1.492188-68.363281 0-76.457031-.257812-103.449219-1.492188-24.957031-1.136718-38.511719-5.308593-47.535156-8.8125-11.117187-4.105468-21.175781-10.648437-29.433594-19.152343-8.503906-8.257813-15.046875-18.3125-19.152343-29.433594-3.503907-9.019531-7.675782-22.574219-8.8125-47.535156-1.230469-26.992188-1.492188-35.089844-1.492188-103.445313 0-68.359375.261719-76.453125 1.492188-103.449218 1.140624-24.960938 5.308593-38.515626 8.8125-47.535157 4.105468-11.121093 10.652343-21.179687 19.152343-29.4375 8.257813-8.503906 18.316407-15.046875 29.4375-19.148437 9.019531-3.507813 22.574219-7.675782 47.535157-8.816406 26.992187-1.230469 35.089843-1.492188 103.445312-1.492188h-.003906c68.355468 0 76.453125.261719 103.449218 1.496094 24.960938 1.136718 38.511719 5.308594 47.535157 8.8125 11.117187 4.105468 21.175781 10.648437 29.433593 19.148437 8.503907 8.257813 15.046876 18.316407 19.148438 29.4375 3.507812 9.019531 7.679688 22.574219 8.816406 47.535157 1.230469 26.992187 1.492188 35.089843 1.492188 103.445312 0 68.359375-.257813 76.453125-1.492188 103.449219zm0 0"
                                        fill="url(#a)" />
                                    <path
                                        d="m255.996094 124.539062c-72.601563 0-131.457032 58.859376-131.457032 131.460938s58.855469 131.457031 131.457032 131.457031c72.605468 0 131.460937-58.855469 131.460937-131.457031s-58.855469-131.460938-131.460937-131.460938zm0 216.792969c-47.125-.003906-85.332032-38.207031-85.328125-85.335937 0-47.125 38.203125-85.332032 85.332031-85.332032 47.128906.003907 85.332031 38.207032 85.332031 85.332032 0 47.128906-38.207031 85.335937-85.335937 85.335937zm0 0"
                                        fill="url(#b)" />
                                    <path
                                        d="m423.371094 119.347656c0 16.964844-13.753906 30.71875-30.71875 30.71875-16.96875 0-30.722656-13.753906-30.722656-30.71875 0-16.96875 13.753906-30.722656 30.722656-30.722656 16.964844 0 30.71875 13.753906 30.71875 30.722656zm0 0"
                                        fill="url(#c)" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.youtube.com/channel/UCfk6DKzhfuyidhZEfefwaPg">
                                <svg viewBox="0 -77 512.00213 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00" />
                                    <path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <hr class="bg-white clearfix w-100 mx-2">
        </div>



        <!--------------------- FOOTER OF PAGE FOOTER ------------------->
        <div class="footer row py-2">

            <div class="language col-md-2">
                <select name="language" id="language">
                    <option value="English">English</option>
                    <option value="Español">Español</option>
                    <option value="中文">简体中文</option>
                    <option value="Deutsche">Deutsche</option>
                    <option value="Française">Française</option>
                </select>
            </div>

            <div class="column col-md-10 text-md-right text-sm-left">
                <div class="terms">
                    <ul id="terms"class="list-unstyled">
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


                <div id="copyright" class="copyright">
                    <p>© {{ __('ProofHire Copyright ') }} {{ date('Y') }} {{ __('. All rights reserved .') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection



@section('external_javascript')
<script src="{{ asset('js/welcome/navbar.js') }}"></script>
@endsection
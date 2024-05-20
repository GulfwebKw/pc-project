<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->title }} @hasSection('title')  | @yield("title") @endif</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield("head")
    <!--=====CSS LINK=======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/modal-video.min.css') }}">
    <link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/responsive.css') }}">


    <!--=====FAV-ICoN=======-->
    <link rel="shortcut icon" href="{{ asset('storage/'.$setting->logo) }}"/>
    <!--=====JQUERY=======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
    <script src="{{ asset('assets/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js') }}"></script>
</head>
<body class="about">

<!--=====preloader START=======-->
<div id="pre-load">
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="loader-icon"><img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ $setting->title }}"></div>
        </div>
    </div>
</div>
<!--=====preloader end=======-->

<!--=====progress START=======-->

<div class="paginacontainer">

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">

            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

</div>

<!--=====progress END=======-->

<!--=====HEADER =======-->
<header class="header about-bg d-none d-lg-block">
    <div class="header-area header header-sticky" id="header">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('storage/'.$setting->logo) }}" height="80" alt="{{ $setting->title }}">
                            </a>
                        </div>
                        <div class="main-menu-ex homepage4 main-menu-ex7">
                            <ul>
                                <li @if(request()->routeIs('home'))  class="active" @endif>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li @if(request()->routeIs('page'))  class="active" @endif>
                                    <a class="font-ks font-16 weight-500 color" href="#">
                                        About us <span><i class="fa-solid fa-angle-down"></i></span>
                                    </a>
                                    <ul class="dropdown-padding">
                                        @foreach($navbar_pages as $navbar_page)
                                        <li>
                                            <a href="{{ route('page' , ['Page' => $navbar_page->slug]) }}" class="font-ks font-16 weight-500 color">{{ $navbar_page->title }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li @if(request()->routeIs('infrastructures'))  class="active" @endif>
                                    <a class="font-ks font-16 weight-500 color" href="{{ route('infrastructures') }}">
                                        Industries <span><i class="fa-solid fa-angle-down"></i></span>
                                    </a>
                                    <ul class="dropdown-padding">
                                        @foreach($navbar_infrastructures as $navbar_infrastructure)
                                            <li>
                                                <a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}" class="font-ks font-16 weight-500 color">
                                                    {{ $navbar_infrastructure->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li @if(request()->routeIs('services'))  class="active" @endif>
                                    <a class="font-ks font-16 weight-500 color" href="{{ route('services') }}">Services</a>
                                    <ul class="dropdown-padding">
                                        @foreach($navbar_services as $navbar_service)
                                            <li>
                                                <a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}" class="font-ks font-16 weight-500 color">
                                                    {{ $navbar_service->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li @if(request()->routeIs('posts'))  class="active" @endif>
                                    <a class="font-ks font-16 weight-500 color" href="{{ route('posts') }}">
                                        News and Articles
                                    </a>
                                </li>
                                <li><a href="#" class="font-ks font-16 weight-500 color">Contact us <span><i class="fa-solid fa-angle-down"></i></span></a>
                                    <ul>
                                        <li><a href="career.html" class="font-ks font-16 weight-500 color">Careers</a></li>
                                        <li><a href="{{ route('contactUs') }}" class="font-ks font-16 weight-500 color">Contact us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="contact-3 d-lg-block d-none">
                            <div class="shecdule-btn1">
                                <a href="contact1.html" class="font-ks font-16 lineh-16 color weight-700 shedule-btn2">Schedule Consulation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--===== HEADER END=======-->

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-4 d-block d-lg-none homepagesmall">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('storage/'.$setting->logo) }}" height="60" alt="{{ $setting->title }}"></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar">
    <div class="logoicons-area">
        <div class="logos">
            <img src="{{ asset('storage/'.$setting->logo) }}" height="60" alt="{{ $setting->title }}">
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav">

        <ul class="mobile-nav-list">
            <li @if(request()->routeIs('home'))  class="active" @endif >
                <a href="{{ route('home') }}" class="font-ks font-16 weight-500 color">Home </a>
            </li>
            <li @if(request()->routeIs('page'))  class="active" @endif>
                <a class="font-ks font-16 weight-500 color" href="#">
                    About us
                </a>
                <ul class="sub-menu">
                    @foreach($navbar_pages as $navbar_page)
                        <li>
                            <a href="{{ route('page' , ['Page' => $navbar_page->slug]) }}" class="font-ks font-16 weight-500 color-1">{{ $navbar_page->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li @if(request()->routeIs('infrastructures'))  class="active" @endif>
                <a class="font-ks font-16 weight-500 color" href="{{ route('infrastructures') }}">
                    Industries
                </a>
                <ul class="sub-menu">
                    @foreach($navbar_infrastructures as $navbar_infrastructure)
                        <li>
                            <a href="{{ route('infrastructure' , ['Infrastructure' => $navbar_infrastructure->slug]) }}" class="font-ks font-16 weight-500 color-1">
                                {{ $navbar_infrastructure->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li @if(request()->routeIs('services'))  class="active" @endif>
                <a class="font-ks font-16 weight-500 color" href="{{ route('services') }}">
                    Services
                </a>
                <ul class="sub-menu">
                    @foreach($navbar_services as $navbar_service)
                        <li>
                            <a href="{{ route('service' , ['Service' => $navbar_service->slug]) }}" class="font-ks font-16 weight-500 color">
                                {{ $navbar_service->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li @if(request()->routeIs('posts'))  class="active" @endif>
                <a class="font-ks font-16 weight-00 color" href="{{ route('posts') }}">
                    News and Articles
                </a>
            </li>
            <li><a href="#" class="font-ks font-16 weight-00 color">Contact us</a>
                <ul class="sub-menu">
                    <li><a href="career.html" class="font-ks font-16 weight-500 color">Career </a></li>
                    <li><a href="{{ route('contactUs') }}" class="font-ks font-16 weight-500 color">Contact us </a></li>
                </ul>
            </li>
        </ul>
        <div class="allmobilesection">
            <a href="#" class="font-ks font-18 lineh-18 weight-700 color mobilemenubtn">Get Started</a>
            <div class="single-footer single-footer-menu single-footer4">
                <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Contact Info</h3>
                <div class="footer4-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <img src="{{ asset('assets/images/icons/phone5.svg') }}" alt="">
                        </div>
                        <div class="contact-info-text">
                            <a href="tel:{{ str_replace(' ', '' , $setting->phone) }}" class="font-ks font-16 lineh-26 weight-500 color-21">{{ $setting->phone }}</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <img src="{{ asset('assets/images/icons/email4.svg') }}" alt="">
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:{{ $setting->email }}" class="font-ks font-16 lineh-26 weight-500 color-21">{{ $setting->email }}</a>
                        </div>
                    </div>

                    <div class="single-footer single-footer-menu single-footer4">
                        <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Our Location</h3>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <img src="{{ asset('assets/images/icons/location2.png') }}" alt="">
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:{{ $setting->email }}" class="font-ks font-16 lineh-26 weight-500 color-21">{{ $setting->officeAddress }}</a>
                            </div>
                        </div>

                    </div>
                    <div class="single-footer single-footer-menu single-footer4">
                        <h3 class="font-ks font-24 lineh-24 weight-600 color margin-b margin-t24">Social Links</h3>

                        <div class="social social4-menu social4">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Linked in" href="#">
                                        <svg class="svg-inline--fa fa-facebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z"></path></svg>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Facebook" href="#">
                                        <svg class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path></svg>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="Instagram" href="#">
                                        <svg class="svg-inline--fa fa-youtube" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.7 124.1c-6.281-23.65-24.79-42.28-48.28-48.6C458.8 64 288 64 288 64S117.2 64 74.63 75.49c-23.5 6.322-42 24.95-48.28 48.6-11.41 42.87-11.41 132.3-11.41 132.3s0 89.44 11.41 132.3c6.281 23.65 24.79 41.5 48.28 47.82C117.2 448 288 448 288 448s170.8 0 213.4-11.49c23.5-6.321 42-24.17 48.28-47.82 11.41-42.87 11.41-132.3 11.41-132.3s0-89.44-11.41-132.3zm-317.5 213.5V175.2l142.7 81.21-142.7 81.2z"></path></svg>
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" title="TikTok" href="#">
                                        <svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!--===== Mobile header end=======-->

@hasSection('breadcrumb')
    <!--===== WElCOME STARTS=======-->
    <div class="welcomeabout-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcomeaboiut2 text-center">
                    <h1 class="font-lora font-60 lineh-64 weight-500 color margin-b24">@yield("title")</h1>
                    <p class="font-20 weight-500 font-ks lineh-20 color">
                        <a href="{{ route('home') }}" class="color">Home</a>
                        @yield("breadcrumb")
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--===== WElCOME END=======-->
@endif

@hasSection('body')
    @yield("body")
@endif




@hasSection('footerConcat')
    <!--===== CTA STARST=======-->
    <div class="cta5-section-area section-padding4">
        <img src="{{ asset('assets/images/elementor/elementor72.png') }}" alt="" class="elementors72">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta5-auhtor6-area">
                        <h1 class="font-lora font-48 lineh-52 color weight-600 margin-b text-capitalize">Get expert Law advice on criminal strategies</h1>
                        <p class="font-ks font-16 lineh-26 weight-500 color-21">We believe that informed clients make better Law decisions. As part of our service, we'll provide educational resources and workshops to help.</p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="cta5-btn5-sexction">
                        <a href="{{ route('contactUs') }}" class="theme6-btn6 bakgrnd5 font-ks lineh-16 weight-700 color font-16">Get Law Advice <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        <a href="{{ route('contactUs') }}" class="theme6-btn6 backgrnd6 font-ks lineh-16 weight-700 color-29 font-16">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/elementor/elementor72.png') }}" alt="" class="elementors73">
    </div>
@endif



<!--===== FOOTER STARTS=======-->
<div class="footer4-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contcat5-section5-area section-padding15">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="contact5-logo5-text">
                                <img src="{{ asset('storage/'.$setting->logo) }}"  alt="{{ $setting->title }}">
                                <div class="icon-social-links mt-4">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="ml1"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        <li><a href="#" class="ml1"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#" class="ml1"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="about-5-links">
                                <h1 class="font-20 font-lora weight-600 lineh-20 color">Quick Link</h1>
                                <ul>
                                    <li><a href="{{ route('home') }}" class="font-ks font-16 lineh-16 weight-500 color32 d-inline-block margin-t32">Home</a></li>
                                    @if($navbar_pages->first())
                                        <li><a href="{{ route('page' , ['Page' => $navbar_pages->first()->slug]) }}" class="font-ks font-16 lineh-16 weight-500 color32 margin-t d-inline-block">{{ $navbar_pages->first()->title }}</a></li>
                                    @endif
                                    <li><a href="{{ route('infrastructures') }}" class="font-ks font-16 lineh-16 weight-500 color32 margin-t d-inline-block">Industries</a></li>
                                    <li><a href="{{ route('services') }}" class="font-ks font-16 lineh-16 weight-500 color32 margin-t d-inline-block">Services</a></li>
                                    <li><a href="{{ route('posts') }}" class="font-ks font-16 lineh-16 weight-500 color32 margin-t d-inline-block">News and Articles</a></li>
                                    <li><a href="{{ route('contactUs') }}" class="font-ks font-16 lineh-16 weight-500 color32 margin-t d-inline-block">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="contact-footer heightleft">
                                <h1 class="font-20 color lineh-20 font-lora margin-b24 weight-600">Contact Us</h1>
                                <div class="email4">
                                    <img src="{{ asset('assets/images/icons/email4.svg') }}" alt="">
                                    <a href="mailto:{{ $setting->email }}" class="font-16 lineh-24 color32 weight-400 font-ks">{{ $setting->email }}</a>
                                </div>
                                <span class="location-fooetr ">
                                    <img src="{{ asset('assets/images/icons/location2.png') }}" alt="" class="heightwidth">
                                    <a href="#" class="font-16 font-ks lineh-26 weight-500 color32 margin-t">{{ $setting->officeAddress }}</a>
                                </span>
                                <div class="email4 margin-t">
                                    <img src="{{ asset('assets/images/icons/phone5.svg') }}" alt="">
                                    <a href="tel:{{ str_replace(' ', '' , $setting->phone) }}" class="font-16 lineh-24 color32 weight-400 font-ks">{{ $setting->phone }}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="contactcta5-form">
                                <div class="contact6-ctafrom">
                                    <h1 class="font-20 font-lora weight-600 lineh-20 color">Subscribe Our Newsletter</h1>
                                    <form>
                                        <input type="text" placeholder="Enter Your email">
                                        <div class="contact5-btn15">
                                            <button class="font-ks font-16 lineh-16 weight-700 color contcat6" type="submit">Submit Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border10"></div>
                <div class="copyright6 text-center">
                    <p class="font-ks lineh-26 weight-500 font-16 color32">© Copyright {{ now()->format('Y') }} {{ $setting->title }}, All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/elementor/elementor72.png') }}" alt="" class="elementors73">
</div>
<!--===== FOOTER END=======-->

<!--=====JS=======-->
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.bundle.js') }}"></script>
<script src="{{ asset('assets/js/plugins/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counter.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.lineProgressbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/propper.min.js') }}"></script>
<script src="{{ asset('assets/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/tippy.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
<script src="{{ asset('assets/js/plugins/main.js') }}"></script>
@yield("footerScript")
</body>
</html>

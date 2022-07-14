<!DOCTYPE html>
<html lang="en">

<head>

    <title>E-Carnival | Book Fair</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/vendor/flaticon/font/flaticon.css">
    {{-- <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css" /> --}}
    <link rel="stylesheet" href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    {{-- <link rel="stylesheet" href="/assets/vendor/animate.css/animate.css"> --}}
    <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css">

    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="https://kit.fontawesome.com/e3488c8060.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/assets/img/E_cellLogo.png" type="image/png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-MHM1L61MVH"></script> --}}
    {{-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MHM1L61MVH');
    </script> --}}
</head>

<body>

    <div class="masthead">
        <div class="container pt-3 pt-md-4 pb-3 pb-md-5">
            <div class="d-flex align-items-center position-relative flex-wrap">
                <div class="offcanvas-toggler mr-5">
                    <a id="sidebarNavToggler2" href="javascript:;" role="button"
                        class="cat-menu target-of-invoker-has-unfolds" aria-controls="sidebarContent2"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2"
                        data-unfold-type="css-animation" data-unfold-overlay="{
                        &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                        &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                        &quot;animationSpeed&quot;: 100
                    }" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                        data-unfold-duration="100">
                        <svg width="20px" height="18px">
                            <path fill-rule="evenodd" fill="rgb(255,255,255)"
                                d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z"></path>
                            <path fill-rule="evenodd" fill="rgb(255,255,255)"
                                d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z"></path>
                            <path fill-rule="evenodd" fill="rgb(255,255,255)"
                                d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z"></path>
                        </svg>
                    </a>
                </div>
                <div class="site-branding pr-7">
                    <a href="/" class="d-block mb-1">
                        <div class="flex-horizontal">
                            <img src="/assets/images/logo_Ecarnival.png" alt="" style=" height: 76px; width: 250px; ">
                        </div>
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0" id="searchbar">
                        <div class="input-group input-group-borderless w-100 searchBar">
                            <input type="text" class="form-control bg-gray-200 bg-focus__1" style="background-color: rgb(251 242 232);
                                border-bottom-left-radius: 49px; border-top-left-radius: 49px; flex:0; min-width: 235px; background-color: #252158;
                                " placeholder="Search for books by keyword" id="keyword" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2 bg-color-nav" style=" z-index:456;    border-radius: 42px;
                                position: relative; z-index:19;
                                left: -32px; background:linear-gradient(to right, #8057a4,#6953a3);" id="submit"><i
                                        class="mx-1 glph-icon flaticon-loupe text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center mt-lg-3 mt-xl-0">

                    <a id="sidebarNavToggler" href="javascript:;" role="button" aria-controls="sidebarContent"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                        data-unfold-type="css-animation" data-unfold-overlay="{
                            &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                            &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                            &quot;animationSpeed&quot;: 500
                        }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
                        data-unfold-duration="500" class="target-of-invoker-has-unfolds">
                        <div class="d-flex align-items-center text-white font-size-2 text-lh-sm">
                            <i class="flaticon-user font-size-4 text-white"></i>
                            <div class="ml-2 d-none d-lg-block" style="text-align:center;">
                                @auth
                                    <span class="text-secondary-white-1080 font-size-3">{{ Auth::user()->name }}</span>
                                    <form method="post" action="/logout">
                                        @csrf
                                        <button
                                            style="background-image: linear-gradient(to right,#2b6fa2,#54479b); border:0; height:40px; padding:2px 20px; border-radius:20px;">
                                            <div class="text-secondary-white-100 font-size-2 color-text-1" id="logout">
                                                Logout</div>
                                        </button>
                                    </form>
                                @else
                                    <a href="/signin"><span class="font-size-3 color-text-1 text-white-1"
                                            style="color: white!important;">Sign
                                            In/Register</span></a>
                                    {{-- <div class="font-size-4 " style="color: white!important;">My Account</div> --}}
                                @endauth
                            </div>
                        </div>
                    </a>


                    <a id="sidebarNavToggler1" href="javascript:;" role="button"
                        class="ml-4 d-none d-lg-block target-of-invoker-has-unfolds" aria-controls="sidebarContent1"
                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1"
                        data-unfold-type="css-animation" data-unfold-overlay="{
                            &quot;className&quot;: &quot;u-sidebar-bg-overlay&quot;,
                            &quot;background&quot;: &quot;rgba(0, 0, 0, .7)&quot;,
                            &quot;animationSpeed&quot;: 500
                        }" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
                        data-unfold-duration="500">
                        @auth
                            <div class="d-flex align-items-center text-white font-size-2 text-lh-sm position-relative">
                                <i class="flaticon-icon-126515 font-size-4 text-secondary-black-100"></i>
                                <div class="ml-2">
                                    <a href="/cart"><span class="font-size-1" style="color: white!important;">My
                                            Cart</span></a>
                                </div>
                            </div>
                        @else
                            <div class="d-flex align-items-center text-white font-size-2 text-lh-sm position-relative">
                                <i class="flaticon-icon-126515 font-size-4" style="color:white!important;"></i>
                                <div class="ml-2">
                                    <a href="/signin"><span class="font-size-3" style="color:white!important;">My
                                            Cart</span></a>
                                </div>
                            </div>
                        @endauth
                    </a>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="rounded-md bg-transparent d-none d-md-block">
                <div class="d-flex align-items-center justify-content-center position-relative">
                    <div class="site-navigation mr-auto d-none d-xl-block w-100 d-flex justify-content-center">
                        <ul class="nav pl-xl-8 d-flex justify-content-center">
                            <li class="nav-item dropdown"
                                style=" border-radius:24px;background: linear-gradient(to right,#2b6fa2,#54479b);">
                                <a href="/"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Home</a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a href="/about"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">About
                                    Us</a>
                            </li>
                            <li class="nav-item"><a href="/faq"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">FAQ</a>
                            </li>
                            <li class="nav-item"><a href="/contact"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Contact
                                    Us</a></li>
                            <li class="nav-item"><a href="/t&c"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Terms
                                    and Conditions</a>
                            </li>
                            <li class="nav-item"><a href="/privacypolicy"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Privacy
                                    Policy</a>
                            </li> --}}
                            <li class="nav-item"><a href="/return_refund"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Return/Refund
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
        <div class="u-sidebar__scroller js-scrollbar">
            <div class="u-sidebar__container">
                <div class="u-header-sidebar__footer-offset">

                    <div class="u-sidebar__body">
                        <div class="u-sidebar__content u-header-sidebar__content">
                            <header
                                class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                                <h2 class="font-size-3 mb-0">E-CARNIVAL BOOK FAIR</h2>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="close ml-auto" aria-controls="sidebarContent2"
                                        aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2"
                                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                        <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                    </button>
                                </div>
                            </header>

                            <div class="border-bottom">
                                <div class="zeynep pt-4">
                                    <ul id="category"></ul>
                                </div>
                            </div>

                            <div class="px-4 px-md-5 pt-5 pb-4 border-bottom">
                                <h2 class="font-size-3 mb-3">HELP & SETTINGS </h2>
                                <ul class="list-group list-group-flush list-group-borderless">
                                    @auth
                                        <li class="list-group-item px-0 py-2 border-0">
                                            <a class="h-primary">{{ Auth::user()->name }}</a>
                                            <form method="post" action="/logout">
                                                @csrf
                                                <button
                                                    style="background-image: linear-gradient(to right,#2b6fa2,#54479b); border:0; height:40px; padding:2px 20px; border-radius:20px;">
                                                    <div class="text-secondary-white-100 font-size-2" id="logout">
                                                        Logout</div>
                                                </button>
                                            </form>
                                        </li>
                                        <li class="list-group-item px-0 py-2 border-0"><a href="cart" class="h-primary">My
                                                Cart</a></li>
                                        <li class="list-group-item px-0 py-2 border-0"><a href="my_account"
                                                class="h-primary">Your
                                                Account</a></li>
                                    @else
                                        <li class="list-group-item px-0 py-2 border-0"><a href="/signin"
                                                class="h-primary">Sign
                                                In</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <style>
        input:-webkit-autofill,
        inpuinput[type="text"] {
            background: transparent;
            border: none;
        }

        i {
            color: white;
        }

    </style>
    <link rel="stylesheet" href="./assets/css/spaceStars.css">
    <section class="mb-8">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="bg-img-hero img-fluid rounded-md">
                    <section class="shooting-star">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </section>
                    <div class="js-slick-carousel u-slick"
                        data-pagi-classes="d-lg-none text-center u-slick__pagination mt-5 position-absolute left-0 right-0"
                        data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow--v4 u-slick__arrow-centered--y"
                        data-arrow-left-classes="flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left text-gray-360 ml-lg-3"
                        data-arrow-right-classes="flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right text-white mr-lg-3">
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        {{-- <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                            data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THE BOOKWORM
                                            EDITORS’</p> --}}
                                        <h2 class="font-size-15 mb-3 pb-1" style="color: white;"
                                            data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Book Fair <br>
                                                E-Carnival</span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">16 - 26
                                                August</span>
                                        </h2>
                                        <a href="" class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                            data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400"
                                            style="background-image: linear-gradient(to right,#2b6fa2,#54479b);">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 px-md-6 px-lg-7 px-xl-10 d-flex min-height-530">
                            <div class="max-width-565 my-auto">
                                <div class="media">
                                    <div class="media-body align-self-center mb-4 mb-lg-0">
                                        {{-- <p class="banner__pretitle text-uppercase text-gray-400 font-weight-bold mb-2"
                                            data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">THE BOOKWORM
                                            EDITORS’</p> --}}
                                        <h2 class="font-size-15 mb-3 pb-1" style="color: white;"
                                            data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                            <span class="hero__title-line-1 font-weight-normal d-block">Feature Books
                                                Of</span>
                                            <span class="hero__title-line-2 font-weight-bold d-block">August</span>
                                        </h2>
                                        <a href="" class="banner_btn btn btn-wide bg-dark text-white rounded-xs"
                                            data-scs-animation-in="fadeInLeft" data-scs-animation-delay="400"
                                            style="background-image: linear-gradient(to right,#2b6fa2,#54479b);">See
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Header Image End --}}

    {{-- Features Start --}}
    <section>
        <div class="site-features border-bottom space-1d625 delivery-payment mb-5" style="border: 0!important;">
            <div class="container">
                <ul class="list-unstyled my-0 list-features d-md-flex align-items-center justify-content-between">
                    <li class="list-feature">
                        <div class="media d-md-block d-xl-flex text-center text-xl-left pr-lg-5 pr-xl-0">
                            <div class="feature__icon font-size-14 text-primary text-lh-xs mb-md-3 mb-lg-0"> <i
                                    class="glyph-icon flaticon-delivery" style="color: white;"></i> </div>
                            <div class="media-body ml-xl-4">
                                <h4 class="feature__title font-size-3 text-white">Fast Delivery</h4>
                                <p class="feature__subtitle m-0 text-white">Enjoy delivery under 7-days</p>
                            </div>
                        </div>
                    </li>
                    <li class="separator border-xl-left h-fixed-80" aria-hidden="true" role="presentation"></li>
                    <li class="list-feature">
                        <div class="media  d-md-block d-xl-flex text-center text-xl-left pr-lg-5 pr-xl-0">
                            <div class="feature__icon font-size-14 text-primary text-lh-xs mb-md-3 mb-lg-0"> <i
                                    class="glyph-icon flaticon-credit" style="color: white;"></i> </div>
                            <div class="media-body ml-xl-4">
                                <h4 class="feature__title font-size-3 text-white">Secure Payment</h4>
                                <p class="feature__subtitle m-0 text-white">100% Secure Payment</p>
                            </div>
                        </div>
                    </li>
                    <li class="separator border-xl-left h-fixed-80" aria-hidden="true" role="presentation"></li>
                    <li class="list-feature">
                        <div class="media  d-md-block d-xl-flex text-center text-xl-left pr-lg-5 pr-xl-0">
                            <div class="feature__icon font-size-14 text-primary text-lh-xs mb-md-3 mb-lg-0"> <i
                                    class="glyph-icon flaticon-warranty" style="color: white;"></i> </div>
                            <div class="media-body ml-xl-4">
                                <h4 class="feature__title font-size-3 text-white">Quality Assurance</h4>
                                <p class="feature__subtitle m-0 text-white">Through Our Verified Sellers</p>
                            </div>
                        </div>
                    </li>
                    <li class="separator border-xl-left h-fixed-80" aria-hidden="true" role="presentation"></li>
                    <li class="list-feature">
                        <div class="media d-md-block d-xl-flex text-center text-xl-left pr-lg-5 pr-xl-0">
                            <div class="feature__icon font-size-14 text-primary text-lh-xs mb-md-3 mb-lg-0"> <i
                                    class="glyph-icon flaticon-help" style="color: white;"></i> </div>
                            <div class="media-body ml-xl-4">
                                <h4 class="feature__title font-size-3 text-white">24/7 Support</h4>
                                <p class="feature__subtitle m-0 text-white">Within 1 Business Day</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- Features End --}}

    {{-- Books Start --}}
    <section class="space-bottom-3 " id="Shop">
        <div class="container">
            <header class="d-md-flex justify-content-between align-items-center mb-5" style="color: #ffffff!important;">
                <h2 class="font-size-7 mb-4 mb-md-0">Trending Books</h2>
                <a href="viewAllBooks" class="d-flex align-items-center h-primary" style="color: #ffffff!important">View
                    All<span class="flaticon-next font-size-3 ml-2"></span></a>
            </header>
            <ul class="products list-unstyled mb-0 row row-cols-2 row-cols-md-3 row-cols-xl-4 row-cols-wd-5"
                style="justify-content:center;" id="books">
                @foreach ($data as $book)
                    @include('include.box')
                @endforeach
            </ul>
        </div>
    </section>
    {{-- Books End --}}

    <footer style="overflow-x: hidden;">
        <div class="border-top space-top-3"
            style="border: 0!important; display: flex; flex-direction:column; justify-content: center">
            <div class="border-bottom pb-5 space-bottom-lg-3" style="border: 0!important; display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;">
                {{-- <div class="container">
                    <div class="space-bottom-2 space-bottom-md-3">
                        <div class="text-center mb-5" style="color: white;">
                            <h5 class="font-size-7 font-weight-medium">Join Our Newsletter</h5>
                            <p>Signup to be the first to hear about exclusive deals, special
                                offers and upcoming collections</p>
                        </div>

                        <div class="form-row justify-content-center">
                            <div class="col-md-5 mb-3 mb-md-2">
                                <div class="js-form-message"></div>
                                <div class="input-group">
                                    <input type="text" class="form-control px-5 height-60 border-dark" name="name"
                                        id="signupSrName" placeholder="Enter email for weekly newsletter."
                                        aria-label="Your name" required="" data-msg="Name must contain only letters."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>

                            <div class="col-sm-2 ml-md-2"">
                                    <button type=" submit"
                                class="btn btn-dark rounded-0 btn-wide py-3 font-weight-medium" style="background-image: linear-gradient(to right, rgb(43, 111, 162), rgb(84, 71, 155));
                                        animation-delay: 400ms;
                                        opacity: 1;">Subscribe

                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row" style="
                    width: 80%;
                    padding-left: 30px;
                ">
                    <div class="col-lg-4 mb-lg-0">
                        <div class="pb-6 d-flex flex-column">
                            <a href="/index.html" class="d-inline-block mb-5">
                                <div class="flex-horizontal">
                                    <img src="/assets/img/E_cellLogo.png" alt="" style=" height: 50px; width: 50px; ">
                                    <h4 style="margin: 0; padding-left: 5px;">E-Cell MANIT</h4>

                                </div>
                            </a>
                            <address class="font-size-2 mb-5">
                                <span class="mb-2 font-weight-normal text-dark" style="text-align: center;">
                                    <h5 style="color: burlywood; text-align: center;">Maulana Azad National Institute of
                                        Technology</h5>
                                    <div style="font-size:0.9rem; color:#ffffff!important; text-align: center;">Link
                                        Road
                                        Number 3, Near Kali Mata Mandir,
                                        Bhopal,<br> Madhya Pradesh, India
                                        462003</div>
                                </span>
                            </address>
                            <div class="mb-4">
                                <a href="mailto:support@ecellnitb.com" class="font-size-2 d-block link-black-100 mb-1"
                                    style="text-align: center;">support@ecellnitb.com</a>
                                <a href="tel:+91 9589255239" class="font-size-2 d-block link-black-100"
                                    style="text-align: center;">+91
                                    9589255239</a>
                            </div>
                            <ul class="list-unstyled mb-0 d-flex" style="justify-content: center;">
                                <li class="btn pl-0">
                                    <a class="link-black-100" href="https://bit.ly/3ifVMTg">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="https://bit.ly/3yVRuqH">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100"
                                        href="https://www.youtube.com/channel/UCj936HzKeplGDYthCF1jc5Q">
                                        <span class="fab fa-youtube"></span>
                                    </a>
                                </li>
                                <li class="btn">
                                    <a class="link-black-100" href="https://twitter.com/ecell_nitb">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0" style="color: white!important;">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Customer Service</h4>
                        <ul class="list-unstyled mb-0" style="color: white!important;">
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="/about">About</a>
                            </li>
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="/faq">FAQ</a>
                            </li>
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="/contact">Contact</a>
                                Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 mb-6 mb-lg-0" style="color: white!important;">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Policy</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="/t&c">Terms
                                    and Conditions</a>
                            </li>
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="privacypolicy">Privacy Policy</a>
                            </li>
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100"
                                    href="return_refund">Return/Refund
                                    Policy</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-lg-2 mb-6 mb-lg-0" style="color: white!important;">
                        <h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1">Categories</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Action</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Comedy</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Drama</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Horror</a>
                            </li>
                            <li class="py-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Kids</a>
                            </li>
                            <li class="pt-2">
                                <a class="widgets-hover transition-3d-hover font-size-2 link-black-100" href="#">Romantic
                                    Comedy</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                </div>
            </div>
            <div class="space-1">
                <div class="container" style="max-width: 296px;">
                    <div class="d-lg-flex text-center text-lg-left justify-content-between align-items-center"
                        style="color: #ffffff!important">
                        <p class="mb-3 mb-lg-0 font-size-2">©2021 E-Cell MANIT. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="/assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
    <script src="/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/vendor/slick-carousel/slick/slick.min.js"></script>
    <script src="/assets/js/hs.core.js"></script>
    <script src="/assets/js/components/hs.unfold.js"></script>
    <script src="/assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="/assets/js/components/hs.slick-carousel.js"></script>
    <script src="/assets/js/components/hs.selectpicker.js"></script>
    <script src="/assets/js/components/hs.show-animation.js"></script>
    @if (session('status'))
        <script>
            alert("{{ session('status') }} ");
        </script>
    @endif
    <script>
        const currUrl = location.href;
        const menuItems = document.getElementsByTagName('a');
        const menuLength = menuItems.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItems[i].href == currUrl) {
                menuItems[i].classList.add('active');
            } else {
                menuItems[i].classList.remove("active");
            }
        }
    </script>
    <script>
        $(document).on('ready', function() {
            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));
            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');
            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');
            // init zeynepjs
            var zeynep = $('.zeynep').zeynep({
                onClosed: function() {
                    // enable main wrapper element clicks on any its children element
                    $("body main").attr("style", "");
                    console.log('the side menu is closed.');
                },
                onOpened: function() {
                    // disable main wrapper element clicks on any its children element
                    $("body main").attr("style", "pointer-events: none;");
                    console.log('the side menu is opened.');
                }
            });
            // handle zeynep overlay click
            $(".zeynep-overlay").click(function() {
                zeynep.close();
            });
            // open side menu if the button is clicked
            $(".cat-menu").click(function() {
                if ($("html").hasClass("zeynep-opened")) {
                    zeynep.close();
                } else {
                    zeynep.open();
                }
            });
        });
    </script>

    {{-- Script Start --}}
    <script type="text/javascript">
        getCategory();

        function getCategory() {

            $.ajax({
                url: '/api/category',
                method: 'GET',
                success: function(response) {
                    // console.log(response);
                    response.forEach(category => {
                        console.log(category.name);
                        $('#category').append(
                            `<li class="has-submenu">
                                <a href="/book_by_category/${category.name}" data-submenu="art-photo">${category.name}</a>
                            </li>`
                        )
                    })
                }
            })
        }

        $('.cart').on('click', function() {
            var data = {};
            data['book_id'] = $(this).attr("data_id_1")
            data['seller_id'] = $(this).attr("data_id_2")
            data['selling_price'] = $(this).attr("data_id_3")

            @auth
                data['user_id'] = "{{ Auth::user()->user_id }}"
            @endauth

            console.log(data)
            $.ajax({
                url: "/api/order",
                type: "POST",
                data: data,
                success: function(response) {
                    alert(response);
                }
            })
        })
    </script>
    <script>
        $("#submit").click(function(event) {
            event.preventDefault();
            keyword = $("#keyword").val();
            window.location.assign(`/books?keyword=${keyword}`);
        })
    </script>
    {{-- Script End --}}

</body>
<style>
    body {
        margin: 0;
        background-image: url(./assets/images/testImg.png) !important;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        min-height: 2650px;
        width: -webkit-fill-available;
        background-color: #181645;
        overflow-x: hidden !important;
    }

    html {
        overflow-x: hidden;
    }

    input {
        color: white;
    }

    input[placeholder]:focus {
        z-index: -63;
        background: #252158 !important;
        color: white !important;
    }

    footer a {
        color: white !important;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 1rem !important;
    }

    .space-1,
    .space-top-1 {
        padding-top: 8rem !important;
    }

    @media only screen and (max-width: 360px) {
        .searchBar {
            min-width: 230px !important;
        }
    }

</style>

</html>

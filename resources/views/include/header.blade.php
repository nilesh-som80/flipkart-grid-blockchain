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
    {{-- <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css"> --}}

    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="https://kit.fontawesome.com/e3488c8060.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/assets/img/E_cellLogo.png" type="image/png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
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
                        {{-- <div class="flex-horizontal">
                            <img src="/assets/images/logo_Ecarnival.png" alt="" style=" height: 76px; width: 250px; ">

                        </div> --}}
                        <div class="flex-horizontal">
                            {{-- <img src="/assets/images/logo_Ecarnival.png" alt="" style=" height: 76px; width: 250px; "> --}}
                            <i>Flipkart Grid</i>
                        </div>
                    </a>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0" id="searchbar">
                        <div class="input-group input-group-borderless w-100 searchBar">
                            <input type="text" class="form-control bg-gray-200 bg-focus__1 searchBar" style="background-color: rgb(251 242 232);
                                border-bottom-left-radius: 49px; border-top-left-radius: 49px; flex:0; min-width: 235px; background-color: #252158;
                                " placeholder="Search for books by keyword" id="keyword" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2 bg-color-nav" style="    border-radius: 42px;
                                position: relative;
                                left: -32px; background:linear-gradient(to right, #8057a4,#6953a3); z-index: 19!important;"
                                    id="submit"><i class="mx-1 glph-icon flaticon-loupe text-white"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="site-search ml-xl-0 ml-md-auto w-r-100 flex-grow-1 mr-md-5 mt-2 mt-md-0 order-1 order-md-0">
                    <form class="form-inline my-2 my-xl-0" id="searchbar">
                        <div class="input-group input-group-borderless w-100 searchBar">
                            <input type="text" class="form-control bg-gray-200 bg-focus__1" style="background-color: rgb(251 242 232);
                                border-bottom-left-radius: 49px; border-top-left-radius: 49px; flex:0; min-width: 235px; background-color: #252158;
                                " placeholder="Enter NFT Token and Get the Book Detail" id="token" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3 py-2 bg-color-nav" style=" z-index:456;    border-radius: 42px;
                                position: relative; z-index:19;
                                left: -32px; background:linear-gradient(to right, #8057a4,#6953a3);" id="submittoken"><i
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
                                <i class="flaticon-icon-126515 font-size-4 text-secondary-white-100"></i>
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
                <div class="d-flex align-items-center justify-content-center position-relative bg-color-nav">
                    <div class="site-navigation mr-auto d-none d-xl-block w-100 d-flex justify-content-center">
                        <ul class="nav pl-xl-8 d-flex justify-content-center">
                            <li class="nav-item dropdown">
                                <a href="/"
                                    class="nav-link text-white mx-2 px-3 py-3 font-size-2 font-weight-medium OnHoverBlack">Home</a>
                            </li>
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
                                                class="h-primary">My Account</a></li>
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

        .masthead {
            background-color: #171644;
        }

        input {
        color: white;
    }

    input[placeholder]:focus {
        z-index: -63;
        background: #252158 !important;
        color: white !important;
    }
        input:focus{
            z-index: -62;
            background: transparent;
        }
    </style>

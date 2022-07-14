{{-- @php
    dd($data, $user_data);
@endphp --}}

@php
use Carbon\Carbon;
@endphp

<html>

<head>

    <title>E-Carnival | Book Fair</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="/assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css">

    <link rel="stylesheet" href="/assets/css/theme.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <script src="https://kit.fontawesome.com/e3488c8060.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/assets/img/E_cellLogo.png" type="image/png">
</head>


<main id="content">
    <div class="bg-gray-200 space-bottom-3">
        <div class="container">
            <div class="py-5 py-lg-7">
                <h6 class="font-weight-medium font-size-7 text-center mt-lg-1">Order Received</h6>
            </div>
            <div class="max-width-890 mx-auto">
                <div class="bg-white pt-6 border">
                    <h6 class="font-size-3 font-weight-medium text-center mb-4 pb-xl-1">Thank you. Your order has
                        been received.</h6>
                    <div class="border-bottom mb-5 pb-5 overflow-auto overflow-md-visible">
                        <div class="pl-3">
                            <table class="table table-borderless mb-0 ml-1">
                                <thead>
                                    <tr>
                                        <th scope="col" class="font-size-1 font-weight-normal py-0">Name:</th>
                                        <th scope="col" class="font-size-1 font-weight-normal py-0">Bill Number:</th>
                                        <th scope="col" class="font-size-1 font-weight-normal py-0">Date:</th>
                                        {{-- <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-center">
                                            Total: </th>
                                        <th scope="col"
                                            class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">
                                            Address: </th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{ Auth::user()->name }}
                                        </th>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">
                                            {{ $user_data->bill_number }}</th>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">
                                            {{ Carbon::now()->format('d-m-Y') }}</th>
                                        {{-- <td class="pr-0 py-0 font-weight-medium text-md-center">{{$user_data->amount}}</td>
                                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">{{$user_data->address}}</td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-bottom mb-5 pb-6">
                        <div class="px-3 px-md-4">
                            <div class="ml-md-2">
                                <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Order Details</h6>
                                @foreach ($data as $data)
                                    <div class="d-flex justify-content-between mb-4">
                                        <div class="d-flex align-items-baseline">
                                            <div>
                                                <h6 class="font-size-2 font-weight-normal mb-1">{{ $data->name }}</h6>
                                                <span class="font-size-2 text-gray-600">Seller :
                                                    {{ $data->seller_id }}</span><br>
                                                <span class="font-size-2 text-gray-600">Order ID :
                                                    {{ $data->order_id }}</span>
                                            </div>
                                        </div>
                                        <span class="font-weight-medium font-size-2">₹ {{ $data->selling_price }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-5 pb-5">
                        <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Subtotal:</span>
                                <span class="font-weight-medium font-size-2">₹ {{ $totalprice }}</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Shipping:</span>
                                <span class="font-weight-medium font-size-2">₹
                                    {{ $shipping }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="border-bottom mb-5 pb-4">
                        <div class="px-3 pl-md-5 pr-md-4">
                            <div class="d-flex justify-content-between">
                                <span class="font-size-2 font-weight-medium">Total</span>
                                <span class="font-weight-medium fon-size-2">₹ {{ $user_data->amount }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <h6 class="font-weight-medium font-size-22 mb-3">Shipping Address
                                </h6>
                                <address class="d-flex flex-column mb-0">
                                    <span class="text-gray-600 font-size-2">{{ $user_data->address }}</span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


</body>
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

</html>

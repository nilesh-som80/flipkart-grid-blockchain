{{-- @php
    dd($data);
@endphp --}}

@php
    use Carbon\Carbon;
@endphp

@include('include.header');

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
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{Auth::user()->name}}</th>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{$user_data->bill_number}}</th>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{Carbon::now()->format('d-m-Y')}}</th>
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
                                            <h6 class="font-size-2 font-weight-normal mb-1">{{$data->name}}</h6>
                                            <span class="font-size-2 text-gray-600">Seller : {{$data->seller_id}}</span><br>
                                            <span class="font-size-2 text-gray-600">Order ID : {{$data->order_id}}</span>
                                        </div>
                                    </div>
                                    <span class="font-weight-medium font-size-2">₹ {{$data->selling_price}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-5 pb-5">
                        <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Subtotal:</span>
                                <span class="font-weight-medium font-size-2">₹ {{$totalprice}}</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Shipping:</span>
                                <span class="font-weight-medium font-size-2">₹ {{$user_data->amount - $totalprice}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="border-bottom mb-5 pb-4">
                        <div class="px-3 pl-md-5 pr-md-4">
                            <div class="d-flex justify-content-between">
                                <span class="font-size-2 font-weight-medium">Total</span>
                                <span class="font-weight-medium fon-size-2">₹ {{$user_data->amount}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-xl-1">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <h6 class="font-weight-medium font-size-22 mb-3">Shipping Address
                                </h6>
                                <address class="d-flex flex-column mb-0">
                                    <span class="text-gray-600 font-size-2">{{$user_data->address}}</span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('include.footer')

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
                                <a href="/book_by_category/${category.category_id}" data-submenu="art-photo">${category.name}</a>
                            </li>`
                    )
                })
            }
        })
    }
</script>

</body>

</html>

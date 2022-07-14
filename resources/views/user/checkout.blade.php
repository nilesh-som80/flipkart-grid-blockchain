@include('include.header')

@if ($errors->any()){{-- if there is any error --}}
    <div class="alert alert-danger"> {{-- //alert active --}}
        @foreach ($errors->all() as $error){{-- for all errors, jo hain dispaly kardoo --}}
            {{-- {{ $error }}back end to front end connection --}}
            {{"Please select an address to deliver"}}
        @endforeach
    </div>
@endif

<div id="content" class="site-content bg-punch-light space-bottom-3">
    <div class="col-full container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-6" class="post-6 page type-page status-publish hentry">
                    <header class="entry-header space-top-2 space-bottom-1 mb-2">
                        <h4 class="entry-title font-size-7 text-center">Checkout</h4>
                    </header>
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form class="checkout woocommerce-checkout row mt-8" enctype="multipart/form-data"
                                novalidate="novalidate" method="POST" action="/payment">
                                @csrf
                                <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                    <div class="px-4 pt-5 bg-white border">
                                        <div class="woocommerce-billing-fields">
                                            <h3 class="mb-4 font-size-3">Billing details</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper row">
                                                <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                    id="address_field" data-priority="110">
                                                    <label for="address" class="form-label">Shipping Address
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    {{-- <input type="text" class="input-text form-control"
                                                            name="address" id="address" placeholder="" value=""> --}}
                                                    <select id="address" name="address_id"
                                                        class="input-text form-control">
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary"
                                        style="background-color: #252158; border:none;margin-top:20px;"><a
                                            href="/my_account">Add Address</a></button>
                                </div>
                                <h3 id="order_review_heading" class="d-none">Your order</h3>
                                <div id="order_review"
                                    class="col-md-6 col-lg-5 col-xl-4 woocommerce-checkout-review-order">
                                    <div id="checkoutAccordion" class="border border-gray-900 bg-white mb-5">
                                        <div class="p-4d875 border">
                                            <div id="checkoutHeadingOnee" class="checkout-head">
                                                <a href="#"
                                                    class="text-dark d-flex align-items-center justify-content-between"
                                                    data-toggle="collapse" data-target="#checkoutCollapseOnee"
                                                    aria-expanded="true" aria-controls="checkoutCollapseOnee">
                                                    <h3 class="checkout-title mb-0 font-weight-medium font-size-3">
                                                        Your order</h3>
                                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                        height="2px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                    </svg>
                                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                        height="15px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div id="checkoutCollapseOnee" class="mt-4 checkout-content collapse show"
                                                aria-labelledby="checkoutHeadingOnee" data-parent="#checkoutAccordion">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead class="d-none">
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $book)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    {{ $book->name }}
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">₹</span>{{ $book->selling_price }}</span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="p-4d875 border">
                                            <div id="checkoutHeadingOne" class="checkout-head">
                                                <a href="#"
                                                    class="text-dark d-flex align-items-center justify-content-between"
                                                    data-toggle="collapse" data-target="#checkoutCollapseOne"
                                                    aria-expanded="true" aria-controls="checkoutCollapseOne">
                                                    <h3 class="checkout-title mb-0 font-weight-medium font-size-3">
                                                        Cart Totals</h3>
                                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                        height="2px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                                    </svg>
                                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px"
                                                        height="15px">
                                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                            d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div id="checkoutCollapseOne" class="mt-4 checkout-content collapse show"
                                                aria-labelledby="checkoutHeadingOne" data-parent="#checkoutAccordion">
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                        <tr class="checkout-subtotal">
                                                            <th>Subtotal</th>
                                                            <td data-title="Subtotal"><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">₹</span>{{ $totalprice }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-shipping">
                                                            <th>Shipping</th>
                                                            <td data-title="Shipping">₹{{ $shipping }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="p-4d875 border">
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total"><strong><span
                                                                    class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">₹</span>{{ $totalprice + $shipping }}</span></strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-row place-order">
                                            <button id="place_order" type="submit"
                                                class="button alt btn btn-dark btn-block rounded-0 py-4">Place
                                                order</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
</div>

@include('include.footer')

<script>
    getAddress();
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

    function getAddress() {
        $.ajax({
            url: '/api/addressByUserId',
            data: {
                "user_id": "{{ Auth::user()->user_id }}"
            },
            method: 'get',
            success: function(response) {
                console.log(response);
                response.forEach(address => {
                    $('#address').append(
                        `<option value="${address.address_id}">${address.address}</option>`
                    )
                })
            }
        })
    }
</script>

</body>

</html>

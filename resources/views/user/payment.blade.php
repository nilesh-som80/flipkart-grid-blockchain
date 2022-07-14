@include('include.header')

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
                                novalidate="novalidate" method="POST" action="paymentgateway">

                                @csrf

                                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                <input type="hidden" name="mobile" value="{{ Auth::user()->mobile }}">
                                <input type="hidden" name="total_price" value="{{ $totalprice + $shipping }}">
                                @php
                                    $order_id = '';
                                    $i = 1;
                                    foreach ($data as $books) {
                                        if ($i == 1) {
                                            $order_id = $order_id . $books['order_id'];
                                        } else {
                                            $order_id = $order_id . ',' . $books['order_id'];
                                        }
                                        $i++;
                                    }
                                @endphp
                                <input type="hidden" name="order_id" value="{{ $order_id }}">
                                <div class="col2-set col-md-6 col-lg-7 col-xl-8 mb-6 mb-md-0" id="customer_details">
                                    <div class="px-4 pt-5 bg-white border">
                                        <div class="woocommerce-billing-fields">
                                            <h3 class="mb-4 font-size-3">Billing details</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper row">
                                                <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                    id="address_field" data-priority="110">
                                                    <label for="address" class="form-label">Name
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control" name="name"
                                                        id="address" placeholder="" value="{{ Auth::user()->name }}"
                                                        disabled>
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                    id="address_field" data-priority="110">
                                                    <label for="address" class="form-label">Shipping Address
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control"
                                                        name="user_addresses" id="address" placeholder=""
                                                        value="{{ $address->user_addresses }}" disabled>
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                    id="address_field" data-priority="110">
                                                    <label for="address" class="form-label">Sub Total + Shipping
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    <input type="text" class="input-text form-control"
                                                        name="total_price" id="address" placeholder=""
                                                        value="₹{{ $totalprice + $shipping }}" disabled>
                                                </p>
                                                <p class="col-12 mb-4d75 form-row form-row-last validate-required validate-email"
                                                    id="address_field" data-priority="110">
                                                    <label for="address" class="form-label">Your Orders
                                                        <abbr class="required" title="required">*</abbr></label>
                                                    @foreach ($data as $book)
                                                        <input type="text" class="input-text form-control"
                                                            name="selling_price" id="address" placeholder=""
                                                            value="{{ $book->name . ' ( ₹ ' . $book->selling_price . ' ) ' }}"
                                                            disabled>
                                                    @endforeach
                                                </p>
                                            </div>
                                            <div class="form-row place-order">
                                                <button id="place_order" type="submit"
                                                    class="button alt btn btn-dark btn-block rounded-0 py-4">Make
                                                    Payment</button>
                                            </div>
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

{{-- @php
    dd($data);
@endphp --}}

@include('include.header')

<div class="site-content bg-punch-light overflow-hidden " id="content">
    <div class="container">
        <header class="entry-header space-top-2 space-bottom-1 mb-2">
            <h1 class="entry-title font-size-7">Your cart</h1>
        </header>
        <div class="row pb-8 flexfor">
            <div id="primary" class="content-area" >
                <main id="main" class="site-main ">
                    <div class="page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form class="woocommerce-cart-form table-responsive">
                                    <div>
                                        <table
                                            class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                            s>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-remove">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $book)
                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
                                                        <td class="product-name" data-title="Product">
                                                            <div class="d-flex align-items-center">
                                                                <a href="#">
                                                                    <img src="{{ $book->image_1 }}" width="40"
                                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                        alt="">
                                                                </a>
                                                                <div class="ml-3 m-w-200-lg-down">
                                                                    <a href="#">{{ $book->name }}</a>
                                                                    <a href="#"
                                                                        class="text-gray-700 font-size-2 d-block"
                                                                        tabindex="0">{{ $book->authors_name }}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="product-price" data-title="Price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">₹</span>
                                                                {{ $book->selling_price }}</span>
                                                        </td>
                                                        <td class="product-remove">
                                                            <button class="remove" aria-label="Remove this item"
                                                                data_id="{{ $book->od_id }}" style="background: none;border:none;">
                                                                <svg width="15px" height="15px">
                                                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                                                        d="M15.011,13.899 L13.899,15.012 L7.500,8.613 L1.101,15.012 L-0.012,13.899 L6.387,7.500 L-0.012,1.101 L1.101,-0.012 L7.500,6.387 L13.899,-0.012 L15.011,1.101 L8.613,7.500 L15.011,13.899 Z" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="secondary" class="sidebar cart-collaterals order-1 cartbox2" role="complementary">
                <div id="cartAccordion" class="border border-gray-900 bg-white mb-5">
                    <div class="p-4d875 border">
                        <div id="cartHeadingOne" class="cart-head">
                            <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                data-toggle="collapse" data-target="#cartCollapseOne" aria-expanded="true"
                                aria-controls="cartCollapseOne">
                                <h3 class="cart-title mb-0 font-weight-medium font-size-3">Cart Totals</h3>
                                <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                        d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                </svg>
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                    <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                        d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                </svg>
                            </a>
                        </div>
                        <div id="cartCollapseOne" class="mt-4 cart-content collapse show"
                            aria-labelledby="cartHeadingOne" data-parent="#cartAccordion">
                            <table class="shop_table shop_table_responsive">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">₹</span>{{ $totalprice }}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <th>Shipping</th>
                                        <td data-title="Shipping">₹{{$shipping}}</td>
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
                                    @isset($totalprice)
                                        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">₹</span>{{ $totalprice + $shipping }}</span></strong>
                                        </td>
                                    @endisset
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="wc-proceed-to-checkout">
                    @if ($totalprice != 0)
                    <a href="/checkout"
                    class="checkout-button button alt wc-forward btn btn-dark btn-block rounded-0 py-4">Proceed
                    to checkout</a>
                    @endif
                </div>
            </div>
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
    $('.remove').on('click', function(response) {
        // alert($(this).attr("data_id"))
        $.ajax({
            url: "/api/order/".concat($(this).attr("data_id")),
            type: "DELETE",
            success: function(response) {
                alert(response);
            }
        })
    })
</script>
<style>

.container
{
    width: 90%
}
    .flexfor
    {
        display: flex;
        /* justify-content: center; */
            /* align-items: center; */
            /* width: 80%; */

     }
    .cartbox1
        {
            width:70px

        }
        .cartbox2
        {
            width: 30%;


        }
        .shop_table.cart th, .shop_table.cart td {

    /* background-color: #252158; */
    color: black;
    border: none;
}
    @media(max-width:900px)
    {
        .flexfor{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .cartbox1
        {
            width: 100%;

        }
        .cartbox2
        {
            margin-top: 30px;
            width: 80%;

        }
        table
        {
            font-size: 15px;
        }

.shop_table.cart th, .shop_table.cart td {
    padding: .8rem 1.1rem;
    /* background-color: #252158; */
    color: black;
    border: none;
}




    }

</style>
</body>

</html>

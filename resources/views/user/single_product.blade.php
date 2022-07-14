@include('include.header');

{{-- @foreach ($data as $book) --}}
<div id="primary" class="content-area">
    <main id="main" class="site-main ">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                        <figure class="woocommerce-product-gallery__wrapper pt-8 mb-0">
                            <div class="js-slick-carousel u-slick"
                                data-pagi-classes="text-center u-slick__pagination my-4">
                                @if($book->image_1)
                                <div class="js-slide">
                                    <img src="{{ $book->image_1 }}" alt="Image Description" class="mx-auto img-fluid">
                                </div>
                                @else
                                <div class="js-slide">
                                    <img src="http://covers.openlibrary.org/b/isbn/{{$book->ISBN_code}}-L.jpg" alt="Image Description" class="mx-auto img-fluid">
                                </div>
                                @endif
                            </div>
                        </figure>
                    </div>
                    <div class="col-md-7 pl-0 summary entry-summary border-left">
                        <div class="space-top-2 px-4 px-xl-7 border-bottom pb-5">
                            <h1 class="product_title entry-title font-size-7 mb-3">{{ $book->name }}</h1>
                            <p>{{$book->info_1}}</p>
                            @if ($book->current_stock == 0)
                                <p class="price font-size-25 font-weight-medium mb-3">
                                    <span class="woocommerce-Price-amount amount">OUT OF STOCK</span>
                                </p>
                            @elseif ($book->current_stock <= 5 && $book->current_stock > 0)
                                    <p class="price font-size-25 font-weight-medium mb-3">
                                        <span class="woocommerce-Price-amount amount">Only
                                            {{ $book->current_stock }} pieces left. ORDER NOW!!</span>
                                    </p>
                            @endif
                            <p class="price font-size-22 font-weight-medium mb-3">
                                <span class="woocommerce-Price-amount amount">
                                    <strike class="woocommerce-Price-currencySymbol font-size-22">₹
                                        {{ $book->price }}</strike>
                                </span>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol font-size-10">₹
                                        {{ $book->discount_price }}</span>
                                </span>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol font-size-22">
                                        (-{{ $book->discount_percent }}%)</span>
                                </span>
                            </p>
                            <div class="mb-2 font-size-2">
                                <span class="font-weight-medium">Book Format: {{ $book->binding }}
                                    </span>
                            </div>
                            <div class="mb-2 font-size-2">
                                <span class="font-weight-medium">Book Condition: {{ $book->old_or_new }}
                                    </span>
                            </div>
                            <div class="woocommerce-product-details__short-description font-size-2 mb-5">
                                <p>Written By : {{ $book->authors_name }}</p>
                                <p>{{ $book->info_2 }}</p>
                                <p>Genre : {{ $book->categories_name }}</p>
                            </div>
                            @auth
                                @if ($book->current_stock > 0)
                                    <button data_id_1="{{ $book->book_id }}" data_id_2="{{ $book->seller_id }}"
                                        data_id_3="{{ $book->discount_price }}"
                                        class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt cart">Add
                                        to cart</button>
                                @else
                                    <button
                                        class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt"
                                        disabled>Add
                                        to cart</button>
                                @endif
                            @else
                                <button
                                    class="btn btn-dark border-0 rounded-0 p-3 min-width-250 ml-md-4 single_add_to_cart_button button alt"><a
                                        href="/signin">Add
                                        to cart</a></button>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content font-size-2 container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div
                        class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab pt-9">

                        <div class="table-responsive mb-4">
                            <table class="table table-hover table-borderless">
                                <tbody>
                                    <tr>
                                        <th class="px-4 px-xl-5">Publication </th>
                                        <td class="">{{ $book->publication_id }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">ISBN</th>
                                        <td>{{ $book->ISBN_code }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Publication Date</th>
                                        <td>{{ $book->publication_year }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Edition</th>
                                        <td>{{ $book->edition }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Seller Name</th>
                                        <td>{{ $book->seller_id }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Total Stock</th>
                                        <td>{{ $book->total_stock }}</td>
                                    </tr>
                                    <tr>
                                        <th class="px-4 px-xl-5">Current Stock</th>
                                        <td>{{ $book->current_stock }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
{{-- @endforeach --}}

@include('include.footer')

<script>
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

</body>

</html>

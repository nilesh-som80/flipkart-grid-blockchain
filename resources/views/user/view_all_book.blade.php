@include('include.header')


<div class="site-content space-bottom-3" id="content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area order-2">
                <div class="position-relative mb-6 mt-6">
                    <header class="mb-5 d-md-flex justify-content-center align-items-center">
                        <h2 class="font-size-26 mb-3 mb-md-0">Recommended Books</h2>
                    </header>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                        aria-labelledby="pills-one-example1-tab">
                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6"
                            style="justify-content: flex-start;" id="books">
                            @foreach ($data as $book)
                                @include('include.box')
                            @endforeach
                        </ul>
                        <ul
                            class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6 d-flex align-item-center">
                            <button id="prev" style="border: 0; background: transparent;"><i class="fas fa-arrow-left"
                                    style="font-size: 1.2rem; color: black; padding:0px 9px;"></i>Previous</button>

                            <span id="itemsCnt"><span id="currPage">
                                </span>
                                <span id="slash">/</span>
                                <span id="totalPage">
                                </span>
                            </span>

                            <button id="next" style="border: 0; background: transparent;">Next <i
                                    class="fas fa-arrow-right"
                                    style="font-size: 1.2rem; color: black;padding:0px 9px;"></i></button>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')

<script>
    let current_page = 1;
    let last_page;
    let img;
    get_number_of_pages();

    function get_number_of_pages() {
        let keyword = GetUrlParameter('keyword');
        $.ajax({
            url: `/api/book?page=${current_page}`,
            type: "get",
            success: function(response) {
                console.log(response);
                current_page = response.current_page;
                last_page = response.last_page;
                console.log(current_page);
                console.log(last_page);
                $('#currPage').append(current_page)
                $('#totalPage').append(last_page)
            }
        })
    }

    function GetUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1);

        var sURLVariables = sPageURL.split('&');

        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }


    // console.log($(location));
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

    $(document).on('click', '.cart', function() {
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
                // alert(response);
                swal("Good job!", response, "success");
            }
        })
    })



    $('#next').click(function(event) {
        event.preventDefault();
        let keyword = GetUrlParameter('keyword');
        if (current_page === last_page) {
            swal("You are on the last page");
        } else {
            $.ajax({
                url: `/api/book?page=${current_page + 1}`,
                type: "get",
                success: function(response) {
                    console.log(response);
                    current_page = response.current_page;
                    last_page = response.last_page;
                    console.log(current_page);
                    console.log(last_page);
                    $('#currPage').empty()
                    $('#currPage').append(current_page)
                    $("#books").empty()
                    response.data.forEach((book) => {
                        if (book.image_1) {
                            img = book.image_1;
                        } else {
                            img =
                                `http://covers.openlibrary.org/b/isbn/${book.ISBN_code}-L.jpg`;
                        }
                        $('#books').append(`
                <li class="col"style="max-width: unset;
    flex: 0; min-width:230px; font-family: 'Recursive', sans-serif; font-weight:bold;">
    <div max-width =  269px   max-height= 400px class="product product__space product__space-primary border rounded-md bg-white mb-5">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
            <div
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                    <a class="d-block"><img src="${img}"
                            class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                            alt="image-description" width="180px" height="300px"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                    <div class="text-uppercase font-size-1 mb-1 text-truncate">
                        <a>${book.binding}</a>
                    </div>
                    <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="/single_product?id=${book.id}&seller_id=${book.seller_id}">

                            ${book.name}
                        </a>
                    </h2>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">${book.authors_name}</a></div>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">${book.seller_id}</a></div>
                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">₹</span>${book.discount_price}</span>
                    </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                    @auth
                        @isset($book)
                            @if ($book->current_stock == 0)
                                <p class="price font-size-25 font-weight-medium mb-3">
                                    <span class="woocommerce-Price-amount amount">OUT OF STOCK</span>
                                </p>
                            @else
                                <button class="cart" style="border: 0;
                                                                background: transparent;" data_id_1="${book.book_id}" data_id_2="${book.seller_id}"
                                    data_id_3="${book.discount_price}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </button>
                            @endif
                        @endisset

                    @else
                        <a href="/signin" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                            <span class="product__add-to-cart">ADD TO CART</span>
                            <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</li>
  `)

                    })
                }
            })
        }
    })
    $('#prev').click(function(event) {
        event.preventDefault();
        let keyword = GetUrlParameter('keyword');
        if (current_page <= 1) {
            swal('You are on the first page');
        } else {
            $.ajax({
                url: `/api/book?page=${current_page - 1}`,
                type: "get",
                success: function(response) {
                    console.log(response);
                    current_page = response.current_page;
                    last_page = response.last_page;
                    console.log(current_page);
                    console.log(last_page);
                    $('#currPage').empty()
                    $('#currPage').append(current_page)
                    $("#books").empty()
                    response.data.forEach((book) => {
                        if (book.image_1) {
                            img = book.image_1;
                        } else {
                            img =
                                `http://covers.openlibrary.org/b/isbn/${book.ISBN_code}-L.jpg`;
                        }
                        $('#books').append(`
                <li class="col" style="max-width: unset;
    flex: 0; min-width:230px; font-family: 'Recursive', sans-serif; font-weight:bold;">
    <div max-width =  269px   max-height= 400px class="product product__space product__space-primary border rounded-md bg-white mb-5">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
            <div
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                    <a class="d-block"><img src="${img}"
                            class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                            alt="image-description" width="180px" height="300px"></a>
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                    <div class="text-uppercase font-size-1 mb-1 text-truncate">
                        <a>${book.binding}</a>
                    </div>
                    <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="/single_product?id=${book.id}&seller_id=${book.seller_id}">

                            ${book.name}
                        </a>
                    </h2>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">${book.authors_name}</a></div>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">${book.seller_id}</a></div>
                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">₹</span>${book.discount_price}</span>
                    </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                    @auth
                        @isset($book)
                            @if ($book->current_stock == 0)
                                <p class="price font-size-25 font-weight-medium mb-3">
                                    <span class="woocommerce-Price-amount amount">OUT OF STOCK</span>
                                </p>
                            @else
                                <button class="cart" style="border: 0;
                                                                background: transparent;" data_id_1="${book.book_id}" data_id_2="${book.seller_id}"
                                    data_id_3="${book.discount_price}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                </button>
                            @endif
                        @endisset

                    @else
                        <a href="/signin" class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                            <span class="product__add-to-cart">ADD TO CART</span>
                            <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</li>

                `)

                    })
                }
            })
        }
    })
</script>
<style>
    #itemsCnt {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.9rem;
    }

    .addCart {
        border: 0;
        background: transparent;
    }

    .prev,
    .next {
        font-size: 1.5rem;

    }

    .next i,
    .prev i {
        padding: 20px 2px;
    }
    .manage-width{
        min-width: 230px!important;
    }
</style>
</body>

</html>

<li class="col  manage-width"style="max-width: unset;
    flex: 0; min-width:250px; font-family: 'Recursive', sans-serif; font-weight:bold;">
    <div class=" product product__space product__space-primary border rounded-md bg-white mb-5">
        <div class="product__inner overflow-hidden p-3 p-md-4d875">
            <div
                class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                <div class="woocommerce-loop-product__thumbnail">
                    @if ($book->image_1)
                    <a class="d-block"><img src="{{ $book->image_1 }}"
                        class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                        alt="image-description"></a>
                    @else
                    <a class="d-block"><img src="http://covers.openlibrary.org/b/isbn/{{$book->ISBN_code}}-L.jpg"
                        class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                        alt="image-description"></a>
                    @endif
                </div>
                <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                    <div class="text-uppercase font-size-1 mb-1 text-truncate">
                        <a>{{ $book->binding }}</a>
                    </div>
                    <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="/single_product?id={{ $book->id }}&seller_id={{$book->seller_id }}">{{ $book->name }}</a>
                    </h2>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">{{ $book->authors_name }}</a></div>
                    <div class="font-size-2  mb-1 text-truncate"><a
                            class="text-gray-700">{{ $book->seller_id }}</a></div>
                    <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">₹</span>{{ $book->discount_price }}</span>
                    </div>
                </div>
                <div class="product__hover d-flex align-items-center">
                    @auth
                        @if ($book->current_stock == 0)
                            <p class="price font-size-25 font-weight-medium mb-3">
                                <span class="woocommerce-Price-amount amount">OUT OF STOCK</span>
                            </p>
                        @else
                            <button class="cart" data_id_1="{{ $book->book_id }}" style = "border: 0;
        background: transparent;"
                                data_id_2="{{ $book->seller_id }}"
                                data_id_3="{{ $book->discount_price }}"
                                class="text-uppercase text-dark h-dark font-weight-medium mr-auto addCart">
                                <span class="product__add-to-cart">ADD TO CART</span>
                                <span class="product__add-to-cart-icon font-size-4"><i
                                        class="flaticon-icon-126515"></i></span>
                            </button>
                        @endif
                    @else
                        <a href="/signin"
                            class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                            <span class="product__add-to-cart">ADD TO CART</span>
                            <span class="product__add-to-cart-icon font-size-4"><i
                                    class="flaticon-icon-126515"></i></span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</li>

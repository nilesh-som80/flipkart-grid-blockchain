@include('include.header')

<div class="site-content space-bottom-3" id="content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area order-2">
                <div class="position-relative mb-6">
                    <header class="mb-5 d-md-flex justify-content-between align-items-center">
                        <h2 class="font-size-26 mb-3 mb-md-0" style="color: white">Recommended Books</h2>
                    </header>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                        aria-labelledby="pills-one-example1-tab">

                        <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-left mb-6"
                            id="books" style="border: none">
                            @foreach ($data as $book)
                                @include('include.box')
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

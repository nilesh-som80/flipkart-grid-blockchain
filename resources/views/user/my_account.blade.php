{{-- @php
    dd($data);
@endphp --}}

@include('include.header')

<main id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 border-right">
                <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">My account</h6>
                <div class="tab-wrapper">
                    <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab"
                                data-toggle="pill" href="#pills-one-example1" role="tab"
                                aria-controls="pills-one-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600"
                                    style="display: flex;justify-content:center">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab"
                                data-toggle="pill" href="#pills-two-example1" role="tab"
                                aria-controls="pills-two-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab"
                                data-toggle="pill" href="#pills-four-example1" role="tab"
                                aria-controls="pills-four-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Addresses</span>
                            </a>
                        </li>
                        <li class="nav-item mx-0">
                            <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab"
                                data-toggle="pill" href="#pills-five-example1" role="tab"
                                aria-controls="pills-five-example1" aria-selected="false">
                                <span class="font-weight-normal text-gray-600">Add Addresses</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                        aria-labelledby="pills-one-example1-tab">
                        <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
                            <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
                                <div class="col">
                                    <div class="border py-6 text-center">
                                        <a href="#pills-two-example1" class="btn btn-primary rounded-circle px-4 mb-2"
                                            style="background-color: blueviolet;border:none">
                                            <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Orders</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#pills-four-example1" class="btn bg-gray-200 rounded-circle px-4 mb-2"
                                            style="background-color: blueviolet">
                                            <span class="flaticon-place font-size-10 btn-icon__inner fbas"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1">Addresses</div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="border border-left-0 py-6 text-center">
                                        <a href="#pills-five-example1" class="btn bg-gray-200 rounded-circle px-4 mb-2"
                                            style="background-color: blueviolet">
                                            <span class="flaticon-place font-size-10 btn-icon__inner fbas"></span>
                                        </a>
                                        <div class="font-size-3 mb-xl-1"> Add Address</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-two-example1" role="tabpanel"
                        aria-labelledby="pills-two-example1-tab">
                        <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
                            <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Orders</h6>
                            <table class="table">
                                <thead>
                                    <tr class="border">
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Bill Number</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Order ID</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Book Name</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Seller Name</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Shipment
                                            Tracking ID</th>
                                        <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_1 as $order)
                                        <tr class="border">
                                            <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                                                {{ $order->bill_number }}</th>
                                            <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                                                {{ $order->order_id }}</th>
                                            <td class="align-middle py-5">{{ $order->name }}({{ $order->book_id }})
                                            </td>
                                            <td class="align-middle py-5">{{ $order->seller_id }}</td>
                                            @if ($order->shipment_tracking_id)
                                                <td class="align-middle py-5">{{ $order->shipment_tracking_id }}</td>
                                            @else
                                                <td class="align-middle py-5">Yet To Dispatch</td>
                                            @endif
                                            <td class="align-middle py-5">{{ $order->address }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-four-example1" role="tabpanel"
                        aria-labelledby="pills-four-example1-tab">
                        <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-2 mb-lg-4">
                            <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-5 mb-lg-8 pb-xl-1">Addresses</h6>
                            <div class="row row-cols-1 row-cols-md-2">
                                @foreach ($data as $address)
                                    <div class="col">
                                        <div class="mb-6 mb-md-0">
                                            <address class="d-flex flex-column mb-4">
                                                <span class="text-black font-size-10">{{ Auth::user()->name }}</span>
                                                <span class="text-gray-600 font-size-2">{{ $address->address }}</span>
                                            </address>
                                            <div class="d-flex">
                                                <button type="submit"
                                                    class="btn btn-dark width-150 rounded-0 btn-wide font-weight-medium delete"
                                                    data_id="{{ $address->id }}">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-five-example1" role="tabpanel"
                        aria-labelledby="pills-five-example1-tab">
                        <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
                            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Account Details
                                </h6>
                                <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Edit Account</div>
                                <form method="post" id="form">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="js-form-message">
                                                <label for="exampleFormControlInput1">Address</label>
                                                <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3"
                                                    id="name" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <button type="submit"
                                            class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


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
    $('#form').on("submit", async function(event) {
        event.preventDefault();
        var data = {};
        data['user_id'] = "{{ Auth::user()->user_id }}";
        data['address'] = $('#name').val();
        console.log(data);
        // alert("hello!");
        $.ajax({
            url: "/api/userAddress",
            type: "POST",
            data: data,
            success: function(response) {
                swal("You are Good to go","Address Added Successfully","success")
            }
        })
    })

    $('.delete').on("click", function(event) {
        // alert($(this).attr("data_id"));
        $.ajax({
            url: "/api/userAddress/".concat($(this).attr("data_id")),
            type: "DELETE",
            success: function(response) {
                swal(response);
                location.reload();
            }
        })
    })
</script>
<style>
    .fbas {
        color: white;
    }

</style>

</body>

</html>

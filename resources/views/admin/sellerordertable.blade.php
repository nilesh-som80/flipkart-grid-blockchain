{{-- @php
    dd($data);
@endphp --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <!-- App css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="./plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script>
        fetch('/api/order')
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                Array.from(data).forEach(element => {
                    const sData = document.querySelector('#Show')
                    let newelement = document.createElement('tr')
                    newelement.innerHTML = `<td>${element.user_id}</td><td>${element.address_id}</td>
            <td>${element.order_id}</td><td>${element.shipment_tracking_id}</td><td>${element.timestamp_of_purchase}</td>
            <td>${element.bought}</td>`
                    sData.appendChild(newelement);
                    console.log(newelement)
                })
            });
    </script> --}}
</head>

<body>
    @include('include.admin_sidebar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Datatable</h4>
                            <p class="text-muted mb-0">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>User ID</th>
                                        <th>User</th>
                                        <th>Address ID</th>
                                        <th>Address</th>
                                        <th>Timestamp</th>
                                        <th>Seller Name</th>
                                        <th>Selling Price</th>
                                        <th>Book Name</th>
                                    </tr>
                                </thead>

                                <tbody id="Show">
                                    @foreach ($data as $order)
                                        <tr>
                                            <td>{{ $order->order_id }}</td>
                                            <td>{{ $order->user_id }}</td>
                                            <td>{{ $order->user_name }}</td>
                                            <td>{{ $order->address_id }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->timestamp_of_purchase }}</td>
                                            <td>{{ $order->seller_id }}</td>
                                            <td>{{ $order->selling_price }}</td>
                                            <td>{{ $order->book_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- container -->

            <footer class="footer text-center text-sm-start">
                <script>
                    document.write(new Date().getFullYear())
                </script> Entrepreneurship-Cell <span
                    class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                        class="mdi mdi-heart text-danger"></i> by MANIT Students</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/metismenu.min.js"></script>
    <script src="./assets/js/waves.js"></script>
    <script src="./assets/js/feather.min.js"></script>
    <script src="./assets/js/simplebar.min.js"></script>
    <script src="./assets/js/moment.js"></script>
    <script src="./plugins/daterangepicker/daterangepicker.js"></script>

    <!-- App js -->
    <script src="./assets/js/app1.js"></script>

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

</body>

</html>

<script>
    $(".more-btn").on('click', function() {
        window.location.assign('/orderDetail/'.concat($(this).attr("data-id-1")));
        // alert('/showtable/'.concat($(this).attr("data-id-1")).concat("/").concat($(this).attr("data-id-2")))
    })
</script>

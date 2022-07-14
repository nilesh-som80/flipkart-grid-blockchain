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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>


</head>

<body>
    @include('include.admin_sidebar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>

                                    <tr>
                                        <!-- <th></th> -->
                                        <th>Book Id</th>
                                        <th>Book name</th>
                                        <th>Seller Name</th>
                                        <th></th>
                                    </tr>


                                </thead>

                                <tbody id="Show">
                                    @foreach ($data as $books)
                                        <tr>
                                            <td>{{ $books->book_id }}</td>
                                            <td>{{ $books->name }}</td>
                                            <td>{{ $books->seller_id }}</td>
                                            <td><button type="button" data-id-1="{{ $books->book_id }}"
                                                    data-id-2="{{ $books->seller_id }}"
                                                    class="btn btn-success more-btn">more</button>

                                                <button type="button" class=" btn btn-primary del"
                                                    data-id="{{ $books->id }}">Delete</button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end page title end breadcrumb -->


        </div><!-- container -->

        <footer class="footer text-center text-sm-start">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> Entrepreneurship-Cell <span class="text-muted d-none d-sm-inline-block float-end">Crafted
                with <i class="mdi mdi-heart text-danger"></i> by MANIT Students</span>
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

    @if (session('status'))
        <script>
            alert("{{ session('status') }}");
        </script>
    @endif
    <script>
        $(".more-btn").on('click', function() {
            window.location.assign('/showtable/'.concat($(this).attr("data-id-1")).concat("/").concat($(this).attr(
                "data-id-2")));
            // alert('/showtable/'.concat($(this).attr("data-id-1")).concat("/").concat($(this).attr("data-id-2")))
        })
        $(".del").on('click', function() {
            console.log($(this).attr('data-id'));

            $.ajax({
                url: "/api/book/".concat($(this).attr('data-id')),
                type: "DELETE",
                success: function(response) {
                    alert(response);
                    location.reload(true);
                }
            })
        })
    </script>
</body>

</html>

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
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
    @include('include.admin_sidebar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!--end card-header-->
            <div class="d-flex w-100 h-100">
                <div class="w-40 d-flex ml-1" style="    margin-top: 76px;
                                    margin-left: 62px;">
                    <img src="{{ $book->image_1 }}" alt="" width="150px" height="150px">
                </div>
                <div class="w-60" style="width: 80%; text-align: center ;">
                    <div class="d-flex w-100 flex-column justify-content-center">
                        <div class="d-flex w-100 justify-content-around mt-2 md-2">
                            <h2 style="font-weight: 600;">{{ $book->name }}</h2>
                            <div class="buttons">
                                <button type="button" " class=" btn btn-secondary btn-sm">Small button</button>
                            </div>
                        </div>
                        <div class="details-book d-flex justify-content-center">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 20; width: 80%;">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->

                                        <th>Field name</th>
                                        <th>field value</th>


                                    </tr>
                                </thead>
                                <tbody id="Show">
                                    <td>book_id</td>
                                    <td>{{ $book->book_id }}</td>

                                </tbody>

                                <tbody id="Show">
                                    <td>name</td>
                                    <td>{{ $book->name }}</td>

                                </tbody>
                                <tbody id="Show">
                                    <td>pubilcation id</td>
                                    <td>{{ $book->publication_id }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>ISBN_code</td>
                                    <td>{{ $book->ISBN_code }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>publication_year</td>
                                    <td>{{ $book->publication_year }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>edition</td>
                                    <td>{{ $book->edition }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>image _1</td>
                                    <td><img width="100px" height="100px" src="{{ $book->image_1 }}" alt=""></td>


                                </tbody>
                                <tbody id="Show">
                                    <td>image_2</td>
                                    <td><img width="100px" height="100px" src="{{ $book->image_2 }}" alt=""></td>


                                </tbody>
                                <tbody id="Show">
                                    <td>authors_name</td>
                                    <td>
                                        {{$book->authors_name}}
                                    </td>

                                </tbody>
                                <tbody id="Show">
                                    <td>categories_name</td>
                                    <td>
                                        {{$book->categories_name}}
                                    </td>

                                </tbody>
                                <tbody id="Show">
                                    <td>seller_id</td>
                                    <td>{{ $book->seller_id }}</td>

                                </tbody>
                                <tbody id="Show">
                                    <td>price</td>
                                    <td>{{ $book->price }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>discount_price</td>
                                    <td>{{ $book->discount_price }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>discount_percente</td>
                                    <td>{{ $book->discount_percent }}</td>


                                </tbody>
                                <tbody id="Show">
                                    <td>old_or_new</td>
                                    <td>{{ $book->old_or_new }}</td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- container -->

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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/metismenu.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>
    <script src="/assets/js/moment.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- App js -->
    <script src="/assets/js/app1.js"></script>

</body>

</html>

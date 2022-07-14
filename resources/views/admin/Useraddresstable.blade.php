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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        // fetch('/api/userAddress')
        //     .then(response => response.json())
        //     .then(data => {
        //         console.log(data);
        //         Array.from(data).forEach(element => {
        //             const sData = document.querySelector('#Show')
        //             let newelement = document.createElement('tr')
        //             newelement.innerHTML = `<td>${element.user_id}</td>
        //                     <td>${element.address_id}</td><td>${element.address}</td>`
        //             sData.appendChild(newelement);
        //             console.log(newelement)
        //         })
        //     });
        // $(document).ready(function() {
        //     $('#datatable').DataTable();
        // });
    </script>
</head>

<body>
    @include('include.admin_sidebar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Address ID</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Mobile</th>

                                    </tr>
                                </thead>
                                <tbody id="Show">
                                        @foreach ($data as $user)
                                        <tr>
                                            <td>{{$user->user_id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->address_id}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->mobile}}</td>
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Buttons examples -->
    <script src="/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/metismenu.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/feather.min.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>
    <script src="/assets/js/moment.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- App js -->
    <script src="./assets/js/app1.js"></script>
</body>

</html>

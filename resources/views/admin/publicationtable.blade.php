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
    <script>
        fetch('/api/publication')
            .then(response => response.json())
            .then((data) => {
                console.log(data);
                Array.from(data).forEach(element => {
                    const sData = document.querySelector('#Show')
                    let newelement = document.createElement('tr')
                    newelement.innerHTML = `<td>${element.name}</td><td>${element.publication_id}</td>`
                    sData.appendChild(newelement);
                    console.log(newelement)
                })
            });
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
                                        <!-- <th></th> -->

                                        <th>Publication name</th>

                                        <th>Publication Id</th>

                                    </tr>
                                </thead>

                                <tbody id="Show">

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div><!-- container -->

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

</body>

</html>

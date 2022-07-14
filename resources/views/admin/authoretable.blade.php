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

    </script>
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
                        <div class="card-header">
                            <h4 class="card-title">Default Datatable</h4>
                            <p class="text-muted mb-0">DataTables has most features enabled by
                                default, so all you need to do to use it with your own tables is to call
                                the construction function: <code>$().DataTable();</code>.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                      <!-- <th></th> -->
                                      <th>Authore Name</th>
                                      <th>Authore Id</th>
                                      <th></th>


                                    </tr>
                                  </thead>


                                  <tbody id = "Show">

                                  @foreach ( $author as $auth)

                                      <tr>
                                          <td>{{$auth->author_id}}</td>
                                          <td>{{$auth->name}}</td>
                                          <td><button type="button" class="btn btn-light del"  data-id="{{ $auth->id }}" >delete</button></td>
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
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Entrepreneurship-Cell <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                    class="mdi mdi-heart text-danger"></i> by MANIT Students</span>
        </footer><!--end footer-->
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
    <script>

$(".del").on('click', function () {
            console.log($(this).attr('data-id'));

            $.ajax({
                url: "/api/author/".concat($(this).attr('data-id')),
                type: "DELETE",
                success: function (response) {
                    alert(response);
                    location.reload(true);
                }
            })
        })
    </script>

</body>


</html>

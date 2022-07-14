<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Address</title>
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

</head>

<body>
    @include('include.admin_sidebar')

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">


                            <form class="w-100" method="post" action="/api/userAddress" id="UserAddress">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">User Address<span
                                                    class="badge bg-soft-success font-12">New</span></h4>
                                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Voluptates, atque!</p>
                                        </div>
                                        <!--end card-header-->
                                        <div
                                            class="card-body d-flex justify-content-center align-items-center flex-column">
                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" class="form-control" id="UsID"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">User ID</label>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" class="form-control" id="Address"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Address</label>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                        <!--end card-body-->
                                    </div>
                                    <!--end card-->
                                </div>
                            </form>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
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
    <script>
        $("#UserAddress").on("submit", async function(event) {
            event.preventDefault();
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            let form_data = {}
            form_data['user_id'] = $("#UsID").val();
            form_data['address'] = $("#Address").val();


            $.ajax({
                url: post_url,
                type: request_method,
                data: form_data,
                success: function(response) {
                    console.log(response)
                    swal("Good job!", "Added Successfull!!", "success");
                },
                error: (e) => {
                    console.log(e)
                    swal("Try Again", "Some error Occured", "error");

                }
            })
        });
    </script>

</body>

</html>

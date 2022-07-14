<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Seller's Books'</title>
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
        fetch('/api/book')
            .then(response => response.json())
            .then((data) => {
                (Array.from(data)).forEach((element) => {
                    console.log(data)
                    console.log(element.book_id)
                    let el = document.createElement('option')
                    el.setAttribute('value', `${element.book_id}`)
                    el.innerHTML = `${element.name}(${element.book_id})`
                    console.log(el)
                    document.getElementById('bookID').appendChild(el)
                    el.addEventListener('click', () => {

                    })
                })
            });
    </script>
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

                            <form class="w-100" method="post" id="Seller-book" action="/api/sellersBook">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Seller Book<Details></Details><span
                                                    class="badge bg-soft-success font-12">New</span></h4>
                                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Voluptates, atque!</p>
                                        </div>
                                        <!--end card-header-->


                                        <div
                                            class="card-body d-flex justify-content-center align-items-center flex-column">

                                            <div class="d-flex w-100">
                                                <div class="form-floating mb-3 w-100">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Password">
                                                    <label for="SellerId">Seller Name</label>
                                                </div>
                                                <div class="form-floating mb-3 w-100">
                                                    <select class="form-select mb-3" aria-label="Default select example"
                                                        id="bookID">
                                                        <option selected>Select Books</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="d-flex w-100">
                                                <select class="form-select mb-3" aria-label="Default select example"
                                                    id="OldNEw">
                                                    <option value="New" selected>New</option>
                                                    <option value="Old">Old</option>
                                                </select>
                                            </div>
                                            <div class="d-flex w-100">
                                                <div class="form-floating mb-3 w-100">
                                                    <input type="number" class="form-control" id="Price"
                                                        placeholder="name@example.com">
                                                    <label>Price</label>
                                                </div>
                                                <div class="form-floating mb-3 w-100">
                                                    <input type="number" class="form-control" id="DPrice"
                                                        placeholder="name@example.com">
                                                    <label>Discount Price</label>
                                                </div>
                                                <div class="form-floating mb-3 w-100">
                                                    <input readonly type="number" class="form-control" id="PercentD"
                                                        placeholder="name@example.com">
                                                    <label>Discount Percentage</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" class="form-control" id="Binding"
                                                    placeholder="name@example.com">
                                                <label for="BookId">Binding</label>
                                            </div>

                                            <div class="d-flex w-100">
                                                <div class="form-floating mb-3 w-100">
                                                    <input type="number" class="form-control" id="CStock"
                                                        placeholder="name@example.com">
                                                    <label for="BookId">Current Stock</label>
                                                </div>
                                                <div class="form-floating mb-3 w-100">
                                                    <input type="number" class="form-control" id="TStock"
                                                        placeholder="name@example.com">
                                                    <label for="BookId">Total Stock</label>
                                                </div>
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
        $("#Seller-book").on("submit", async function(event) {
            event.preventDefault();
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            let form_data = {}
            let dp = $("#DPrice").val();
            let p = $("#Price").val();
            let a = (1- (dp / p))*100;
            form_data['seller_id'] = $("#name").val();
            form_data['book_id'] = $("#bookID").val();
            form_data['price'] = $("#Price").val();
            form_data['discount_price'] = $("#DPrice").val();
            form_data['discount_percent'] = a;
            form_data['old_or_new'] = $('#OldNEw').val();
            form_data['binding'] = $("#Binding").val();
            form_data['current_stock'] = $("#CStock").val();
            form_data['total_stock'] = $("#TStock").val();
            $.ajax({
                url: post_url,
                type: request_method,
                data: form_data,
                success: function(response) {
                    console.log(response)
                    swal("Good job!", "Added Successfull!!", "success");
                },
                error: () => {
                    swal("Try Again", "Some error Occured", "error");

                }
            })
        });
    </script>

</body>

</html>

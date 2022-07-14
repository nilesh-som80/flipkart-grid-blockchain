<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Books</title>
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
    @php

        $i = 0;

    @endphp

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <form action="/choose_category" method="POST">
                @csrf
                @foreach ($data as $Author)
                    <div class="form-check mt-5">
                        <input class="form-check-input" name="author[{{ $i }}]" type="checkbox"
                            value="{{ $Author->author_id }}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $Author->name }}
                        </label>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach

                <input type="hidden" name="book_id" value="{{ $book_id }}">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
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

    <!-- App js -->
    <script src="./assets/js/app1.js"></script>
    <script>
        $("#AddBooks").on("submit", async function(event) {
            event.preventDefault();
            var post_url = $(this).attr("action");
            var request_method = $(this).attr("method");
            let form_data = {}
            form_data['name'] = $("#name").val();
            form_data['publication_id'] = $("#pubId").val();
            form_data['ISBN_code'] = $("#ISBN").val();
            form_data['publication_year'] = $("#Pubyrs").val();
            form_data['edition'] = $("#Edition").val();
            form_data['image_1'] = $("#Img1").val();
            form_data['image_2'] = $("#Img2").val();

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
    </script> -->

</body>

</html>

@include('include.header')


<section class="paymentfailed">
    <div class="innerpayment">

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="payment">
                        <div class="payment_header">
                            <div class="check"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>
                        </div>
                        <div class="content">
                            <h1>Opps ! Something Went Wrong</h1>
                            <p>If your amount has been deducted feel free to contact us </p>
                            <a href="/">Go to Home</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.footer')

<script>
    getAddress();
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

    function getAddress() {
        $.ajax({
            url: '/api/addressByUserId',
            data: {
                "user_id": "{{ Auth::user()->user_id }}"
            },
            method: 'get',
            success: function(response) {
                console.log(response);
                response.forEach(address => {
                    $('#address').append(
                        `<option value="${address.address_id}">${address.address}</option>`
                    )
                })
            }
        })
    }
</script>


    <style type="text/css">
    .container
    {
        margin-bottom: 30px
    }

        body
        {
            background:#f2f2f2;
        }

        .payment
	    {
		    border:1px solid #f01b1b;
		    height:280px;
            border-radius:20px;
            background:#fff;
	    }
       .payment_header
       {
	       background:#f01b1b;
	       padding:20px;
           border-radius:20px 20px 0px 0px;

       }

       .check
       {
	       margin:0px auto;
	       width:50px;
	       height:50px;
	       border-radius:100%;
	       background:#fff;
	       text-align:center;
       }

       .check i
       {
	       vertical-align:middle;
	       line-height:50px;
	       font-size:30px;
       }

        .content
        {
            text-align:center;
        }

        .content  h1
        {
            font-size:25px;
            padding-top:25px;
        }

        .content a
        {
            width:200px;
            height:35px;
            color:#fff;
            border-radius:30px;
            padding:5px 10px;
            background:#f01b1b;
            transition:all ease-in-out 0.3s;
        }

        .content a:hover
        {
            text-decoration:none;
            background:#000;
        }

    </style>
</body>

</html>


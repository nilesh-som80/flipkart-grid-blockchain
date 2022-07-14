<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="shortcut icon" href="/assets/img/E_cellLogo.png" type="image/png">
    <title>E-Carnival | Book Fair</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form class="sign-in-form" method="POST" action="/register" >
                    @csrf
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name" name="name"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        {{-- <label>Password must be at least 8 characters long</label> --}}
                        <input type="password" placeholder="Password must be at least 8 characters long" name="password"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Type your password again" name="password_confirmation"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Mobile Number" name="mobile"/>
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <a href="/signin"><input class="btn" value="                Login" /></a>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <img src="/assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <img src="/assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="/assets/js/app.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="/assets/img/E_cellLogo.png" type="image/png">
    <title>E-Carnival | Book Fair</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="/login" class="sign-in-form" method="POST">
                    @csrf
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password"/>
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <a href="/signup"><input value="              Register" class="btn solid" /></a>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <img src="/public/assets/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <img src="/public/assets/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="/public/assets/js/app.js"></script>
</body>

</html>

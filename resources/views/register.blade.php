<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title"
                    style="background-image: url(images/backgrounds/background-03-1920x800.jpg);">
                    <span class="login100-form-title-1">
                        Register
                    </span>
                </div>

                <form class="login100-form validate-form" method="post" action="/users" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Name</span>
                        <input class="input100" type="text" name="name" placeholder="Enter name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror


                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Confirm Password</span>
                        <input class="input100" type="password" name="password_confirmation"
                            placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-18" >
                        <span class="label-input100">Picture</span>
                        <input class="input100" type="file" name="picture">
                        <span class="focus-input100"></span>
                    </div>
                    @error('picture')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror



                    <div class="container-login100-form-btn">
                        <button type="submit" style="margin-left: 70px;" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                    <div>
                        <a href="/login" class="txt1" style="margin-left: 110px; margin-bottom: -50px">
                            Login now
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Open the book of life</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/images/fav_icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/clean_login_form/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
                <form class="form-horizontal login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-70">
						Open the book of life
					</span>
                <span class="login100-form-avatar">
						<img src="assets/images/logo.png" alt="AVATAR">
					</span>

                <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Username"></span>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block"  style="color:red">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif

                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block" style="color:red">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Open
                    </button>
                </div>

                <ul class="login-more p-t-190">
                    <li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

                        <a href="#" class="txt2">
                            Username / Password?
                        </a>
                    </li>

                    <li>
							<span class="txt1">
								Don’t have an account?
							</span>
                        <button type="submit" class="btn txt2">Sign in!</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/bootstrap/js/popper.js"></script>
<script src="assets/clean_login_form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/clean_login_form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="assets/clean_login_form/js/main.js"></script>

</body>
</html>
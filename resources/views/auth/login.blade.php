<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/loginform/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/loginform/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/loginform/css/form-elements.css">
    <link rel="stylesheet" href="assets/loginform/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/loginform/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/loginform/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/loginform/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/loginform/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/loginform/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1 class="text-uppercase"><strong>Hacker's e-jotter</strong></h1>
                    <div class="description">
                        <p>
                            Don't go where the path may lead
                            Go instead where there's no path <a href="http://azmind.com"><strong>and leave a trail</strong></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="email" placeholder="Username..." class="username form-control" id="form-username">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 social-login">
                    <h3>...or login with:</h3>
                    <div class="social-login-buttons">
                        <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                            <i class="fa fa-google-plus"></i> Google Plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<!-- Javascript -->
<script src="assets/loginform/js/jquery-1.11.1.min.js"></script>
<script src="assets/loginform/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/loginform/js/jquery.backstretch.min.js"></script>
<script src="assets/loginform/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="assets/loginform/js/placeholder.js"></script>
<![endif]-->

</body>

</html>
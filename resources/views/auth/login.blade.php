<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{!! asset('assets/img/favicon.ico') !!}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>MyAmbition.lk DashBoard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="{!! asset('assets/css/bootstrap.min.css" rel="stylesheet')!!}"/>

    <!-- Animation library for notifications   -->
    <link href="{!! asset('assets/css/animate.min.css')!!}'" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{!! asset('assets/css/dashboard.css')!!}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"/>

</head>
<body class="background">

<div class="full-page login-page" data-color="orange" data-image="assets/img/bg3.jpg">

    <div class="main-panels">

        <div class="container">

            <div class="" id="login-wrapper">
                <div class="row">
                    <div class="col-md-4 ">
                        <div id="logo-login">
                            <h1 style="margin: 0;padding: 5px; color: white;">MyAmbition.lk</h1>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <div class="account-box">

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <!--<a href="#" class="pull-right label-forgot">Forgot email?</a>-->
                                    <!--<label for="inputUsernameEmail">Username or email</label> -->
                                    <input type="text" id="inputUsernameEmail"
                                           class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
                                           name="email" placeholder="Username or email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <!--<a href="#" class="pull-right label-forgot">Forgot password?</a>-->
                                    <!--<label for="inputPassword">Password</label>-->
                                    <input type="password" id="inputPassword"
                                           class="form-control{{ $errors->has('password') ? ' has-error' : '' }}"
                                           name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <!--<div class="checkbox  form-group">-->

                                <!--<label><input type="checkbox">Remember me</label>-->
                                <!--</div>-->
                                <div class="col-md-12  row-block form-group" style="padding: 0;">
                                    <button class="btn btn btn-primary btn-block" type="submit"
                                            style=" border-color: #FFFFFF; color: #FFFFFF; ">Log In
                                    </button>

                                </div>
                            </form>

                            <a class="forgotLnk" href="index.html"></a>
                            <div class="or-box">


                                <div class="row">
                                    <div class="col-md-12 row-block">
                                        <p style="text-align: center; color: white;"> Or Sign in with</p>
                                    </div>
                                    <div class="col-md-6 row-block">
                                        <a href="" class="btn btn-facebook btn-block"
                                           style=" border-color: #FFFFFF; color: #FFFFFF; ">
                                            <i class="fa fa-facebook"></i>Facebook</a>
                                    </div>
                                    <div class="col-md-6 row-block">
                                        <a href="" class="btn btn-twitter btn-block"
                                           style=" border-color: #FFFFFF; color: #FFFFFF; ">
                                            <i class="fa fa-twitter"></i></span>Twitter</a>

                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class="row-block">
                                <div class="row">
                                    <div class="col-md-12 row-block">
                                        <p style="text-align: center; color: white;"> New to MyAmbition?</p>
                                    </div>
                                    <div class="col-md-12 row-block">
                                        <form class="" role="form" method="POST" action="{{ url('/register') }}">
                                            {!! csrf_field() !!}

                                        <div class="form-group col-md-6" style="padding: 0 2px;">

                                                <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                                       value="{{ old('first_name') }}">

                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('first_name') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6" style="padding: 0;">

                                                <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                                       value="{{ old('last_name') }}">

                                                @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('last_name') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">

                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('email') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                    <strong>
                                                        {{ $errors->first('phone') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6" style="padding: 0 2px;">
                                                    <input type="password" class="form-control" name="password">

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group col-md-6" style="padding: 0 2px;">
                                                <input type="password" class="form-control" name="password_confirmation">

                                                @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-12" style="padding: 0 2px;">
                                                <select class="form-control" name="gender">
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>

                                            </div>

                                            <div class="form-group col-md-2" style="padding: 0 2px;">
                                                <input type="checkbox" class="form-control ">
                                            </div>
                                            <div class="form-group col-md-10" style="padding: 0 2px;">
                                                <p style=" margin-bottom: 0px; padding-top: 11px; color: white;">Agree
                                                    Terms and Conditions</p>
                                            </div>

                                            <div class="col-md-12 row-block">
                                                <button type="submit" class="btn btn-primary btn-block"
                                                        style=" border-color: #FFFFFF; color: #FFFFFF; ">Create New Account</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="text-align:left;margin:0 auto; color: #cecdc4; text-transform: none;">
                <h6>About | Terms & Conditions </h6>

            </div>

        </div>
    </div>

</div>


</body>

<!--   Core JS Files   -->
<script src="{!! asset('assets/js/jquery-1.10.2.js')!!}" type="text/javascript"></script>
<script src="{!! asset('assets/js/bootstrap.min.js')!!}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{!! asset('assets/js/bootstrap-checkbox-radio-switch.js')!!}"></script>

<!--  Charts Plugin -->
<script src="{!! asset('assets/js/chartist.min.js')!!}"></script>

<!--  Notifications Plugin    -->
<script src="{!! asset('assets/js/bootstrap-notify.js')!!}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{!! asset('assets/js/dashboard.js')!!}"></script>

</html>

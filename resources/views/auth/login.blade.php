
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2017 23:24:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin Login</title>
    <!-- Bootstrap Core CSS -->
    
     {!! Html::style('bootstrap/dist/css/bootstrap.min.css') !!}
    
     {!! Html::style('plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') !!}
    <!-- animation CSS -->
    
     {!! Html::style('css/animate.css') !!}
    <!-- Custom CSS -->
   
     {!! Html::style('css/style.css') !!}
    <!-- color CSS -->
   
     {!! Html::style('css/colors/default-dark.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">

                    {{ csrf_field() }}
                    <h3 class="box-title m-b-20">Sign In</h3>



                    
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="col-xs-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" autofocus>


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                    

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="col-xs-12">

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>







                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
                    </div>




                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                            <div class="social">
                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Don't have an account? <a href="register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        </div>
                    </div> -->
                </form>
                <form class="form-horizontal" id="recoverform" action="http://eliteadmin.themedesigner.in/demos/eliteadmin-dark/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
     {!! Html::script('plugins/bower_components/jquery/dist/jquery.min.js') !!}
    
    <!-- Bootstrap Core JavaScript -->
   
    {!! Html::script('bootstrap/dist/js/tether.min.js') !!}
  
    {!! Html::script('bootstrap/dist/js/bootstrap.min.js') !!}
  
    {!! Html::script('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js') !!}
    <!-- Menu Plugin JavaScript -->
   
    {!! Html::script('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}
    <!--slimscroll JavaScript -->
   
    {!! Html::script('js/jquery.slimscroll.js') !!}
    <!--Wave Effects -->
  
    {!! Html::script('js/waves.js') !!}
    <!-- Custom Theme JavaScript -->
   
    {!! Html::script('js/custom.min.js') !!}
    <!--Style Switcher -->
    
    {!! Html::script('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2017 23:24:31 GMT -->
</html>


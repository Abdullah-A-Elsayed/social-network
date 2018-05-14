<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Zipline</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Zipline.com" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="{{url('')}}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{url('')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{url('')}}/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{url('')}}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{url('')}}/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{url('')}}/assets/logos/logo4.png" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/">
                <img src="{{url('')}}/assets/logos/logo3.png" alt="" style="max-height: 150px;" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" method="POST" action="{{url('')}}/login">
                {{ csrf_field() }}
                <h3 class="form-title font-green">{{isset($text['signin']) ? $text['signin'] : 'Sign In'}}</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>{{isset($text['enteranyemailandpassword.']) ? $text['enteranyemailandpassword.'] : 'Enter any email and password.'}}  </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{isset($text['email']) ? $text['email'] : 'email'}}</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email" /> 
                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{isset($text['password']) ? $text['password'] : 'Password'}}</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
               
                <div class="form-actions">
                    <button id="login" type="submit" class="btn green uppercase">{{isset($text['login']) ? $text['login'] : 'Login'}}</button>
                   
                    <!-- <a  href="http://127.0.0.1:8000/register" id="register" type="submit" class="btn green uppercase">{{isset($text['register']) ? $text['register'] : 'Register'}}</a> -->


                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />{{isset($text['remember']) ? $text['remember'] : 'Remember'}}
                               <span></span>
                    </label>
                    <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">{{isset($text['forgotpassword?']) ? $text['forgotpassword?'] : 'Forgot Password?'}}</a>
                </div>


            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p>{{isset($text['Enteryoure-mailaddressbelowtoresetyourpassword.']) ? $text['Enteryoure-mailaddressbelowtoresetyourpassword.'] : 'Enter your e-mail address below to reset your password. '}} </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">{{isset($text['back']) ? $text['back'] : 'Back'}}</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">{{isset($text['submit']) ? $text['submit'] : 'Submit'}}</button>
                </div>
            </form>
        

        </div>
        <div class="copyright"> 2017 &copy; </div>
        <!--[if lt IE 9]>
<script src="{{url('')}}/assets/global/plugins/respond.min.js"></script>
<script src="{{url('')}}/assets/global/plugins/excanvas.min.js"></script> 
<script src="{{url('')}}/assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{url('')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{url('')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{url('')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{url('')}}/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Twseel</title>
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{asset('assets/layouts/layout/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/layouts/layout/css/themes/darkblue-rtl.min.css')}}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{asset('assets/layouts/layout/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/login-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/img/logo.png')}}" rel="shortcut icon">
</head>

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{url('home')}}">
        <img width="200" src="{{asset('assets/img/logo.png')}}" alt=""/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h3 class="form-title font-green">تسجيل الدخول</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> ادخل البريد الالكترونى  و الرقم السرى </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">البريد الالكترونى</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="البريد الالكترونى" name="email"/></div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">كلمة السر</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="كلمة السر" name="password"/></div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">دخول</button>
        </div>

        <div class="create-account">
            <p>
                <!--  <a href="javascript:;" id="register-btn" class="uppercase">تسجيل حساب جديد</a> -->
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright">
    <div class="page-footer-inner text-center" style="width: 100%"> جميع الحقوق محفوظة للمطورين&nbsp;
    </div>&nbsp;
</div>

</body>

<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/style.js')}}" type="text/javascript"></script>

</html>
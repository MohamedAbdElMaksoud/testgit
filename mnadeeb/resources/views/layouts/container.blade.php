<!DOCTYPE html>
<!--[if IE 8]>
<html lang="ar" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="ar" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ar">

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
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/img/logo.png')}}" height="50px" alt="logo" class="logo-default"/> </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle"
                                 src="{{asset('assets/img/logo.png')}}"/>
                            <span class="username username-hide-on-mobile">  {{ Auth::user()->userName }}  </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- END LOGO -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN Left SIDE BAR -->
        <div class="left-side page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">

                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <li class="nav-item start active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li class="invitations nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">ألدعوات</span>
                            <span class="invitations arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('invitations')}}" class="nav-link ">
                                    <span class="title">ألدعوات</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('invitations/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="codes nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">الاكواد</span>
                            <span class="codes arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('codes')}}" class="nav-link ">
                                    <span class="title">الاكواد</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('codes/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="complains nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">الشكاوى</span>
                            <span class="complains arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class=" list nav-item  ">
                                <a href="{{url('complains/')}}" class="nav-link ">
                                    <span class="title">الشكاوى</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="clients nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">العملاء</span>
                            <span class="clients arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('clients')}}" class="nav-link ">
                                    <span class="title">العملاء</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('clients/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="drivers nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">السائقين</span>
                            <span class="drivers arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('drivers')}}" class="nav-link ">
                                    <span class="title">السائقين</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('drivers/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="orders nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">الطلبات</span>
                            <span class="orders arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{url('orders')}}" class="nav-link ">
                                    <span class="title">الطلبات</span>
                                </a>
                            </li>
                            <li class="completed nav-item  ">
                                <a href="{{url('completed')}}" class="nav-link ">
                                    <span class="title">مكتملة</span>
                                </a>
                            </li>
                            <li class="canceled nav-item  ">
                                <a href="{{url('canceled')}}" class="nav-link ">
                                    <span class="title">ملغية</span>
                                </a>
                            </li>
                            <li class="waiting nav-item  ">
                                <a href="{{url('waiting')}}" class="nav-link ">
                                    <span class="title">منتظره</span>
                                </a>
                            </li>
                            <li class="shipped nav-item  ">
                                <a href="{{url('shipped')}}" class="nav-link ">
                                    <span class="title">تم شحنها</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="category nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">الاقسام</span>
                            <span class="category arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('category')}}" class="nav-link ">
                                    <span class="title">الاقسام</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('category/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="packagingWays nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">طرق التغليف</span>
                            <span class="packagingWays arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('packagingWays')}}" class="nav-link ">
                                    <span class="title">طرق التغليف</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('packagingWays/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="packageType nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">انواع التغليف</span>
                            <span class="packageType arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="list nav-item  ">
                                <a href="{{url('packageType')}}" class="nav-link ">
                                    <span class="title">انواع التغليف</span>
                                </a>
                            </li>
                            <li class="add nav-item  ">
                                <a href="{{url('packageType/create')}}" class="nav-link ">
                                    <span class="title">اضف </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- END SIDEBAR -->
        </div>

        @yield('content')
    </div>

    <!-- END  Left SIDE BAR  -->
    <div class="page-footer">
        <div class="page-footer-inner text-center" style="width: 100%">
            جميع الحقوق محفوظة لشركة visions-tech
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->

    <!-- END FOOTER -->
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
<script>
    function  ConfirmDelete() {

        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>
</html>
@if(Auth::user()->type==1)
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
        <link href="assets/global/css/fonts-google-css.css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/old-datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/codemirror/lib/codemirror.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/codemirror/theme/neat.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/codemirror/theme/ambiance.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/codemirror/theme/material.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/codemirror/theme/neo.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/fontawesome-iconpicker-1.3.1/dist/css/fontawesome-iconpicker.min.css" rel="stylesheet" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <!-- Flow Player STYLES -->
        <link href="flow/skin/functional.css" rel="stylesheet" type="text/css" />
        <!-- Jquery Cores -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<link src="assets/global/plugins/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css"></link>
    
        <link rel="shortcut icon" href="assets/logos/logo2.png" />

<style>
 body {
  text-transform: capitalize;
  }
</style> 
         </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo" style="background-color: white">
                    <a href="/">
                        <img src="assets/logos/logo.png" style="width:100%;height:60px;" alt="logo" class="logo-default" /></a>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            @can("admin")
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> {{$cnotifications}} </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">{{$cnotifications}} pending</span> notifications</h3>
                                        <a href="adminsec?view=viewall">view all</a>
                                    </li>
                                    <li>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul class="dropdown-menu-list scroller" style="height: 250px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                                            @foreach ($notifications as $value)
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">{{$value->created_at}}</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> {{$value->message}} </span>
                                                </a>
                                            </li>
                                    @endforeach        
                                        </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </li>
                                </ul>
                            </li>@endcan
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> {{ Auth::user()->name }}  </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">

                                    <li>
                                        <form action="logout" method="post" id="logout_form">
                                            {{ csrf_field() }}
                                        </form>
                                        <a onclick="$('#logout_form').submit()">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">





@can('company')
                    <li id="nav-item-training" class="nav-item {{ $page == "dashboard2" ? "active open" : "" }}
                        ">
                            <a href="companymanage?view=dashboard2" class="nav-link nav-toggle">
                                <i class="fa fa-th-list"></i>
                                <span class="title">@lang('pagination.home')</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>
                        <li id="nav-item-training" class="nav-item {{ $page == "mypackage" ? "active open" : "" }}
                        ">
                            <a href="companymanage?view=mypackage" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">@lang('pagination.Subscription')</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>
                           <li id="nav-item-training" class="nav-item {{ $page == "mycompany" ? "active open" : "" }}
                        ">
                            <a href="companymanage?view=mycompany" class="nav-link nav-toggle">
                                <i class="fa fa-building"></i>
                                <span class="title">@lang('pagination.managecompany')</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>

                        <li class="nav-item {{ $page == "companykeywords" ? "active open" : "" }}">
                            <a href="{{url('companymanage?view=companykeywords')}}" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">@lang('pagination.keywords')</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                    <li id="nav-item-training" class="nav-item {{ $page == "companymessages" ? "active open" : "" }}
                        ">
                            <a href="companymanage?view=companymessages" class="nav-link nav-toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="title">@lang('pagination.messages')</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>
                        <li id="nav-item-training" >
                            <a href="http://127.0.0.1:8000/my_products" class="nav-link nav-toggle">
                                <i class="fa fa-product-hunt"></i>
                                <span class="title">@lang('pagination.products')</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>
                 @endcan





<li id="nav-item-training" class="nav-item {{ $page == "dashboard" ? "active open" : "" }}
                        ">
                            <a href="adminsec?view=dashboard" class="nav-link nav-toggle">
                                <i class="fa fa-th-list"></i>
                                <span class="title">dashboard</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>



<li id="nav-item-training" class="nav-item {{ $page == "users" ? "active open" : "" }}
                        ">
                            <a href="adminsec?view=users" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">users</span>
                                <span class="arrow"></span>
                            </a>
                           
                        </li>



 

                    </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="page-content" id="alert_container">
                    @isset($message)
                    @if($message->visible)
                    <div id="" class="custom-alerts alert {{$message->type}} fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        {{$message->text}}
                    </div>
                    @endif
                    @endisset
                    @yield('content')

                </div>
            </div>
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>

            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; 
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/old-datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-contextmenu/bootstrap-contextmenu.js" type="text/javascript"></script>
          <script src="assets/global/plugins/colorpicker/js/colorpicker.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-form/jquery.form.min.js"></script>
        <script src="assets/global/plugins/codemirror/lib/codemirror.js" type="text/javascript"></script>
        <script src="assets/global/plugins/codemirror/mode/javascript/javascript.js" type="text/javascript"></script>
        <script src="assets/global/plugins/codemirror/mode/htmlmixed/htmlmixed.js" type="text/javascript"></script>
        <script src="assets/global/plugins/codemirror/mode/css/css.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/fontawesome-iconpicker-1.3.1/dist/js/fontawesome-iconpicker.js" type="text/javascript"></script>

<script src="assets/global/plugins/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js"></script>



        <!--Zi Stuff-->
        <script src="assets/global/scripts/ziportletmanager.js" type="text/javascript"></script>
        <script src="assets/global/scripts/zitables.js" type="text/javascript"></script>
        <script src="assets/global/scripts/ziconfirm.js" type="text/javascript"></script>
        <script src="assets/global/scripts/ziform.js" type="text/javascript"></script>
        <script src="assets/global/scripts/ziselect.js" type="text/javascript"></script>
        <script src="assets/global/scripts/jquery.chained.js" type="text/javascript"></script>

<script type="text/javascript">
$('.dropdown').click(function(){
            $.ajax('seen');

})

</script>
        @yield('script')
    </body>
</html>
@else

  <script>window.location = "/home";</script>

@endif
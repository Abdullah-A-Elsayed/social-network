<!doctype html>
<html class="no-js" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="url" content="{{url('')}}" />
    <meta name="base" content="front/" />
    <meta name="lang" content="ar" />
    <meta name="csrf-token" content="5KmHFMv3lqE3EarXbAmMHdE1sSuKbbof7Qu1Yfw5" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">

    @yield("meta")
    <title> فاكتوري يارد</title>
    <link rel="icon" type="image/png" href="{{url('')}}/uploads/front/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="{{url('')}}/uploads/front/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{url('')}}/uploads/front/favicons/favicon-96x96.png" sizes="96x96">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,600italic,700,800,800italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{url('')}}/front/css/bootstrap-ar.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('')}}/front/css/template-ar.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('')}}/front/css/responsive-ar.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{url('')}}/front/css/sliders/revolution-slider/settings.css">

    <link rel="stylesheet" type="text/css" href="{{url('')}}/front/css/sliders/revolution-slider/layers.css">

    <link rel="stylesheet" type="text/css" href="{{url('')}}/front/css/sliders/revolution-slider/navigation.css">

    <link rel="stylesheet" type="text/css" href="{{url('')}}/front/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{url('')}}/front/css/base-sizing.css" type="text/css" media="all">
    <link href="{{url('')}}/front/lib/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('')}}/front/css/custom-ar.css" type="text/css" />
    <link rel="stylesheet" href="{{url('')}}/front/css/custom-all.css" type="text/css" />
    <link rel="stylesheet" href="{{url('')}}/front/css/mainstyle2.css?ver=20180307145104" type="text/css" />

    <script type="text/javascript" src="{{url('')}}/front/js/jquery.js"></script>
    <script type="text/javascript" src="{{url('')}}/front/js/modernizr.min.js"></script>

    <noscript>

        <img height="1" width="1" src="https://www.facebook.com/tr?id=428031074260632&ev=PageView&noscript=1" />
    </noscript>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-102924287-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="kl-store-page">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="page_wrapper">

        <header id="header" class="site-header style7 new cta_button">

            <div class="kl-header-bg"></div>

            <div class="container siteheader-container">

                <div class="kl-top-header clearfix">
@if (Auth::guest())
                    <div class="header-links-container ">
                        <ul class="topnav navLeft topnav">

                            <li>
                                <a class="popup-with-form" href="#login_panel">
                                    <i class="fa fa-user"></i>
                                    <span class="hidden-xs">تسجيل الدخول</span>
                                </a>
                            </li>
                        </ul>

                    </div>
       @else               
                    <div class="header-links-container ">
                    
                        <ul class="topnav navLeft topnav">
                            <!-- Login trigger -->
                            
                            
                                                            
                            @if (Auth::user()->type == 2)
                                                                    <li>
                                        <a class="" href="{{url('')}}/companymanage">
                                        
                                            <i class="fa fa-briefcase"></i>
                                            <span class="">                                 
                                                
                                            إدارة الشركة                                            </span>
                                        </a>    
                                    </li>@endif
                                    
                                                <li class="drop">
                            <a href="{{url('')}}/profile" class="kl-cart-button" title="">
                                <span class="hidden-xs hidden-sm hidden-md">حسابي الشخصي</span>
                                <i class="glyphicon glyphicon-user icon-white flipX-icon xs-icon" data-count="1"></i>
                                
                            </a>
                            <div class="pPanel">
                                <div class="inner cart-container">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li>
                                            
                                            
                                            <span class="quantity">{{ Auth::user()->email }}</span>
                                            <span class="quantity">{{ Auth::user()->phone }}</span>
                                            </li>
                                        </ul>
                                        <!-- end product list -->

                                        <p class="buttons">
                                            <a href="{{url('')}}/profile" class="button wc-forward">الصفحةالشخصية</a>
                                             
                                            <a href="{{url('')}}/my_products" class="button wc-forward">اعلان للمستعمل</a>
                                                                                        <span class="btn-block text-center">
                                            <br> 
                                       <form action="logout" method="post" id="logout_form">
                                            {{ csrf_field() }}
                                        </form>
                                             
                                     <a onclick="$('#logout_form').submit()"  class="button wc-forward">تسجيل الخروج</a>

                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                            <!--/ Login trigger --> 
                                    
                                    
                                                                
                            
                                    
                        </ul>

                    </div>                        @endif

                    <div class="header-rightside-container ">

                        <ul class="social-icons sc--clean topnav navRight">
                                     @foreach ($Social as $value2)
                                           <li><a href="{{$value2->url}}" target="_blank" class="" title="{{$value2->title}}"><i class="{{$value2->icon}}"></i></a></li>
                                     @endforeach             
                        </ul>

                        <div class="clearfix visible-xxs">
                        </div>
                    </div>

                </div>

                <div class="separator"></div>

                <div class="logo-container logosize--yes">

                    <h1 class="site-logo logo " id="logo">
<a href="{{url('')}}/">
<img src="{{url('')}}/{{$homepage->logo}}" class="logo-img dark-logo" alt="{{$homepage->logo_description}}" title="{{$homepage->logo_description}}" />
<img src="{{url('')}}/{{$homepage->logo}}" class="logo-img white-logo" alt="{{$homepage->logo_description}}" title="{{$homepage->logo_description}}" />

</a>
</h1>

                </div>

                <div class="separator visible-xxs"></div>

                <div id="zn-res-menuwrapper">
                    <a href="{{url('')}}/#" class="zn-res-trigger zn-header-icon"></a>
                </div>

                <div id="main-menu" class="main-nav zn_mega_wrapper ">
                    <ul id="menu-main-menu" class="main-menu zn_mega_menu">

                        <li><a href="{{url('')}}/home">الرئيسية</a></li>
                        <li><a href="{{url('')}}/about">من نحن</a></li>
                        <li class="menu-item-has-children"><a href="{{url('')}}/categories">دليل الشركات</a>
                            <ul class="sub-menu clearfix">
                               @foreach ($Companycat as $value2)
                                  <li><a href="{{url('')}}/categories/{{$value2->id}}">{{$value2->title}}</a></li>
                                    @endforeach

                            </ul>
                        </li>
                        <li><a href="{{url('')}}/used">المستعمل</a></li>

                        <li class="menu-item-has-children"><a class="disabled" href="{{url('')}}/news/1">بلوج صناعي</a>
                            <ul class="sub-menu clearfix">
                                <li><a href="{{url('')}}/news/1">أخبار صناعية</a></li>
                                <li><a href="{{url('')}}/exhibition/1">معارض صناعية</a></li>

                                <li><a href="{{url('')}}/currency">اسعار العملات</a></li>
                                <li><a href="{{url('')}}/Articles2/1">مقالات و ابحاث</a></li>
                                <li><a href="{{url('')}}/Feasability2/1"> دراسات جدوى</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children menu-item-mega-parent"><a href="{{url('')}}/contact">اتصل بنا</a>
                            <ul class="hg_mega_container container clearfix">
                                <li class="menu-item-has-children col-sm-3">
                                    <div class="text_box contactbox">
                                        <h4>{{$data->title}}</h4>
                                        <p>{{$data->address}}</p>
                                        <p>
                                            {{$data->phone}}
                                        </p>
                                        <p>
                                            <a href="{{url('')}}//cdn-cgi/l/email-protection#cda4a3aba28dabacaeb9a2bfb4b4acbfa9e3aea2a0"><span class="__cf_email__" data-cfemail="86efe8e0e9c6e0e7e5f2e9f4ffffe7f4e2a8e5e9eb">{{$data->email}}</span></a>
                                            <br>
                                        </p>
                                    </div>
                                </li>
                                <li class="menu-item-has-children col-sm-9">
                                    <div class="th-google_map" style="height: 100px;">
                                        <div style="width: 60px; height: 70px; overflow: hidden; position: absolute; left: -60px; top: -70px; z-index: 0;"><img alt="" src="{{url('')}}/uploads/front/map-marker.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 60px; height: 60px;"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
@if (Auth::guest())

                <a href="#login_panel" id="ctabutton" class="ctabutton kl-cta-ribbon kl-login-box" title=""><strong>انضم </strong>إلينا<svg version="1.1" class="trisvg" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" preserveaspectratio="none" width="14px" height="5px" viewbox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg></a>
@endif
            </div>

        </header>
        <div class="kl-slideshow static-content__slideshow uh_neutral_color scrollme">
    <div class="bgback">
    </div>
    <div class="kl-slideshow-inner static-content__wrapper static-content--fullscreen">
        <div class="static-content__source animateme" data-when="span" data-from="0" data-to="0.75" data-easing="linear" data-translatey="300" data-opacity="0.1">
            <div class="kl-bg-source">
                <div class="kl-bg-source__bgimage" style="background-image:url(https://beta.Zipline.com/images/sub-header.jpg); background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:center; background-size:cover">
                    <div class="slider">
                        <div class="slide_viewer">
                            <div class="slide_group">
                                <div class="slide">
                                    <img src="https://beta.Zipline.com/images/sub-header.jpg">
                                </div>
                                <div class="slide">
                                    <img src="https://beta.Zipline.com/images/factory-future.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide_buttons">
                </div>
                <div class="directional_nav">
                    <div class="previous_btn" title="Previous">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                            <g>
                                <g>
                                    <path fill="#265a93" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0   c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564    c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="next_btn" title="Next">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
                            <g>
                                <g>
                                    <path fill="#265a93" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035          L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            </div>
            <div class="kl-bg-source__overlay" style="background-color:rgba(0,16,35,0.5)">
            </div>
        </div>
        <div class="th-sparkles"></div>
    </div>
    <div class="static-content__inner container animateme search-sliderr" data-when="span" data-from="0" data-to="0.75" data-easing="linear" data-translatey="300" data-opacity="0.1">
        <div class="container">
            <div class="pos-vertical-middle">
                <h3 class="fs-xxxl fs-sm-xxl fs-xs-xl fw-bold text-white reset-line-height mb-10 pt-150 text-center">
{{$homepage->slider_description}}</h3>
                <h3 class=" fs-l fs-xs-l fw-thin sourcesans  text-white mb-40 text-center">
{{$homepage->slider_subdescription}}</h3>
            </div>
        </div>
                    <section class="search_sec">
                        <div class="elm-searchbox elm-searchbox--normal2 elm-searchbox--eff-typing">

                            <div class="elm-searchbox__inner">
                                              <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="E-Mail Address" class="elm-searchbox__input aucomplete" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="elm-searchbox__input aucomplete" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="elm-searchbox__input aucomplete" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                            </div>
                                  <button type="submit" class="elm-searchbox__submit glyphicon glyphicon-">
                                    Reset Password
                                </button>
                        </div>

                
                    </form>
                            </div>

                        </div>
                    </section>
                </div>

            </div>


  

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="copyright">
                            <a href="{{url('')}}/{{url('')}}">
<a href="{{url('')}}/{{url('')}}">
<img src="{{url('')}}/{{$homepage->logo}}" class="logo-img dark-logo" alt="{{$homepage->logo_description}}" title="{{$homepage->logo_description}}" />
<img src="{{url('')}}/{{$homepage->logo}}" class="logo-img white-logo" alt="{{$homepage->logo_description}}" title="{{$homepage->logo_description}}" />
</a>                            </a>
   <br>
                            <p class="copyright-text">© جميع الحقوق محفوظة 2018 <a href="{{url('')}}/#">فاكتوري يارد</a>.</p>
                        </div>
                    </div>
                   <div class="col-sm-6">
<div class="newsletter-signup">
<h3 class="title m_title">النشـرة البريدية</h3>
<p>من خلال إشتراكك في النشرة البريدية، يمكنك متابعة آخر الاخبار والتحديثات على بريدك الإلكتروني</p>
<form action="http://127.0.0.1:8000/newsletters" method="post" id="" name="" >
<input type="email" value="" name="email" class="nl-email form-control" id="mce-EMAIL" placeholder="من فضلك ادخل البريد الالكتروني" required="">
<input type="submit" name="subscribe" class="" id="" value="تأكيد">
<input type="hidden" name="_token" value="SgUkiU7ZfGvmgfKZ9eV8JArpDt8HfUNgWwwbHn98">
</form>

</div>
</div>
                    <div class="col-sm-3">
                        <div>
                            <h3 class="title m_title">القائمة الرئيسية</h3>
                            <div class="sbs">
                                <ul class="menu">
                                    <li><a href="{{url('')}}/home">الرئيسية</a></li>
                                    <li><a href="{{url('')}}/من-نحن">من نحن</a></li>
                                    <li><a href="{{url('')}}/used">المستعمل</a></li>
                                    <li><a href="{{url('')}}/اتصل-بنا">اتصل بنا</a></li>

                                    <li><a href="{{url('')}}/categories">دليل الشركات</a></li>
                                    <li><a href="{{url('')}}/الاخبار">بلوج صناعي</a></li>

                                </ul>
                            </div>
                            <ul class="social-icons sc--clean clearfix">
                                <li class="title">تابعنا</li>
                                     @foreach ($Social as $value2)
                                           <li><a href="{{$value2->url}}" target="_blank" class="" title="{{$value2->title}}"><i class="{{$value2->icon}}"></i></a></li>
                                     @endforeach  

                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </footer>
 <div id="login_panel" class="mfp-hide loginbox-popup auth-popup">
            <div class="inner-container login-panel auth-popup-panel">
                <h3 class="m_title m_title_ext text-custom auth-popup-title tcolor">تسجيل الدخول</h3>

                <form class="" name="login_form" method="post" action="{{url('')}}/login"">
                    <div class="form-group kl-fancy-form">
                        <input type="text" id="kl-username" name="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="البريد الالكتروني" required>
                        <label class="kl-font-alt kl-fancy-form-label">البريد الالكتروني</label>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group kl-fancy-form">
                        <input type="password" id="kl-password" name="password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="كلمة المرور " required>
                        <label class="kl-font-alt kl-fancy-form-label">كلمة المرور </label>
                    </div>
                    <label class="auth-popup-remember" for="kl-rememberme">
                        <input type="checkbox" name="rememberme" id="kl-rememberme" value="forever" class="auth-popup-remember-chb"> تذكرني </label>
                    <div class="form-group kl-fancy-form">
                        <span class="resultlogin"></span>
                    </div>
                    <input type="submit" id="login" name="submit_button" class="btn zn_sub_button btn-fullcolor btn-md" value="تسجيل الدخول">
                    <input type="hidden" value="login" class="" name="form_action">
                    <input type="hidden" value="login" class="" name="action">
                    <input type="hidden" value="#" class="" name="submit">
                    <div class="links auth-popup-links">
                        <a href="#register_panel" class="create_account auth-popup-createacc kl-login-box auth-popup-link">إنشاء حساب افراد</a><span class="sep auth-popup-sep"></span>
                        <a href="#register_comp_panel" class="create_account auth-popup-createacc kl-login-box auth-popup-link">إنشاء حساب شركات </a><span class="sep auth-popup-sep"></span>
                        <a href="#forgot_panel" class="kl-login-box auth-popup-link">فقـدت كلمة المرور ؟</a>
                    </div>
                </form>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
        <div id="register_panel" class="mfp-hide loginbox-popup auth-popup">
            <div class="inner-container register-panel auth-popup-panel">
                <h3 class="m_title m_title_ext text-custom auth-popup-title">إنشاء حساب افراد</h3>

                <form id="register_user" name="frontusers" method="post" action="{{url('')}}/userregister">
                    <div class="form-group kl-fancy-form ">
                        <input type="text"  name="name" id="name" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="الاسم " required />
                        <label class="kl-font-alt kl-fancy-form-label">الاسم </label>
                    </div>
                                               <div class="form-group kl-fancy-form ">
                        <input type="text"  name="username" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="اسم المستخدم " required />
                        <label class="kl-font-alt kl-fancy-form-label">اسم المستخدم </label>
                    </div>
                                        {{csrf_field()}}

                    <div class="form-group kl-fancy-form">
                        <input type="email"  name="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="البريد الالكتروني" required />
                        <label class="kl-font-alt kl-fancy-form-label">البريد الالكتروني</label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input pattern="^(\+)?\d{1,20}$" name="phone" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="الهاتف" required />
                        <label class="kl-font-alt kl-fancy-form-label">الهاتف</label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input min="6" type="password"  name="password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required>
                        <label class="kl-font-alt kl-fancy-form-label">كلمة المرور </label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input min="6" type="password"  name="confirm_password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required>
                        <label class="kl-font-alt kl-fancy-form-label">تأكيد كلمة المرور</label>
                    </div>
                    <div class="form-group">
                        <span class="resultreg"></span>
                        <input type="submit"  name="submit" class="btn zn_sub_button btn-block btn-fullcolor btn-md" value="إنشاء حساب افراد">
                    </div>
                    <div class="links auth-popup-links">

                        <a href="#login_panel" class="kl-login-box auth-popup-link">لديك حساب بالفعل؟</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="register_comp_panel" class="mfp-hide loginbox-popup auth-popup">
            <div class="inner-container register-panel auth-popup-panel">
                <h3 class="m_title m_title_ext text-custom auth-popup-title">إنشاء حساب شركات </h3>

                <form id="register_company" name="login_form" method="post" action="{{url('')}}/companyregister"">
                    <div class="form-group kl-fancy-form ">
                        <input type="text"  name="username" id="username" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="اسم المستخدم " required />
                        <label class="kl-font-alt kl-fancy-form-label">اسم المستخدم </label>
                    </div>
                    <div class="form-group kl-fancy-form ">
                        <input type="text"  name="name" id="name" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="اسم الشركة" required />
                        <label class="kl-font-alt kl-fancy-form-label">اسم الشركة</label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input type="email"  name="email" id="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="البريد الالكتروني" required />
                        <label class="kl-font-alt kl-fancy-form-label">البريد الالكتروني</label>
                    </div>
                    {{csrf_field()}}
                    <div class="form-group kl-fancy-form">
                        <input pattern="^(\+)?\d{1,20}$" name="phone" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="الهاتف" required />
                        <label class="kl-font-alt kl-fancy-form-label">الهاتف</label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input min="6" type="password"  name="password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required>
                        <label class="kl-font-alt kl-fancy-form-label">كلمة المرور </label>
                    </div>
                    <div class="form-group kl-fancy-form">
                        <input min="6" type="password"  name="confirm_password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required>
                        <label class="kl-font-alt kl-fancy-form-label">تأكيد كلمة المرور</label>
                    </div>
                    <div class="form-group">
                        <span class="resultreg"></span>
                        <input type="submit"  name="submit" class="btn zn_sub_button btn-block btn-fullcolor btn-md" value="إنشاء حساب شركات  ">
                    </div>
                    <div class="links auth-popup-links">

                        <a href="#login_panel" class="kl-login-box auth-popup-link">لديك حساب بالفعل؟</a>
                    </div>
                </form>
            </div>
        </div>
        <div id="forgot_panel" class="mfp-hide loginbox-popup auth-popup forgot-popup">
            <div class="inner-container forgot-panel auth-popup-panel">
                <h3 class="m_title m_title_ext text-custom auth-popup-title">فقـدت كلمة المرور ؟</h3>

                <form  method="post" action="{{url("")}}/password/email">
                    <div class="form-group kl-fancy-form">
                        <input type="email" id="forgot-email" name="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="..." required />
                        <label class="kl-font-alt kl-fancy-form-label">اسم المستخدم او البريد الالكتروني</label>
                    </div>
                    <div class="form-group forgotstatus">
                    </div>
                    <div class="form-group">
                        <input type="submit" id="recover" name="submit" class="btn btn-block zn_sub_button btn-fullcolor btn-md" value="إرسال">
                    </div>
                    <div class="links auth-popup-links">
{{csrf_field()}}
                                                        <button type="submit" class="kl-login-box auth-popup-link">من فضلك تمهل، لقد تذكرت !</<button></button>>
                    </div>
                </form>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>

        <a href="{{url('')}}/#" id="totop">لاعلي</a>

        <script data-cfasync="false" src="{{url('')}}//cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/front/js/bootstrap-ar.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/front/js/kl-plugins-ar.js"></script>

        <script type="text/javascript" src="{{url('')}}/front/js/plugins/_sliders/caroufredsel/jquery.carouFredSel-packed.js"></script>

        <script type="text/javascript" src="{{url('')}}/front/js/trigger/kl-partners-carousel.js"></script>
        <script type="text/javascript" src="{{url('')}}/front/js/trigger/kl-recent-work-carousel.js"></script>
        <script type="text/javascript" src="{{url('')}}/front/js/trigger/kl-recent-work-carousel2.js"></script>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQFhPHqArEnilysXeHLrbp2FHOnHPIiE"></script>
        <script type="text/javascript" src="{{url('')}}/front/js/plugins/jquery.gmap.min.js"></script>

        <script type="text/javascript" src="{{url('')}}/front/js/plugins/jquery-ui-1.10.3.custom.min.js"></script>

        <script type="text/javascript" src="{{url('')}}/front/js/trigger/kl-google-maps-style2.js"></script>

        <script type="text/javascript" src="{{url('')}}/front/js/kl-scripts-ar.js"></script>
        <script type="text/javascript" src="{{url('')}}/front/lib/sweetalert/sweetalert.min.js"></script>
        <link href="{{url('')}}/front/lib/sweetalert/sweetalert.min.css" type="text/css" rel="stylesheet" />
        <script src="{{url('')}}/front/adminassets/plugins/dropzone/dropzone.min.js"></script>
        <link href="{{url('')}}/front/adminassets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="{{url('')}}/front/js/kl-custom.js"></script>
        <script src="{{url('')}}/front/adminassets/js/products.js"></script>

        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <link href="{{url('')}}/front/lib/EasyAutocomplete/easy-autocomplete.min.css" type="text/css" rel="stylesheet" />
        <script src="{{url('')}}/front/lib/EasyAutocomplete/jquery.easy-autocomplete.min.js"></script>
        <script src="{{url('')}}/front/adminassets/plugins/jquery.countdown-2.2.0/jquery.countdown.js"></script>
        <script src="{{url('')}}/assets/global/plugins/jquery_chained-2.x/jquery.chained.js" type="text/javascript"></script>

        <input type = "hidden" value ="{{$data->lat}}" class = "gmap_lat_contact" />
        <input type = "hidden" value ="{{$data->lng}}" class = "gmap_lng_contact" />
        <script>
            jQuery(function($) {
                var options = {
                    url: function(phrase) {
                        return "front/companies/suggestjson" + "?keyword=" + $(".aucomplete").val();
                    },
                    getValue: function(element) {
                        return element.title;
                    },
                    ajaxSettings: {
                        dataType: "json",
                        method: "GET"
                    },
                    list: {
                        match: {
                            enabled: true
                        },
                        onClickEvent: function() {
                            $('.page_num').val(1);
                            $('#filtersearch').submit();
                        }
                    }
                };

                $(".aucomplete").easyAutocomplete(options);
            });
        </script>

        <script type="text/javascript">
            //use the modernizr load to load up external scripts. This will load the scripts asynchronously, but the order listed matters. Although it will load all scripts in parallel, it will execute them in the order listed
            Modernizr.load([{
                // test for media query support, if not load respond.js
                test: Modernizr.mq('only all'),
                // If not, load the respond.js file
                nope: '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js'
            }]);
        </script>
        <script >
 var frm = $('#register_user');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
if (data==1) {

swal('كلمة المرور غير متطابقة');

}  
else if (data==2) {

swal('اسم المستخدم او البريد الالكتروني موجود بالفعل');

} else{

    location.reload();
}



         }
        });
        ev.preventDefault();
    });


        </script>
            <script >
 var frm2 = $('#register_company');
    frm2.submit(function (ev) {
        $.ajax({
            type: frm2.attr('method'),
            url: frm2.attr('action'),
            data: frm2.serialize(),
            success: function (data) {
if (data==1) {

swal('كلمة المرور غير متطابقة');

}  
else if (data==2) {

swal('اسم المستخدم او البريد الالكتروني موجود بالفعل');

} else{

    location.reload();
}



         }
        });
        ev.preventDefault();
    });


        </script>
        <script type="text/javascript">
    $(document).ready(function () {
        $("#series").chained("#mark");
    });
</script>
        @yield('script')

</body>

</html>
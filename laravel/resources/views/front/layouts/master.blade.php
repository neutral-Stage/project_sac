<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/incles/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 04:06:21 GMT -->
<head>
<meta charset="utf-8">
<title>Sacrifice Inter Church Trust</title>

<!-- Stylesheets -->
<link href="{{ asset( 'assets/front') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset( 'assets/front') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset( 'assets/front') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset( 'assets/front') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset( 'assets/front') }}/css/style.css" rel="stylesheet">
<link href="{{ asset( 'assets/front') }}/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset( 'assets/front') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset( 'assets/front') }}/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="{{ asset( 'assets/front') }}/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset( 'assets/front') }}/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><a href="{{ asset( 'assets/front') }}/#">info@incles.com</a></li>
                            <li>+123 456 789 000</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="clearfix">
                            <li>Language ; </li>
                            <li class="language dropdownn"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="{{ asset( 'assets/front') }}/#">Eng <span class="icon fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="{{ asset( 'assets/front') }}/#">Arabic</a></li>
                                    <li><a href="{{ asset( 'assets/front') }}/#">China</a></li>
                                    <li><a href="{{ asset( 'assets/front') }}/#">German</a></li>
                                    <li><a href="{{ asset( 'assets/front') }}/#">French</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!--Header-Upper-->
        <div class="header-upper" style="background-image: url(images/background/1.jpg);">
            <div class="auto-container">
                <div class="logo-box">
                    <div class="logo"><a href="{{ asset( 'assets/front') }}/index-2.html"><img src="{{ asset( 'assets/front') }}/images/sac.png" alt="" title=""></a></div>
                </div>

                @include('front.layouts.menu')
    </header>
    <!--End Main Header -->
    
    <!--Main Slider-->
    @yield('content')
    <!--End News Section -->

    <!--Main Footer-->
    <footer class="main-footer">
        <!--Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="row clearfix">
                        <div class="big-column col-md-5 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="footer-column col-md-7 col-sm-5 col-xs-12">
                                    <div class="footer-widget adress-widget">
                                        <h3>Address</h3>
                                        <div class="text">Michael I. Days 3756 <br>Preston Street Wichita, KS 67213 <br>- <a href="{{ asset( 'assets/front') }}/#">USA</a></div>
                                        <ul>
                                            <li><a href="{{ asset( 'assets/front') }}/#"><span class="theme_color fa fa-phone"></span> &ensp; +123 456 789 000</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#"><span class="theme_color fa fa-fax"></span> &ensp; +000 123 456 789</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#"><span class="theme_color fa fa-envelope"></span> &ensp; info@incles.com</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-column col-md-5 col-sm-4 col-xs-12">
                                    <div class="footer-widget donation-widget">
                                        <h3>Donation</h3>
                                        <ul class="donation-links">
                                            <li><a href="{{ asset( 'assets/front') }}/#">Food Donation</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#">Dress Donation</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#">Education Donation</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#">Mony Donation</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#">Water Supplay</a></li>
                                            <li><a href="{{ asset( 'assets/front') }}/#">Toys Donation</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="big-column col-md-7 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <!-- Post Widget -->
                                    <div class="footer-widget post-widget">
                                        <h3>Recent Posts </h3>
                                        <ul>
                                            <li class="recent-post">
                                                <span class="date">14 May 2019</span>
                                                <div class="text"><a href="{{ asset( 'assets/front') }}/blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                            </li>

                                            <li class="recent-post">
                                                <span class="date">14 May 2019</span>
                                                <div class="text"><a href="{{ asset( 'assets/front') }}/blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                            </li>

                                            <li class="recent-post">
                                                <span class="date">14 May 2019</span>
                                                <div class="text"><a href="{{ asset( 'assets/front') }}/blog-single-1.html">Malnutrition is the major cause of infant mortality</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
     
                                <!--Footer Column-->
                                <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="footer-widget tweet-widget">
                                    <h3>Tweets</h3>
                                    <div class="twitter-post">
                                        <div class="name"><span class="fa fa-twitter"></span>@Company_text</div>
                                        <div class="text">Iferei te compoen iusquam re,vid eperius aus <span>terravera</span> teri fauten it. Supienitui sente ad fac vesil tatiostrim <span>#escreissimiu</span></div>
										<span class="date">15 May 2019</span>
                                    </div>

                                    <div class="twitter-post">
                                        <div class="name"><span class="fa fa-twitter"></span>@Company_text</div>
                                        <div class="text">Iferei te compoen iusquam re,vid eperius aus <span>terravera</span>. Supienitui sente ad fac vesil tatiostrim <span>#donate</span></div>
										<span class="date">12 May 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="follow-us clearfix">
                    <h5>Follow us on</h5>
                    <ul class="social-icon-colored">
                        <li class="facebook"><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-twitter"></i></a></li>
                        <li class="instagram"><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-instagram"></i></a></li>
                        <li class="linkedin"><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="google-plus"><a href="{{ asset( 'assets/front') }}/#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!--Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">Copyright <a href="{{ asset( 'assets/front') }}/index-2.html">Incles Charity</a> &copy; 2019. All Rights Reserved</div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="{{ asset( 'assets/front') }}/js/jquery.js"></script> 
<script src="{{ asset( 'assets/front') }}/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset( 'assets/front') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset( 'assets/front') }}/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="{{ asset( 'assets/front') }}/js/jquery-ui.js"></script> 
<script src="{{ asset( 'assets/front') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset( 'assets/front') }}/js/owl.js"></script>
<script src="{{ asset( 'assets/front') }}/js/wow.js"></script>
<script src="{{ asset( 'assets/front') }}/js/knob.js"></script>
<script src="{{ asset( 'assets/front') }}/js/appear.js"></script>
<script src="{{ asset( 'assets/front') }}/js/script.js"></script>

@yield('script')
</body>

<!-- Mirrored from t.commonsupport.com/incles/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 04:11:52 GMT -->
</html>
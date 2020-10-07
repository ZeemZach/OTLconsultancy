<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name=”robots” content="index, follow">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="otlconsultancy,otlconsultancy odisha,otl lab,Odisha Testing Laboratory,NABL Accrededicated Laboratory,itl consultancy,otl inc,otl technology,new equipment,experience employee,otl consultancy odisha,Odisha,Testing,Laboratory,NABL,NABL meaning,NABL full form,Engineering Survey,Design,design,drawing,dpr,estimate,dpr and estimate
    ,soil,sub-soil,investigation,soil investigation,material,material investigation,civil engineering,service,services,high,accuracy,high accuracy,high accuracy equipment
    ,material engineer,material engine,estimator,surveyor,acheived,exposure in civil,architectural,architural structure,material testing,geo,geo technical,geo technical investigation
    ,bridge,highway,bridge construction,bridge construction company,otl meaning,#otl,otl full form,otl company,otl defination,otl about, otl about us,otl contact,otl home,otl index,otl client,
    otl clients,otl client list,material testing lab,material testing services,material testing technolgy,material testing consultancy,material testing jobs,material testing laboratory, material testing inc,
    material testing and consultancy,soil testing lab,soil testing services,soil testing technolgy,soil testing consultancy,soil testing jobs,soil testing laboratory, soil testing inc,
    soil testing and consultancy,geotechnical investigation,geotechnical investigation report,geotechnical investigation guideline,geotechnical investigation methods,geotechnical investigation equipment,
    geotechnical investigation specification,geotechnical investigation india,geotechnical investigation odisha,geotechnical investigation cost,geotechnical investigation and testing,rock testin,
    rock testing lab,rock test,rock testing laboratory,rock testing equipment,cement testing lab,cement test,cement testing laboratory,cement testing euipment,cement testing and consultancy,lime testing,lime testing lab,
    lime yesting laboratory,cement block testing,concrete testing,concrete testing lab,concrete testing near me,concrete testing equipment,concrete testing jobs,chemical testing lab near me,chemical testing,chemical testing services,
    chemical testing lab and consultancy,bitumen and tar test,tar test,tar test run,tar testing lab,bitumen,brick testament,brick testing center,brick testing job,brick testing lab near me">
    <meta name="author" content="zeemzach">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="shortcut icon" href="{{asset('assets/img/logo-light@2x.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body class="page no-sidebar header-style-1 menu-has-search menu-has-cart">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap">
    <!-- Top Bar -->
    
    <!-- Header -->
    <header id="site-header" class="header-front-page style-1">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">          
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="{{ route('index') }}" title="OTL" rel="home" class="main-logo">
                            <img src="{{asset('assets/img/logo@2x.png')}}"  alt="OTL Logo" data-retina="{{asset('assets/img/logo@2x.png')}}" data-width="250" data-height="30">
                        </a>
                    </div>
                </div>
                <!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('index') }}">Home</a>
                             </li>
                        <li class="menu-item"><a href="{{ route('about') }}">About Us</a>
                           </li>
                        <li class="menu-item "><a href="{{ route('service') }}">Services</a>
                         </li>
                        <!--li class="menu-item menu-item-has-children"><a href="#">Portfolio</a>
                        </li>
                        <li class="menu-item"><a href="#">CLINTTELE</a></li-->
                        <li class="menu-item"><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="menu-item"><a href="{{ route('clients') }}">Our Clients</a></li>
                        <li class="menu-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </nav><!-- /#main-nav -->

                <!-- /.nav-top-cart-wrapper -->
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->
@yield('content')
<!-- Featured Title -->
<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_about margin-bottom-25">
                    <div class="margin-bottom-35">
                        <a href="{{ route('index') }}" title="OTL" rel="home" class="footer-logo">
                            <img src="{{asset('assets/img/logo-light@2x.png')}}" alt="OTL Logo" data-retina="{{asset('assets/img/logo-light@2x.png')}}" data-width="250" data-height="30">
                            <span class="widget-title footer-title">Odisha Testing Laboratory</span>  
                        </a>                      
                      </div>
                   
                </section>

                <section class="widget widget_information">
                    <ul class="info-wrap">
                        <li class="address item">Plot No: 821 K-8, Kalinga Nagar, Ghatika, Dist - Khordha, Bhubaneswar - 751003</li>
                        <li class="phone item">Ph.: 0674-2386290, Mob.: +91- 8249525997</li>
                        <li class="email item"><a href="mailto::odishatestinglab@gmail.com">odishatestinglab@gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_tag_cloud">
                    <h2 class="widget-title">Popular tags</h2>
                    <div class="tagcloud">
                        <a href="#">MATERIAL TESTING & GEO TECHNICAL INVESTIGATION:</a>
                        <a href="#">ARCHITECTURAL & STRUCTURAL DESIGN:</a>
                        <a href="#">SURVEYING</a>
                        <a href="#">HIGHWAY & BRIDGE</a>
                     </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title">Useful links</h2>
                    
                    <ul class="links col2">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        
                        
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li class="last"><a href="{{ route('about') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="wprt-container">
        <div class="bottom-bar-inner-wrap">
        
            <div class="bottom-bar-content">
                <div id="copyright"><footer>&copy; Developed and Maintained by <a href="https://mavensdesk.com">MavensDesk</a></footer>
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->

            </div><!-- /.bottom-bar-menu -->
        </div>
    </div>
</div>

</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top">TOP</a>

<!-- Javascript -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/animsition.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/fitText.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vegas.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owlCarousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/cube.portfolio.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>


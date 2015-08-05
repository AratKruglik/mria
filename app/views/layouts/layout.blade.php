<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" xml:lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
    <!--[if lt IE 9]> 
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="@yield('meta_d')">
    <meta name="keywords" content="@yield('meta_k')">
    <meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <link rel="icon" href="/icon.png" type="image/png">

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,400italic,500italic%7CMontserrat:400,700' rel='stylesheet' type='text/css'>    
    
    <!-- Icon-Font -->
    <link rel="stylesheet" href="/assets/font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
    <!--[if IE 7]>
    	<link rel="stylesheet" href="/assets/font-awesome/font-awesome/css/font-awesome-ie7.min.css" type="text/css">
    <![endif]-->
    
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/stroll/stroll.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/css/animate.min.css" type="text/css">
    <link id="main-stylesheet" rel="stylesheet" href="/css/main.css" type="text/css">
    <link rel="stylesheet" href="/assets/flexslider/flexslider.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/lightbox/css/lightbox.css" type="text/css">
    
	<title>@yield('title') - АН "Мрія"</title>
    
    <script type="text/javascript" src="/assets/js/modernizr.js"></script>
    
</head>

<body>

	<div id="page-loader">
    	<div class="centered-columns">
        	<div class="centered-column">
            	<img alt="loader" src="/images/loader.gif">
            </div>
        </div>
    </div>
    
	<header id="header-section">
    	<div class="site-top">
        	<div class="container clearfix">
                <div class="pull-left">
                    <span class="site-top-item">
                        <a href="#"><i class="fa fa-envelope"></i> info@mria.com</a>
                    </span>
                    <span class="site-top-item">
                        <i class="fa fa-phone"></i> 0 800 123 45 67
                    </span>
                </div>
                <div class="pull-right">
                	<div class="site-top-item">
                    	<a href="#"><i class="fa fa-user"></i> Увійти</a>
                    </div>
                    <div class="site-top-item">
                    	<a href="#"><i class="fa fa-pencil"></i> Реєстрація</a>
                    </div>
                    <div class="site-top-item">
                    	<form id="form-top-search">
                    		<input type="text" name="s">
                            <input type="submit" value="Пошук">
                        </form>
                    	<a id="form-top-search-trigger" href="#"><i class="fa fa-search"></i></a>
                	</div>
                </div>
            </div><!-- .container -->
        </div><!-- .site-top -->
    	<div class="main-menu">
    		<div class="container">
            	<a href="/"><img class="pull-left main-logo" alt="hometastic" src="/images/logo.png"></a>
                <div class="menu-button"><i class="fa fa-reorder"></i></div>
                <nav class="menu-container underscore-container menu-container-fadie">
                    <ul>
                        <li class="active"><a href="index.html">На головну</a></li>
                        <li><a href="property_listings.html">Каталог</a></li>
                        <!-- <li><a href="agents.html">Наші агенти</a>
                        	<ul>
                            	<li><a href="agents.html">John Doe</a></li>
                                <li><a href="agents.html">Chris Rea</a></li>
                                <li><a href="agents.html">Jessica Brown</a></li>
                                <li><a href="agents.html">Hansom Rob</a></li>
                            </ul>
                        </li> -->
                        <li><a href="blog_one_column.html">Новини</a></li>
                        <li><a href="contact.html">Зв'язатись з нами</a></li>
                    </ul>
                    <div class="underscore"><div class="underscore-inner"></div></div>
                </nav>
        	</div><!-- .container -->
        </div><!-- .main-menu -->
    </header>
    @yield('content')
    @include('layouts.footer')
	
	<script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/stroll/stroll.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="/assets/js/custom.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="/assets/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/lightbox/js/lightbox.min.js"></script>
    
</body>
</html>

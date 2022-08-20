<!DOCTYPE html>
<html lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RixetBD</title>
<meta property="og:title" content="RixetBD Portfolio" />
<meta property="og:site_name" content="RixetBD" />
<meta property="og:type" content="article" />
<meta property="og:description" content="RixetBD Portfolio Description" />
<meta property="og:image" itemprop="image" content="https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/267858033_197313275950173_4664983690733003987_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeEi0LqO-DlaMgeulxBciU-fJNYbc_8fhX4k1htz_x-Ffv6tidO4wTKRLIWMej87EJ14Z5BFeSgVXaX1GNfHRss6&_nc_ohc=26k-ZtFK5swAX-5pMye&_nc_ht=scontent-sin6-2.xx&oh=00_AT9bCkV56dPyLOpzEBpse47FUkWjPUqwA5TFNKpTmZe3zQ&oe=6226B2B5" />
<meta property="og:url" content="https://rixetbd.github.io/portfolio/" />
<meta property="og:image:width" content="1024" />
<meta property="og:image:height" content="1024" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="facebook_banner.png">
<link rel="image_src" href="share_banner.png">

<!--Favicon-->
<link rel="shortcut icon" href="img/favicon.png">

<!-- CSS Files -->
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/circle.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/tiny-slider.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

<!-- Color Stylesheet -->
<link href="{{asset('frontend/css/colors/green-color.css')}}" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

@php
    $pageIndex = explode('.', Route::currentRouteName()) ;
    $pageClass = end($pageIndex) ;
@endphp

<body class="{{ (Route::currentRouteName() != ''?$pageClass:'')}}">
<!-- Preloader-->
<div class="vfx-loader">
	<div class="loader-wrapper">
		<div class="loader-content">
			<div class="loader-dot dot-1"></div>
			<div class="loader-dot dot-2"></div>
			<div class="loader-dot dot-3"></div>
			<div class="loader-dot dot-4"></div>
			<div class="loader-dot dot-5"></div>
			<div class="loader-dot dot-6"></div>
			<div class="loader-dot dot-7"></div>
			<div class="loader-dot dot-8"></div>
			<div class="loader-dot dot-center"></div>
		</div>
	</div>
</div>

<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
  <!-- Fixed Navigation Starts -->
  <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
    <li class="icon-box tooltip {{ ($pageClass == 'home'?'active':'')}}"><i class="fa fa-home"></i> <a href="{{route('frontend.home')}}"></a><span class="tooltiptext tooltip-right">Home</span></li>
    <li class="icon-box tooltip {{ ($pageClass == 'about'?'active':'')}}"><i class="fa fa-id-card"></i> <a href="{{route('frontend.about')}}"></a><span class="tooltiptext tooltip-right">About Me</span></li>
    <li class="icon-box tooltip {{ ($pageClass == 'portfolio'?'active':'')}} {{ ($pageClass == 'portfolio_single'?'active':'')}}"><i class="fa fa-image"></i> <a href="{{route('frontend.portfolio')}}"></a><span class="tooltiptext tooltip-right">My Works</span></li>
    <li class="icon-box tooltip {{ ($pageClass == 'blog'?'active':'')}} {{ ($pageClass == 'blog_post'?'active':'')}} "><i class="fa fa-globe"></i> <a href="{{route('frontend.blog')}}"></a><span class="tooltiptext tooltip-right">Blog Post</span></li>
    <li class="icon-box tooltip {{ ($pageClass == 'contact'?'active':'')}}"><i class="fa fa-envelope"></i> <a href="{{route('frontend.contact')}}"></a><span class="tooltiptext tooltip-right">Contact</span></li>
  </ul>
  <!-- Fixed Navigation Ends -->
  <!-- Mobile Menu Starts -->
  <nav class="d-block d-lg-none">
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span> <span></span> <span></span>
      <ul class="list-unstyled" id="menu">
        <li class="tooltip {{ ($pageClass == 'home'?'active':'')}}"><a href="{{route('frontend.home')}}"><i class="fa fa-home"></i></a><span class="tooltiptext tooltip-right">Home</span></li>
        <li class="tooltip{{ ($pageClass == 'about'?'active':'')}}"><a href="{{route('frontend.about')}}"><i class="fa fa-id-card"></i></a><span class="tooltiptext tooltip-right">About Me</span></li>
        <li class="tooltip{{ ($pageClass == 'portfolio'?'active':'')}} {{ ($pageClass == 'portfolio_single'?'active':'')}}"><a href="{{route('frontend.portfolio')}}"><i class="fa fa-image"></i></a><span class="tooltiptext tooltip-right">My Works</span></li>
        <li class="tooltip{{ ($pageClass == 'contact'?'active':'')}}"><a href="{{route('frontend.contact')}}"><i class="fa fa-envelope"></i></a><span class="tooltiptext tooltip-right">Contact</span></li>
        <li class="tooltip{{ ($pageClass == 'blog'?'active':'')}} {{ ($pageClass == 'blog_post'?'active':'')}}"><a href="{{route('frontend.blog')}}"><i class="fa fa-globe"></i></a><span class="tooltiptext tooltip-right">Blog Post</span></li>
      </ul>
    </div>
  </nav>
  <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->

@yield('content')

<!-- JS Files -->
<script src="{{asset('frontend/js/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
<script src="{{asset('frontend/js/fm.revealator.jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/classie.js')}}"></script>
<script src="{{asset('frontend/js/cbpGridGallery.js')}}"></script>
<script src="{{asset('frontend/js/jquery.hoverdir.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/tiny-slider.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/typed.js')}}"></script>
<script src="{{asset('frontend/js/custom_jquery.js')}}"></script>

@yield('footer_script')

@flasher_render
</body>
</html>

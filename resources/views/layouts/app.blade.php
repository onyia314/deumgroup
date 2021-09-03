<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Homex template">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">

    <!-- Title -->
    <title>DeumGroup - Real-Estate, Engineering, Ict</title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/deum-engineering.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- Css Link -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <!--TiNYMCE for text editor -->
    <script src="https://cdn.tiny.cloud/1/ebmzj90o1qzdtj27nldnpfizx87ptn8s6p8ove06jyeek9l5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

    <!--	Page Loader-->

<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>

    <div id="page-wrapper" class="bg-white">
        <!--============== Header Section Start ==============-->
        <header id="header" class="nav-on-banner transparent-header-modern fixed-header-bg-secondary py-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-nav hover-primary-nav">
                            <nav class="navbar navbar-expand-lg navbar-light white-nav hover-primary-nav p-0">
                                <a class="navbar-brand position-relative p-0" href="#"><img class="nav-logo" src="/assets/images/logo/deum-realestate.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto">

                                        <li class="nav-item"> 
                                            <a class="nav-link" href="{{route('index')}}">Home</a> 
                                        </li>

                                        <li class="nav-item"> 
                                            <a class="nav-link" href="{{route('about')}}">About</a> 
                                        </li>

                                        <li class="nav-item"> <a class="nav-link" href="{{route('posts.index')}}">
                                            blog</a> 
                                        </li>

                                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('services.real-estate')}}">Real Estate</a></li>
                                                <li><a class="dropdown-item" href="{{route('services.engineering')}}">Engineering</a></li>
                                                <li><a class="dropdown-item" href="{{route('services.ict')}}">ICT</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item"> 
                                            <a class="nav-link" href="{{route('faq')}}">faq</a> 
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="{{route('contact')}}">
                                            Contact</a> 
                                        </li>

                                    </ul>

                                    <a class="btn btn-white-border" href="#"><i class="fas fa-phone-alt"></i> 132 - 341 - 92341</a> </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->

        
        @yield('content')
    
        <!--============== Subscribe Section Start ==============-->
        <div class="full-row bg-gray p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="divider py-80">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-7">
                                    <h4 class="text-secondary mb-0">Enter your email for subscribe to get monthly newslatter</h4>
                                </div>
                                <div class="col-lg-5">
                                    <form class="subscribe">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                            <button class="btn btn-primary" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Subscribe Section End ==============-->

        <!--============== Footer Section Start ==============-->
        <footer class="full-row bg-gray p-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="divider py-80">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-logo mb-4">
                                            <a href="#"><img class="logo-bottom" src="/assets/images/logo/deum-realestate.png" alt="image"></a>
                                        </div>
                                        <p class="pb-20">Risus commodo congue augue phasellus morbi hymenaeos ante tincidunt eu orci dictum bibendum lacus platea primis mi lacinia felis gravida natoque bibendum cubilia montes tristique et arcu blandit risus. Lobortis
                                            dignissim nam.
                                        </p>
                                        <a class="btn btn-primary mt-4" href="#">Register Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row row-cols-md-3 row-cols-1">
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Support</h4>
                                                <ul>
                                                    <li><a href="#">Forum</a></li>
                                                    <li><a href="#">Statistics</a></li>
                                                    <li><a href="#">Terms and Condition</a></li>
                                                    <li><a href="#">Get Support</a></li>
                                                    <li><a href="#">Freequenly Ask Question</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Quick Links</h4>
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Featured Property</a></li>
                                                    <li><a href="#">Become A Member</a></li>
                                                    <li><a href="#">Submit Property</a></li>
                                                    <li><a href="#">How It Work</a></li>
                                                    <li><a href="#">Our Agents</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Contact Us</h4>
                                                <ul>
                                                    <li>Collins Street West, Victoria 8007, Australia</li>
                                                    <li>+1 246-345-0695</li>
                                                    <li>helpline@homex.com</li>
                                                </ul>
                                            </div>
                                            <div class="footer-widget media-widget mt-4 text-secondary hover-text-primary">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fas fa-rss"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright Start -->
            <div class="copyright">
                <div class="container">
                    <div class="row row-cols-sm-2 row-cols-1">
                        <div class="col"> <span>© 2021 Homex All right reserved</span> </div>
                        <div class="col">
                            <ul class="line-menu text-ordinary float-end">
                                <li><a href="#">Privacy & Policy</a></li>
                                <li>|</li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->
        </footer>
        <!--============== Footer Section End ==============-->

        <!-- Scroll to top -->
        <a href="#" class="bg-secondary text-white" id="scroll"><i class="fas fa-angle-up"></i></a>
        <!-- End Scroll To top -->
    </div>
    <!-- Wrapper End -->

    <!-- Javascript Files -->
    <script src="/assets/js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="/assets/js/greensock.js"></script>
    <script src="/assets/js/layerslider.transitions.js"></script>
    <script src="/assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/tmpl.js"></script>
    <script src="/assets/js/jquery.dependClass-0.1.js"></script>
    <script src="/assets/js/draggable-0.1.js"></script>
    <script src="/assets/js/jquery.slider.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/YouTubePopUp.jquery.js"></script>
    <script src="/assets/js/validate.js"></script>
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/custom.js"></script>

    @stack('script')
    @stack('tinymce')
</body>

</html>
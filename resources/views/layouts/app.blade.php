<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @stack('meta-tags')

    @stack('title')

    @stack('link-tags')

    {{-- <link rel="icon" href="/assets/images/deum-engineering.png"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- Css Link -->

    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

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
        <header id="header" class="fixed-header-bg-white">
            
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light secondary-nav hover-primary-nav">
                            <a class="navbar-brand" href="{{route('index')}}"><img class="nav-logo" src="/assets/images/logo/deum-engineering.png" alt="DEUM"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item"> <a class="nav-link {{Route::is('index') ? 'active' : ''}}" href="{{route('index')}}">Home</a> </li>
                                    <li class="nav-item"> <a class="nav-link {{Route::is('about') ? 'active' : ''}}" href="{{route('about')}}">About</a> </li>
                                    <li class="nav-item"> <a class="nav-link {{Route::is('blog') || Route::is('posts.show') ? 'active' : ''}}" href="{{route('blog')}}">Blog</a> </li>
                                    <li class="nav-item dropdown"> 
                                        <a class="nav-link dropdown-toggle {{Route::is('services.real-estate') || Route::is('services.engineering') || Route::is('services.ict')  ? 'active' : ''}}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Services
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('services.real-estate')}}">Real Estate</a></li>
                                            <li><a class="dropdown-item" href="{{route('services.engineering')}}">Engineering</a></li>
                                            <li><a class="dropdown-item" href="{{route('services.ict')}}">ICT</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link {{Route::is('properties') ? 'active' : ''}}" href="{{route('properties')}}">Lands</a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link {{Route::is('engprojects') ? 'active' : ''}}" href="{{route('engprojects')}}">Engineering Projects</a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link {{Route::is('faq') ? 'active' : ''}}" href="{{route('faq')}}">faq</a> 
                                    </li>
                                    <li class="nav-item"> <a class="nav-link {{Route::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">
                                        Contact</a> 
                                    </li>
                                </ul>
                
                                <a class="btn bg-primary text-white text-white d-none d-xl-block" href="tel: 07016864250"><i class="fas fa-phone-alt"></i> 07016864250</a>
                            </div>
                        </nav>
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
                                            <button class="btn bg-primary text-white" type="submit">Subscribe</button>
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
                                            <a href="{{route('index')}}"><img class="logo-bottom" src="/assets/images/logo/deum-engineering.png" alt="image"></a>
                                        </div>
                                        <p class="pb-20">
                                            Getting a Job done starts from Contacting the right people for the Job. Deum Group has never failed to deliver on a Project. That's why choosing Deum Group for your Engineering Services, Real Estate Development, marketing and ICT is always the Right choice.
Contact us today and let us worry about getting your job done.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row row-cols-md-3 row-cols-1">
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Support</h4>
                                                <ul>
                                                    <li><a href="#">Terms and Condition</a></li>
                                                    <li><a href="{{route('faq')}}">Freequenly Asked Question</a></li>
                                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget footer-nav">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Quick Links</h4>
                                                <ul>
                                                    <li><a href="{{route('index')}}">Home</a></li>
                                                    <li><a href="{{route('about')}}">About</a></li>
                                                    <li><a href="{{route('faq')}}">faq</a></li>
                                                    <li><a href="{{route('contact')}}">contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="footer-widget">
                                                <h4 class="widget-title text-secondary double-down-line-left position-relative">Contact Us</h4>
                                                <ul>
                                                    <li>19 Jideofor Street, Thinkers Corner, Enugu.</li>
                                                    <li>07016864250</li>
                                                    <li>deumgroup@gmail.com</li>
                                                </ul>
                                        </div>
                                            <div class="footer-widget media-widget mt-4 text-secondary hover-text-primary">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <i class="icon ion-social-whatsapp-outline"></i>
                                                <a href="https://wa.me/+2347016864250"><i class="fab fa-whatsapp"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
                        <div class="col"> <span>© 2021 Deum Group of Companies All right reserved</span> </div>
                        <div class="col">
                            <ul class="line-menu text-ordinary float-end">
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li>|</li>
                                <li><a href="{{route('faq')}}">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright End -->
        </footer>
        <!--============== Footer Section End ==============-->

        <!-- Scroll to top -->
        <a target = "_blank" href="https://wa.me/+2347016864250" style="display:block; height:35px; width:35px; position: fixed; bottom:70px; right:15px;">
            <img src="/assets/images/logo/whatsapp-logo.png" alt="Chat">
        </a>
        
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
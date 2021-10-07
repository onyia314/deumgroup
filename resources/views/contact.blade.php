@extends('layouts.app')

@push('title')
<title>Contact Us</title>
@endpush

@push('meta-tags')
<meta name="description" content="Contact Us">

<meta name="keywords" content="deumgroup contact, deumgroup contact us, deumgroup of companies">
<meta name="Deum Group" content="Deum group">
@endpush

@push('link-tags')
<link rel="icon" type="image/png" href="/assets/images/logo/deum-engineering.png">
@endpush

@section('content')
    
        
        <!--============== Banner Section Start ==============-->
        <div class="page-banner full-row bg-gray py-2">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-3">
                    <div class="col">
                        <h3 class="page-name text-secondary m-0">Contact</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== Get In Touch Section Start ==============-->
        <div class="full-row bg-white pt-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Get In Touch</h2>
                        <span class="text-center mt-4 d-block mb-5">Send us a quick mail using the contact form below.</span> </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form id="contact-form" class="w-100" action="" method="get">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control bg-gray mb-3" placeholder="Your Name*">
                                    <input type="text" id="email" name="email" class="form-control bg-gray mb-3" placeholder="Email Address*">
                                    <input type="text" id="subject" name="subject" class="form-control bg-gray mb-3" placeholder="Subject">
                                </div>
                                <div class="col-lg-6">
                                    <input type="hidden" name="form-url" id="form-url" value="{{env('APP_URL')}}">
                                    <textarea id="message" name="message" class="form-control bg-gray mb-3" rows="5" placeholder="Type Comments..."></textarea>
                                    <button type="submit" id="send" value="send message" class="btn btn-primary">Send Message</button>
                                </div>
                                <div class="col-lg-12 pt-3">
                                    <div class="error-handel">
                                        <div class = "text-danger d-none" id="backendErrors"></div>
                                        <div class="alert alert-success d-none" id="success">Your email sent Successfully, Thank you.</div>
                                        <div class="alert alert-danger d-none" id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Get In Touch Section End ==============-->

        <!--============== Contact Information Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-4 text-secondary">Contacts</h3>
                            <ul>
                                <li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Address</h5>
                                        <span>19 Jideofor Street, Thinkers Corner, Enugu.</span> </div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-phone-alt text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Call Us</h5>
                                        <span class="d-table">07016864250</span> </div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-envelope text-primary me-2 font-13 mt-2"></i>
                                    <div class="contact-address">
                                        <h5 class="text-secondary">Email Adderss</h5>
                                        <span>deumgroup@gmail.com</span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contact-info">
                            <h3 class="mb-5 text-secondary">Social</h3>
                            <div class="media-widget text-secondary hover-text-primary">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Contact Information Section End ==============-->


        {{-- <!--============== Map Section Start ==============-->
        <div class="full-row bg-white p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div id="map" class="contact-location"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Map Section End ==============--> --}}

    @push('script')
        <script>
            (function($) {
                var _latitude = 36.596165;
                var _longitude = -97.062988;
                createHomepageGoogleMap(_latitude, _longitude);
            })(jQuery);
        </script>
    @endpush

@endsection
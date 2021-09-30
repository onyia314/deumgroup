@extends('layouts.app')

@push('title')
<title>Deum Engineering</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum Engineering Consultancy Limited is a leading name in Engineering Consultancy 
in Nigeria incorporated under the COMPANIES AND ALLIDE MATTERS ACT 1990 with RC No 119230
 in PURSUANT TO SECTION 659.  We are a Strong and Reliable Company which have learnt from experience 
 that it is the  details that make the difference and the company understands that 
projects are about providing world class service during the process of construction." >

<meta name="keywords" content="deum group engineering, deum engineering, deumgroup engineering">
<meta name="Deum Group" content="Deum group">
@endpush

@push('link-tags')
<link rel="icon" type="image/png" href="/assets/images/logo/deum-engineering.png">
@endpush

@section('content')
    
    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">DEUM ENGINEEERING</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="services.html">Services</a></li>
                            <li class="breadcrumb-item active">ENGINEERING</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->


    <!--============== About Service Section Start ==============-->
    <div class="full-row bg-white service-details">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="service-text">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About Deum Engineering</h3>
                        <p>
                            Deum Engineering Consultancy Limited is a leading name in Engineering Consultancy 
                            in Nigeria incorporated under the COMPANIES AND ALLIDE MATTERS ACT 1990 with RC No 119230
                             in PURSUANT TO SECTION 659.  We are a Strong and Reliable Company which have learnt from experience 
                             that it is the  details that make the difference and the company understands that 
                            projects are about providing world class service during the process of construction. 

                        </p>
                        <p>
                            Providing Clients satisfaction is the key to securing repeat business and 
                            that is why we work tirelessly to provide proactive, innovative and flexible solutions in all projects, large or small.
                            Services
                            <ul>
                                <li>Civil Engineering</li>
                                <li>Supplies</li>
                                <li>Sales & Services of Equipment</li>
                                <li>Building</li>
                                <li>Electrical & Electronics</li>
                                <li>Solar Energy Contractors</li>
                                <li>Supervision</li>
                                <li>Irrigation</li>
                                <li>Dams</li>
                                <li>Water Projects</li>
                                <li>Erosion Control</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col"> <img src="/assets/images/services/engineering.jpg" alt=""> </div>
            </div>
        </div>
    </div>

     <!--============== Text Box Five Section Start ==============-->
     <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-5">
                        <h5 class="mb-3 text-secondary">Our Vision</h5>
                    <p>
                        Our Vision is to achieve 100% customer satisfaction by delivering quality products and services at an affordable cost. 
                        We are growing and would always like to remain on the growing streak.
                    </p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-5">
                        <h5 class="mb-3 text-secondary">Our Mission</h5>
                        <p>
                            Our mission is to achieve the reputation of a high standard solution 
                            & service Provider Company in the ICT industry. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Text Box Five Section End ==============-->

    <!--============== Positive Thinking Section Start ==============-->
    <div class="full-row overlay-secondary" style="background-image: url('/assets/images/services/blueprint.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text-white">
                        <h2 class="text-white double-down-line-left position-relative pb-4 mb-5"><span class="h4 d-block">Think About It</span>Making your positive thinking</h2>
                        <p>Our years of experience in the Engineering Industry ranging from Civil, Electrical to other Engineering departments speaks through the numerous contracts we have completed for both private and Government establishment.</p>
                        <a class="btn bg-primary text-white mt-4" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Positive Thinking Section End ==============-->


@endsection
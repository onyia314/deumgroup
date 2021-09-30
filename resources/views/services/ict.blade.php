@extends('layouts.app')

@push('title')
<title>Deum ICT</title>
@endpush

@push('meta-tags')
<meta name="description" content=" Deum Communication & Technology Ltd was formed by a group of professionals having vivid experience and
wide exposure in Information Technology. People involved here are young qualified business graduates.
We engage in providing services such as ICT, Solar Installation, Cyber Café Set up, Educational Services,
Communication Services, Software Development, ICT Consultancy, Hardware repairs & Computer Services, 
Printing Services, Graphics Designing, Telecom Services & sales of Telecommunication Equipment." >

<meta name="keywords" content="deum group ict, deumgroup ict, deum ict">
<meta name="Deum Group" content="Deum group ict">
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
                    <h3 class="page-name text-secondary m-0">DEUM ICT</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="services.html">Services</a></li>
                            <li class="breadcrumb-item active">ICT</li>
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
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About Deum ICT</h3>
                        <p>
                            Deum Communication & Technology Ltd was formed by a group of professionals having vivid experience and
                             wide exposure in Information Technology. People involved here are young qualified business graduates.
                            We engage in providing services such as ICT, Solar Installation, Cyber Café Set up, Educational Services,
                             Communication Services, Software Development, ICT Consultancy, Hardware repairs & Computer Services, 
                             Printing Services, Graphics Designing, Telecom Services & sales of Telecommunication Equipment.

                        </p>
                        <p>
                            We want to establish ourselves as the best choice in Computing and Information Technology Services, Consultancy 
                            and Development by offering the full spectrum of services.
                        </p>
                    </div>
                </div>
                <div class="col"> <img src="/assets/images/services/ict.jpg" alt=""> </div>
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
    <div class="full-row overlay-secondary" style="background-image: url('/assets/images/services/laptops.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text-white">
                        <h2 class="text-white double-down-line-left position-relative pb-4 mb-5"><span class="h4 d-block">Think About It</span>Making your positive thinking</h2>
                        <p>When you think of software designs (Website Development, Graphics Design, 
                            App Development) Computer Hardware Installation, Solar installation, think 
                            of Deum Communication and Technology Ltd
                        </p>
                        <a class="btn bg-primary text-white mt-4" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Positive Thinking Section End ==============-->


@endsection
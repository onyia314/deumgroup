@extends('layouts.app')
@push('title')
<title>Deum real-estate</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum Real Estate Ltd is a real estate Marketing, Development and Investment Company
incorporated under the COMPANIES
AND ALLIDE MATTERS ACT 1990 with RC No 1741785 in PURSUANT TO SECTION 659. 
We are challenged with providing our clients with a secure and Affordable Property in Nigeria. 
We exist to serve our clients." >

<meta name="keywords" content="deum real-estate, deumgroup realestate, deum properties">
<meta name="Deum Group" content="Deum group ict">
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
                    <h3 class="page-name text-secondary m-0">DEUM REAL ESTATE</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a>Services</a></li>
                            <li class="breadcrumb-item active">Real Estate</li>
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
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About Deum Real Estate</h3>
                        <p>
                            Deum Real Estate Ltd is a real estate Marketing, Development and Investment Company
                             incorporated under the COMPANIES
                             AND ALLIDE MATTERS ACT 1990 with RC No 1741785 in PURSUANT TO SECTION 659. 
                             We are challenged with providing our clients with a secure and Affordable Property in Nigeria. 
                             We exist to serve our clients.
                        </p>
                        <p>
                            If you are looking to buy land in Nigeria, 
                            You have reached the destination for amazing Land offers and exceptional services.
                             Kindly contact us or visit our Head office at 19 Jideofor Street, Thinker’s corner Enugu, Enugu state.
                        </p>
                    </div>
                </div>
                <div class="col"> <img src="/assets/images/services/house.jpg" alt=""> </div>
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
                    <p>To become the leading Real Estate Company in 
                        Africa providing word class Real Estate services that meet our 
                        clients needs at all times.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-5">
                        <h5 class="mb-3 text-secondary">Our Mission</h5>
                        <p>
                            We exist to provide our clients world-class services so you can easily
                            own a property in Nigeria with a happy face.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Text Box Five Section End ==============-->


    <!--============== Positive Thinking Section Start ==============-->
    <div class="full-row overlay-secondary" style="background-image: url('/assets/images/services/realestate.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <div class="text-white">
                        <h2 class="text-white double-down-line-left position-relative pb-4 mb-5"><span class="h4 d-block">Think about it</span>Making your positive thinking</h2>
                        <p>
                            we have estates all over Enugu with about 100 plots each situated at 
                            strategic places you would want to build your dream home in.
                             Contact us to make a stress-free deal at Deum Real Estate Ltd.
                        </p>
                        <a class="btn bg-primary text-white mt-4" href="{{route('contact')}}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Positive Thinking Section End ==============-->


@endsection
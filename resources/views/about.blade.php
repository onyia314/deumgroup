@extends('layouts.app')

@push('title')
<title>About Us</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum Group of Companies is an Establishement Comprising of three major companies: Deum Engineering Ltd, Deum Real Estate LTD, Deum Communications and Technology Ltd.
We are interested in Delivering Services to our Clients taste. These services ranges from Engineering to Real Estate and ICT. Our reliability and consecutive awesome performance gets us a lot of repeat jobs as we treat all Clients equally.
Our integrity keeps us in Business.
We are Deum">

<meta name="keywords" content="deum group, deumgroup, deumgroup of companies">
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
                        <h3 class="page-name text-secondary m-0">About</h3>
                    </div>
                    <div class="col">
                        <nav class="float-start float-md-end">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Banner Section End ==============-->

        <!--============== About Our Company Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About Our Company</h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-lg-7">
                        <div class="about-content">
                            <p>Deum Group of Companies is an Establishement Comprising of three major companies: Deum Engineering Ltd, Deum Real Estate LTD, Deum Communications and Technology Ltd.
                                We are interested in Delivering Services to our Clients taste. These services ranges from Engineering to Real Estate and ICT.
                            </p>
                            <p>
                                Our reliability and consecutive awesome performance gets us a lot of repeat jobs as we treat all Clients equally.
                                Our integrity keeps us in Business.
                                We are Deum
                            </p>
                        </div>
                        <div class="fact-counter mt-5 md-mb-40">
                            <div class="row row-cols-md-3 row-cols-1 g-4">
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center">
                                            <h2 class="count-num" data-speed="3000" data-stop="1310">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Deals Success</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center">
                                            <h2 class="count-num" data-speed="3000" data-stop="946">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Insurance Done</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="count wow text-center" data-wow-duration="300ms">
                                        <div class="text-primary mb-3 d-flex justify-content-center"><strong>$</strong>
                                            <h2 class="count-num" data-speed="3000" data-stop="751867">0</h2>
                                            <strong>+</strong>
                                        </div>
                                        <span class="h6">Micro Finincing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-img"> <img src="/assets/images/about/ceo.jpeg" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== About Our Company Section End ==============-->

        {{-- <!--============== Our Team Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Our Agents</h2>
                        <span class="text-center mt-4 d-block mb-5">Process to get your right one, almost easy, flexible and fun.</span>
                    </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="/assets/images/team/01.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Karen Eilla Boyette</a></h5>
                                <span>Appartment Agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="/assets/images/team/02.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Walter Devid Moye</a></h5>
                                <span>Condos Agent</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer bg-white shadow-one">
                            <div class="overflow-hidden"> <img src="/assets/images/team/03.png" alt=""> </div>
                            <div class="py-3 text-center">
                                <h5 class="text-secondary hover-text-primary"><a href="#">Linda Dina Pate</a></h5>
                                <span>Commercial Building Agent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Our Team Section End ==============-->
 --}}
        <!--============== Partner Section Start ==============-->
        <div class="full-row bg-white pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Whom We Worked with</h2>
                        <span class="text-center mt-4 d-block mb-5">A list of whom we have served</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="partner">
                            <div class="owl-carousel partners">
                                <img src="/assets/images/partner/1.png" alt="">
                                <img src="/assets/images/partner/2.png" alt="">
                                <img src="/assets/images/partner/3.png" alt="">
                                <img src="/assets/images/partner/4.png" alt="">
                                <img src="/assets/images/partner/5.png" alt="">
                                <img src="/assets/images/partner/3.png" alt="">
                                <img src="/assets/images/partner/1.png" alt="">
                                <img src="/assets/images/partner/2.png" alt="">
                                <img src="/assets/images/partner/3.png" alt="">
                                <img src="/assets/images/partner/4.png" alt="">
                                <img src="/assets/images/partner/5.png" alt="">
                                <img src="/assets/images/partner/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Partner Section End ==============-->
@endsection
@extends('layouts.app')
@push('title')
<title>Deum group of companies</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum group of companies home page">

<meta name="keywords" content="deumgroup home, deumgroup home page, deumgroup of companies">
<meta name="Deum Group" content="Deumgroup home page">
@endpush

@push('link-tags')
<link rel="icon" type="image/png" href="/assets/images/logo/deum-engineering.png">
@endpush

@section('content')

         <!--============== Slider Section Start ==============-->
         <div class="full-row overflow-hidden p-0">

            <div class="home-slider owl-carousel js-halfheight">
                <div class="slider-item js-fullheight" style="background-image:url(/assets/images/slider/01.jpg);">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center" style="position: absolute; top:20%;"> 
                                <h1 class="mb-3">Deum Real Estate</h1>
                                <h2>Make that dream land a reality </h2>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
      
                <div class="slider-item js-fullheight" style="background-image:url(/assets/images/slider/02.jpg);">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center" style="position: absolute; top:20%;">
                              <h1 class="mb-3">Deum Engineering</h1>
                              <h2>Great innovation, Design and Problem solving</h2>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
      
                <div class="slider-item js-fullheight" style="background-image:url(/assets/images/slider/03.jpg);">
                    <div class="overlay"></div>
                  <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center" style="position: absolute; top:20%;">
                              <h1 class="mb-3">Deum ICT</h1>
                              <h2>We help you take your business to another step using trusted technologies</h2>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
          </div>
            
        </div>
        <!--============== Slider Section End ==============-->

        <!--============== Search One Section Start ==============-->
        <div class="full-row py-4 bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="mt-2 text-secondary text-justify">DEUM GROUP OF COMPANIES Delivering world class services to satisfy our clients</h5>
                    </div>
                    <div class="col-md-4"> <a class="btn bg-primary text-white d-table float-md-end" href="{{route('contact')}}">Contact Us</a></div>
                </div>
            </div>
        </div>
        <!--============== Search One Section End ==============-->

        <!--============== Recent Property Section Start ==============-->
        <div class="full-row bg-white pb-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4">Recent Properties</h3>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav property-btn float-lg-end" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-1 active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                           {{--  <li class="nav-item"> <a class="nav-link py-1" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        {{-- tab-content --}}
                        <div class="tab-content mt-4" id="pills-tabContent">

                            {{-- tab-pane --}}
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">

                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">

                                    @foreach ($lands as $land)
                                        <div class="col">
                                            <div class="featured-thumb hover-zoomer">
                                                <div class="overflow-hidden position-relative"> 
                                                    <img src="{{'/uploads' . '/' .$land->image_path}}" alt="">
                                                    {{-- <div class="featured bg-primary text-white">New</div>
                                                    <div class="sale bg-secondary text-white">For Sale</div>
                                                    <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                                    <div class="starmark text-white"><i class="far fa-star"></i></div> --}}
                                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-4">
                                                        <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Deum Homes</a></h5>
                                                        <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> {{$land->location}}</span>
                                                    </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <li><span>{{$land->area}}</span></li>
                                                            <li><span>{{$land->price}}</span></li>
                                                            <li><span><a href="{{route('lands.show' , $land->id)}}">+ Read More</a></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
  
                                </div>{{-- row ends --}}
                            </div>{{-- tab-content ends--}}
                        </div> {{-- tab-content ends--}}
            
                    </div>
                </div>
            </div>
        </div>
        <!--============== Recent Property Section End ==============-->


        <!--============== Project Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Engineering Projects</h2>
                        <span class="text-center mt-4 d-block mb-5">The most recent projects</span> </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        @foreach ($projects as $project)
                            <div class="col">
                                <div class="hover-zoomer thumb-two shadow-one">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="{{'/uploads' .'/' .$project->image_path}}" alt="image">
                                        <div class="date text-white position-absolute z-index-9">{{$project->created_at->format('d/m/Y')}}</div>
                                    </div>
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">{{$project->title}}</a></h6>
                                        <p>
                                            {{Str::words($project->content , 30)}}
                                        </p>
                                        <a class="mt-3 text-primary hover-text-secondary" href="{{route('projects.show' , $project->id)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                                
                        @endforeach
                </div>
            </div>
        </div>
        <!--============== project Section End ==============-->

        <!--============== Text Block One Section Start ==============-->
        <div class="full-row bg-white pb-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">What We Do</h2>
                        <span class="text-center mt-4 d-block mb-5">Real Estate , Engineering and ICT</span> </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s">
                             <i class="flaticon-real-estate flat-medium icon-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="{{route('services.real-estate')}}">REAL ESTATE</a></h5>
                            <p>
                                If you are looking to buy land in Nigeria, 
                                You have reached the destination for amazing Land offers and exceptional services. 
                            </p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="{{route('services.real-estate')}}">Learn More</a> </div>
                    </div>
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s">
                             <i class="flaticon-diagram flat-medium icon-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="{{route('services.engineering')}}">ENGINEERING</a></h5>
                            <p>
                                We are a Strong and Reliable Company which have learnt from experience that it is the  
                                details that make the difference and the company understands that projects are 
                                about providing world class service during the process of construction. 
                            </p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="{{route('services.engineering')}}">Learn More</a> </div>
                    </div>
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s"> 
                            <i class="flaticon-code-signs flat-medium icon-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="{{route('services.ict')}}">ICT</a></h5>
                            <p>
                                We engage in providing services such as ICT, Solar Installation, Cyber Café Set up, Educational Services,
                                 Communication Services, Software Development, ICT Consultancy, Hardware repairs & Computer Services, 
                                 Printing Services, Graphics Designing,
                                 Telecom Services & sales of Telecommunication Equipment
                            </p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="{{route('services.ict')}}">Learn More</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Text Block One Section End ==============-->

        <!--============== Popular Place Section Start ==============-->
        {{-- <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Popular Places</h2>
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/01.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Independence Layout</a></h4>
                                <span>31 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/02.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">GRA</a></h4>
                                <span>12 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/03.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Emene</a></h4>
                                <span>17 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/04.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Agbani Road</a></h4>
                                <span>20 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--============== Popular Place Section End ==============-->

        <!--============== Happy Living Section Start ==============-->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('/assets/images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="living-list pe-4">
                            <h3 class="pb-4 mb-3 text-white">Make life for happy living</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-real-estate flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Real Estate</h5>
                                        <p>
                                            we have estates all over Enugu with about 100 plots each situated at strategic
                                             places you would want to build your dream home in. 
                                            Contact us to make a stress free deal at Deum Real Estate Ltd.
                                        </p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-diagram flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Engineering</h5>
                                        <p>
                                            Our years of experience in the Engineering Industry ranging from Civil,
                                             Electrical to other Engineering departments speaks
                                             through the numerous contracts we have completed for both private and Government establishment.
                                        </p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-code-signs flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">ICT</h5>
                                        <p>
                                            When you think of software designs (Website Development, Graphics Design, App Development) 
                                            Computer Hardware Installation,
                                             Solar installation, think of Deum Communication and Technology Ltd.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Happy Living Section End ==============-->

        <!--============== How It Work Section Start ==============-->
        <div class="full-row bg-white pb-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Steps to get that dream land</h2>
                        <span class="text-center mt-4 d-block mb-5">Process to get the right one, easy and flexible</span>
                    </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-home flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Search land</h5>
                            <p>Search for the land or property you are interested in on our website.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-contact flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Contact Us</h5>
                            <p>contact us by phone, email or by visiting us. Ask any question you need to ask, we will provide you with answers</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-payment flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Make a Deal and Payment</h5>
                            <p> We complete your property deal as soon as you make payments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== How It Work Section End ==============-->

        <!--============== Blog Section Start ==============-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">Recent Articles</h2>
                        <span class="text-center mt-4 d-block mb-5">The most recent posted articles and valuable tips.</span> </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                        @foreach ($posts as $post)
                            <div class="col">
                                <div class="hover-zoomer thumb-two shadow-one">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="{{'/uploads' .'/' .$post->image_path}}" alt="image">
                                        <div class="date text-white position-absolute z-index-9">{{$post->created_at->format('d/m/Y')}}</div>
                                    </div>
                                    <div class="p-4">
                                        <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">{{$post->title}}</a></h6>
                                        <p>
                                            {{Str::words($post->content , 30)}}
                                        </p>
                                        <a class="mt-3 text-primary hover-text-secondary" href="{{route('posts.show' , $post->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                                
                        @endforeach
                </div>
            </div>
        </div>
        <!--============== Blog Section End ==============-->

        <!--============== Massage Box One Section Start ==============-->
        <div class="full-row bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white text-center line-height-50">Do not miss the golden oppurtunity to secure a home of yours</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Massage Box One Section End ==============-->

@endsection
@extends('layouts.app')

@section('content')

         <!--============== Slider Section Start ==============-->
         <div class="full-row overflow-hidden p-0">
            <div id="image-slider-2" style="width:1200px; height:800px;">


                <!-- Slide 1-->
                <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/assets/images/slider/01.jpg" class="ls-bg" alt="" />
                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:76px; color:#ffffff; top:390px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:20px; top:360px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:340px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p> --}}
                   {{--  <div style="top:410px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div> --}}
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:400px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                    <p style="font-weight:400; font-size:15px; line-height:76px; color:#836a6a; top:440px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p> --}}
                    
                    <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                        <p style="font-weight:500; text-align:center; cursor:pointer; padding-top:12px; padding-bottom:11px; font-family:'Varela Round', sans-serif; font-size:30px; top:530px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center; cursor:pointer;"
                            class="ls-button">View Details
                        </p>
                    </a>
                  {{--   <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:460px; left:260px;" class="ls-l bg-primary" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div> --}}
                </div>

                <!-- Slide 2-->
                <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/assets/images/slider/02.jpg" class="ls-bg" alt="" />
                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:76px; color:#ffffff; top:390px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:20px; top:360px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:340px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p> --}}
                   {{--  <div style="top:410px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div> --}}
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:400px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                    <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:440px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p> --}}
                    
                    <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                        <p style="font-weight:500; text-align:center; cursor:pointer; padding-top:12px; padding-bottom:11px; font-family:'Varela Round', sans-serif; font-size:30px; top:530px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center; cursor:pointer;"
                            class="ls-button">View Details
                        </p>
                    </a>
                  {{--   <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:460px; left:260px;" class="ls-l bg-primary" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div> --}}
                </div>
                <!-- Slide 3-->
                <div class="ls-slide" data-ls="bgposition:50% 50%; duration:9000; transition2d:4; kenburnsscale:1.2;"> <img width="1920" height="1080" src="/assets/images/slider/03.jpg" class="ls-bg" alt="" />
                    <div style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; width:100%; height:100%;" class="ls-l slider-layer-1" data-ls="showinfo:1; position:fixed; durationout:400;"></div>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:76px; color:#ffffff; top:390px; left:50px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:300; offsetyout:-30; durationout:400; parallaxlevel:0;">House for your family</p>
                    <p style="font-weight:600; font-family:'Comfortaa', cursive; font-size:2.6rem; line-height:20px; top:360px; left:50px;" class="ls-l text-primary" data-ls="offsetyin:30; durationin:1000; delayin:150 offsetyout:-30; durationout:400; parallaxlevel:0;">Dream</p>
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:340px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:600; offsetyout:-30; durationout:400; parallaxlevel:0;">Best featured family appartment this month</p> --}}
                   {{--  <div style="top:410px; left:53px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; height:2px; width:350px; background:#adadad;" class="ls-l" data-ls="showinfo:1; durationin:1000; delayin:1200; offsetyout:-30; durationout:400; scalexin:0;"></div> --}}
                    {{-- <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:400px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:30; durationin:1000; delayin:1600; offsetyout:-30; durationout:400; parallaxlevel:0;"><i class="fas fa-map-marker-alt text-primary"></i> 1744 Daylene Drive Newport MI 48166, Australia</p>
                    <p style="font-weight:400; font-size:15px; line-height:76px; color:#ffffff; top:440px; left:53px; white-space:nowrap;" class="ls-l" data-ls="offsetyin:0; durationin:1000; delayin:2200; offsetyout:-30; durationout:400; parallaxlevel:0;">$ 12500.00 / Monthly</p> --}}
                    
                    <a class="ls-l" href="#" target="-self" data-ls="offsetyin:30; durationin:1000; delayin:2800; offsetyout:-30; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallaxlevel:0;">
                        <p style="font-weight:500; text-align:center; cursor:pointer; padding-top:12px; padding-bottom:11px; font-family:'Varela Round', sans-serif; font-size:30px; top:530px; left:53px; border-top:2px solid #fff; border-right:2px solid #fff; padding-right:25px; border-bottom:2px solid #fff; border-left:2px solid #fff; padding-left:25px; line-height:30px; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; color:#ffffff; background:rgba(0, 0, 0, 0.1); border-radius:2px; font-weight:500; text-align:center; cursor:pointer;"
                            class="ls-button">View Details
                        </p>
                    </a>
                  {{--   <div style="text-align:center; width:100px; height:35px; line-height: 35px; font-family:'Varela Round', sans-serif; font-size:15px; color:#ffffff; border-radius:3px; top:460px; left:260px;" class="ls-l bg-primary" data-ls="delayin:3200; easingin:easeOutElastic; rotateyin:-300; durationout:400; rotateyout:-400; parallaxlevel:0;">For Rent</div> --}}
                </div>
                
                
            </div>
        </div>
        <!--============== Slider Section End ==============-->

        <!--============== Search One Section Start ==============-->
        <div class="full-row py-4 bg-gray">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-md-8">
                        <h3 class="mt-2 text-secondary">Discover your dream house by search</h3>
                    </div>
                    <div class="col-md-4"> <a class="btn btn-primary d-table float-md-end" href="#">Advance Search</a> </div>
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
                            <li class="nav-item"> <a class="nav-link py-1" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-1" id="pills-contact-tab2" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-1" id="pills-contact-tab3" data-bs-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/02.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/03.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/04.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$172,000 <span class="text-white">$170/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Himalia Luxury Condos</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/05.jpg" alt="">
                                                <div class="sale bg-secondary text-white">100% Sals</div>
                                                <div class="price text-primary">$386,000 <span class="text-white">Fixed Amount</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Gulfishan 2 Story Building</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/06.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile">
                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/06.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/05.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$386,000 <span class="text-white">Fixed Amount</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Gulfishan 2 Story Building</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/04.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$172,000 <span class="text-white">$170/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Himalia Luxury Condos</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/02.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/03.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-resturant" role="tabpanel" aria-labelledby="pills-resturant">
                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/02.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/03.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/04.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$172,000 <span class="text-white">$170/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Himalia Luxury Condos</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                                <div class="featured bg-primary text-white">100% Sals</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$386,000 <span class="text-white">Fixed Amount</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Gulfishan 2 Story Building</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/06.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact">
                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/04.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$172,000 <span class="text-white">$170/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Himalia Luxury Condos</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/05.jpg" alt="">
                                                <div class="featured bg-primary text-white">100% Sals</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$386,000 <span class="text-white">Fixed Amount</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Gulfishan 2 Story Building</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/06.jpg" alt="">
                                                <div class="featured bg-primary text-white">Featured</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$582,000 <span class="text-white">$2430/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2500</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/02.jpg" alt="">
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>2200</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-thumb hover-zoomer">
                                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/03.jpg" alt="">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white">For Sale</div>
                                                <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                                <div class="starmark text-white"><i class="far fa-star"></i></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-4">
                                                    <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                                    <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span>3400</span> Sqft</li>
                                                        <li><span>2</span> Beds</li>
                                                        <li><span>3</span> Rooms</li>
                                                        <li><span>3</span> Baths</li>
                                                        <li><span>1</span> Garage</li>
                                                        <li><a href="#">+More</a></li>
                                                    </ul>
                                                </div>
                                                <div class="px-4 py-3 d-flex justify-content-between w-100">
                                                    <div class="float-start"><i class="fas fa-user text-primary me-1"></i> Jeson Billiam</div>
                                                    <div class="float-end"><i class="far fa-calendar-alt text-primary me-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Recent Property Section End ==============-->

        <!--============== Text Block One Section Start ==============-->
        <div class="full-row bg-white pb-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-secondary double-down-line text-center">What We Do</h2>
                        <span class="text-center mt-4 d-block mb-5">We listed our oppertunity and servies as a real estate company</span> </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s"> <i class="flaticon-house flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Buy / Investment</a></h5>
                            <p>Quam vestibulum sociis libero, pellentes vel montes purus taciti vivamus sapien etiam montes. Nostra cras vulputate luctu ipsum, ullamcorper ridiculus porta.</p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="#">Learn More</a> </div>
                    </div>
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s"> <i class="flaticon-diagram flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Increase Value</a></h5>
                            <p>Quam vestibulum sociis libero, pellentes vel montes purus taciti vivamus sapien etiam montes. Nostra cras vulputate luctu ipsum, ullamcorper ridiculus porta.</p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="#">Learn More</a> </div>
                    </div>
                    <div class="col">
                        <div class="py-5 px-4 text-center hover-bg-white hover-shadow rounded transation-3s"> <i class="flaticon-rent flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="service-details.html">Passive Cashflow</a></h5>
                            <p>Quam vestibulum sociis libero, pellentes vel montes purus taciti vivamus sapien etiam montes. Nostra cras vulputate luctu ipsum, ullamcorper ridiculus porta.</p>
                            <a class="text-primary hover-text-secondary mt-4 d-table mx-auto" href="#">Learn More</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Text Block One Section End ==============-->

        <!--============== Popular Place Section Start ==============-->
        <div class="full-row bg-white">
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
                                <h4 class="hover-text-primary"><a href="#">New York</a></h4>
                                <span>31 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/02.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Florida</a></h4>
                                <span>12 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/03.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Los Angeles</a></h4>
                                <span>17 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="overflow-hidden position-relative overlay-secondary hover-zoomer z-index-9 h-100"> <img class="h-100" src="/assets/images/thumbnail2/04.jpg" alt="">
                            <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                <h4 class="hover-text-primary"><a href="#">Miami</a></h4>
                                <span>25 Properties Listed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <i class="flaticon-reward flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-real-estate flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
                                    </div>
                                </li>
                                <li class="mb-4 text-white d-flex">
                                    <i class="flaticon-seller flat-medium float-start d-table me-4 text-primary" aria-hidden="true"></i>
                                    <div class="ps-2">
                                        <h5 class="mb-3">Experience Quality</h5>
                                        <p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
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
                        <h2 class="text-secondary double-down-line text-center">How It Works</h2>
                        <span class="text-center mt-4 d-block mb-5">Process to get your right one, almost easy, flexible and fun.</span>
                    </div>
                </div>
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-home flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Search Your Home</h5>
                            <p>Select your home or appartment and let’s contact with us. Ask what answer you need. You can also contact with the agent if you have any question.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-contact flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Let's Contact With Us</h5>
                            <p>Select your home or appartment and let’s contact with us. Ask what answer you need. You can also contact with the agent if you have any question.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-5 mb-4 bg-white shadow-one rounded">
                            <i class="flaticon-payment flat-medium text-primary" aria-hidden="true"></i>
                            <h5 class="text-secondary py-2 mt-3 mb-2">Make a Deal and Payment</h5>
                            <p>Sign upi online and move in as soon as you ready! We complete your property deal in our office. After the deal you can pay the instalment or rent in online.</p>
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
                    <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/01.jpg" alt="image">
                                <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                                <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/02.jpg" alt="image">
                                <div class="date text-white position-absolute z-index-9">November 10, 2018</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Your investment is our heart, so you can stay in relax.</a></h6>
                                <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="hover-zoomer thumb-two shadow-one">
                            <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/03.jpg" alt="image">
                                <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                            </div>
                            <div class="p-4">
                                <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family house planing.</a></h6>
                                <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Blog Section End ==============-->

        <!--============== Massage Box One Section Start ==============-->
        <div class="full-row bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white text-center line-height-50">How to Become Easy and Flexible to Living in Los Angles. Get A Comfortable Appartment in Budget.</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Massage Box One Section End ==============-->

@endsection
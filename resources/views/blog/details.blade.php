@extends('layouts.app')
@section('content')
    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Blog Details</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                            <li class="breadcrumb-item active">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

    <!--============== Blog Details & Sidebar Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-2">
                    <div class="blog-sidebar mt-md-50">
                        <div class="search_widget">
                            <form action="#" method="post">
                                <input class="form-control" type="text" name="search" placeholder="Search Here" />
                            </form>
                        </div>
                        <div class="navigation_link_widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Categories</h4>
                            <ul>
                                <li><a href="#">Housing Properties (05)</a></li>
                                <li><a href="#">Appartment (01)</a></li>
                                <li><a href="#">Luxury Condos (03)</a></li>
                                <li><a href="#">Construction (04)</a></li>
                                <li><a href="#">Green Villas (02)</a></li>
                                <li><a href="#">Commertial (06)</a></li>
                            </ul>
                        </div>
                        <div class="recent_post_widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent Post</h4>
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/01.jpg" alt=""></a>
                                    <div class="post-info">
                                        <h6 class="text-secondary hover-text-primary"><a href="#">Your investment is our heart.</a></h6>
                                        <span>February 22, 2021</span> </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/02.jpg" alt=""></a>
                                    <div class="post-info">
                                        <h6 class="text-secondary hover-text-primary"><a href="#">Our team are working to provide.</a></h6>
                                        <span>February 20, 2021</span> </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/03.jpg" alt=""></a>
                                    <div class="post-info">
                                        <h6 class="text-secondary hover-text-primary"><a href="#">Your investment is our heart.</a></h6>
                                        <span>February 15, 2021</span> </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/04.jpg" alt=""></a>
                                    <div class="post-info">
                                        <h6 class="text-secondary hover-text-primary"><a href="#">Our team are working to provide.</a></h6>
                                        <span>February 02, 2021</span> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="property_list_widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Latest Property</h4>
                            <ul>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/01.jpg" alt=""></a>
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary"><a href="property-single-1.html">Nirala Appartment</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                        <div class="mt-2 d-flex">
                                            <span class="text-primary h6">$1280 <sub>/ Mo</sub></span>
                                            <span class="mx-2">|</span>
                                            <span class="text-secondary">Housing</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/02.jpg" alt=""></a>
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary"><a href="property-single-1.html">New Luxury Condos</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                        <div class="mt-2 d-flex">
                                            <span class="text-primary h6">$1280 <sub>/ Mo</sub></span>
                                            <span class="mx-2">|</span>
                                            <span class="text-secondary">Housing</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/03.jpg" alt=""></a>
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary"><a href="property-single-1.html">Zarafaloz Appartment</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                        <div class="mt-2 d-flex">
                                            <span class="text-primary h6">$1280 <sub>/ Mo</sub></span>
                                            <span class="mx-2">|</span>
                                            <span class="text-secondary">Housing</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><img src="/assets/images/thumbnaillist/04.jpg" alt=""></a>
                                    <div class="thumb-body">
                                        <h6 class="text-secondary hover-text-primary"><a href="property-single-1.html">Monopuly Trade Center</a></h6>
                                        <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> Avenue South Burlington, Los Angles</span>
                                        <div class="mt-2 d-flex">
                                            <span class="text-primary h6">$1280 <sub>/ Mo</sub></span>
                                            <span class="mx-2">|</span>
                                            <span class="text-secondary">Housing</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="featured_property_widget mt-5">
                            <h4 class="mt-5 mb-4 text-secondary">Featured Property</h4>
                            <div class="owl-carousel featured-property">
                                <div class="featured-thumb hover-zoomer mb-4 bg-gray">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/01.jpg" alt="">
                                        <div class="featured bg-primary text-white">Featured</div>
                                        <div class="sale bg-secondary text-white">For Sale</div>
                                        <div class="price text-primary">$352,000 <span class="text-white">$1200/Sqft</span></div>
                                        <div class="starmark text-white"><i class="far fa-star"></i></div>
                                    </div>
                                    <div class="featured-thumb-data">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Nirala Appartment</a></h5>
                                            <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    </div>
                                </div>
                                <div class="featured-thumb hover-zoomer mb-4 bg-gray">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/02.jpg" alt="">
                                        <div class="featured bg-primary text-white">Featured</div>
                                        <div class="sale bg-secondary text-white">For Sale</div>
                                        <div class="price text-primary">$212,000 <span class="text-white">$1200/Sqft</span></div>
                                        <div class="starmark text-white"><i class="far fa-star"></i></div>
                                    </div>
                                    <div class="featured-thumb-data">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Apolo Family Appartment</a></h5>
                                            <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    </div>
                                </div>
                                <div class="featured-thumb hover-zoomer mb-4 bg-gray">
                                    <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/thumbnail/03.jpg" alt="">
                                        <div class="featured bg-primary text-white">Featured</div>
                                        <div class="sale bg-secondary text-white">For Sale</div>
                                        <div class="price text-primary">$52,000 <span class="text-white">$1200/Sqft</span></div>
                                        <div class="starmark text-white"><i class="far fa-star"></i></div>
                                    </div>
                                    <div class="featured-thumb-data">
                                        <div class="p-4">
                                            <h5 class="text-secondary hover-text-primary mb-2"><a href="#">Office Floor In Trade Center</a></h5>
                                            <span class="location"><i class="fas fa-map-marker-alt text-primary"></i> Avenue South Burlington, Los Angles</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div class="blog-details bg-white text-ordinary mb-30">
                        <div class="thumb-two overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/1.png" alt="image">
                            <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                        </div>
                        <div class="blog-content mt-5">
                            <div class="blog-info">
                                <h4 class="mb-4 text-secondary">This is a Standard Post with preview images</h4>
                                <p>Dictum proin conubia parturient ligula torquent interdum lorem, fermentum nullam nullam iaculis quam curae; parturient donec faucibus tempor rutrum litora augue velit aliquam Cubilia elementum, sociis vitae facilisis
                                    Urna aptent mus natoque.</p>
                                <p>oster best practices effectiveness inspire breakthroughs solve immunize turmoil. Policy dialogue peaceful The Elders rural global support. Process inclusive innovate readiness, public sector complexity. Lifting people
                                    up cornerstone partner, technology working families civic engagement activist recognize potential global network. Countries tackling solution respond change-makers tackle. Assistance, fight against malnutrition
                                    experience in the field lasting change scalable. Empowerment long-term, fairness policy community progress social responsibility; Cesar Chavez recognition. Expanding community ownership visionary indicator pursue
                                    these aspirations accessibility. Achieve; worldwide, life-saving initiative facilitate. New approaches, John Lennon humanitarian relief fundraise vaccine Jane Jacobs community health workers Oxfam. Our ambitions
                                    informal economies.</p>
                                <blockquote><i class="fas fa-quote-left text-primary me-2"></i>Lacinia eu lectus et pede sociis rutrum dapibus, fames semper blandit vivamu ornare dictum mauris metus enim morbi augue iaculis tortor congue ridiculus vel faucibus
                                    fringilla curae;. Eget integer diam tempor pellentesque pellientes que a adipiscing neque dolor tri ullamcorper lacus elit etiam Felis posuere dio semper pede enim. Pretium augue vitae.<i class="fas fa-quote-right text-primary ms-2"></i></blockquote>
                                <p>Mus tempor laoreet eu ac. Condimentum. Velit nisi imperdiet turpis. Vivamus suscipit purus eget nec sagittis nulla penatibus sodales ipsum primis. Duis ac. Velit. Pretium, posuere semper ipsum penatibus sociosqu malesuada
                                    bibendum fermentum condimentum dis tempus sociosqu diam nulla ante. Nunc cras urna ipsum quam est blandit mus. Magna pretium fermentum praesent risus interdum. Erat. Massa lectus habitant tristique curabitur pede
                                    torquent urna accumsan. Mi tempus erat, leo amet ultricies dolor malesuada eu nibh placerat ultricies torquent lacus facilisi etiam viverra vehicula aptent tempus justo vestibulum pulvinar class gravida eleifend
                                    non habitasse nec libero consectetuer mi consectetuer. Pharetra pharetra. Massa.</p>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mt-5">
                                <label class="me-4 text-secondary font-weight-bold my-1">Share This Post In Your Media :</label>
                                <div class="media-widget text-secondary hover-text-primary my-1">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fas fa-rss"></i></a>
                                </div>
                            </div>
                            <hr class="my-5">
                            <h4 class="inner-title w-100 d-table text-secondary">Comments (03)</h4>
                            <ul class="post-comments">
                                <li class="py-4 d-flex">
                                    <div class="avata"><img src="/assets/images/blog/details/1.png" alt=""></div>
                                    <div class="comment-detail">
                                        <div class="d-sm-flex">
                                            <h5 class="text-secondary me-2">Rebecca D. Nagy</h5>
                                            <span class="ms-auto mb-xs-15 d-xs-block">27 February, 2018 at 3.27 pm</span> </div>
                                        <p>Fermentum mus porttitor tempor arcu posuere. Nibh consectetuer condimentum ultricies pulvinar eget pede litora interdum magna aenean ullamcorper nisi dis. Viverra. Vulputate. Quisque neque luctus quis rhoncus.</p>
                                        <a href="#" class="text-primary hover-text-secondary">Replay</a> </div>
                                </li>
                                <li class="py-4 d-flex">
                                    <div class="avata"><img src="/assets/images/blog/details/2.png" alt=""></div>
                                    <div class="comment-detail">
                                        <div class="d-sm-flex">
                                            <h5 class="text-secondary me-2">Charles F. Bush</h5>
                                            <span class="ms-auto mb-xs-15 d-xs-block">27 February, 2018 at 3.27 pm</span> </div>
                                        <p>Fermentum mus porttitor tempor arcu posuere. Nibh consectetuer condimentum ultricies pulvinar eget pede litora interdum magna aenean ullamcorper nisi dis. Viverra. Vulputate. Quisque neque luctus quis rhoncus.</p>
                                        <a href="#" class="text-primary hover-text-secondary">Replay</a> </div>
                                </li>
                                <li class="py-4 d-flex">
                                    <div class="avata"><img src="/assets/images/blog/details/3.png" alt=""></div>
                                    <div class="comment-detail">
                                        <div class="d-sm-flex">
                                            <h5 class="text-secondary me-2">Patty Hurd</h5>
                                            <span class="ms-auto mb-xs-15 d-xs-block">27 February, 2018 at 3.27 pm</span> </div>
                                        <p>Fermentum mus porttitor tempor arcu posuere. Nibh consectetuer condimentum ultricies pulvinar eget pede litora interdum magna aenean ullamcorper nisi dis. Viverra. Vulputate. Quisque neque luctus quis rhoncus.</p>
                                        <a href="#" class="text-primary hover-text-secondary">Replay</a> </div>
                                </li>
                            </ul>
                            <hr class="my-5">
                            <div class="comment-form">
                                <form action="#" method="post">
                                    <h5 class="Inner-title mb-4 text-secondary">Leave a Replay</h5>
                                    <div class="row g-3">
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control bg-gray" placeholder="Your Name*">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control bg-gray" placeholder="Email Address*">
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="password" class="form-control bg-gray" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control bg-gray" rows="8" placeholder="Type Comments..."></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary mt-3">Comments</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Blog Details & Sidebar Section End ==============-->

@endsection
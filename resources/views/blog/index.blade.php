@extends('layouts.app')
@section('content')
    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Blog</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="index-1.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

    <!--============== Blog & Sidebar Section Start ==============-->
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
                    <div class="row row-cols-md-2 row-cols-1 g-4">
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/01.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
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
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/03.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family members about a dream house.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/01.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
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
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/03.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family members about a dream house.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/01.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
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
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/03.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family members about a dream house.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/01.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">November 26, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">Our team are working to provide the owneship of property.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
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
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative"> <img src="/assets/images/blog/03.jpg" alt="image">
                                    <div class="date text-white position-absolute z-index-9">October 31, 2018</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="blog-details.html">What do you thinking for your family members about a dream house.</a></h6>
                                    <p>Nunc tempus, auctor mauris montes, attis fringilla dignissim. Vitae habitant estibulum quisque commodo.</p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="#">Read More</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                    <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">45</a></li>
                                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Blog & Sidebar Section End ==============-->

@endsection
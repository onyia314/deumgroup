@extends('layouts.app')

@push('title')
<title>Frequently Asked Questions</title>
@endpush

@push('meta-tags')
<meta name="description" content="Frequently asked questions">

<meta name="keywords" content="deumgroup faq, deumgroup frequently asked questions, deumgroup of companies">
<meta name="Deum Group" content="Deum group">
@endpush

@push('link-tags')
<link rel="icon" type="image/png" href="/assets/images/logo/deum-engineering.png">
@endpush

@section('content')

        <!--============== FAQ Section Start ==============-->
        <div class="full-row bg-white" style="padding-top:30px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="navigation_link_widget mb-5 bg-gray p-4">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">FAQ’s Category</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Realestate</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Engineering</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ICT</button>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-8">
                        <div class="info-pages bg-gray px-4 py-5">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Is Deum Real Estate a registered company?</h5>
                                            <p>
                                                Deum Real Estate Ltd is a real estate Marketing, 
                                                Development and Investment Company
                                                incorporated under the COMPANIES AND ALLIDE MATTERS ACT
                                                1990 with RC No 1741785. 
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Why should I trust lands from Deum Real Estate?</h5>
                                            <p>
                                                All lands are registered with the
                                                Housing Development Corporation
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Can I pay in installments for lands?</h5>
                                            <p>
                                                Check the details concerning each Estate for 
                                                sale to see installment payment is one of the
                                                options available as the Packages may vary.
                                                You can contact us to clarify you more on each package. 
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">What scale of Project can Deum Engineering carryout?</h5>
                                            <p>
                                                Deum Engineering can and has carried out major construction 
                                                works which includes residential Building,
                                                 Schools, Offices, Renovation, Road construction, Water projects etc. 
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Which Engineering Departments do you accept contracts from?</h5>
                                            <p>
                                                Civil Engineering, Electrical and Electronics Engineering, 
                                                other Engineering fields and General Engineering Consultancy.
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">What experience does Deum Engineering have with handling Large Scale projects</h5>
                                            <p>
                                                We have worked with numerous Private and Government Establishments providing 
                                                High quality Projects delivered at the adequate time
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Do Deum Engineering carry out Constructions to the Nigerian Standards for Engineering Constructions?</h5>
                                            <p>
                                                Deum Engineering has Engineers licensed by COREN that ensure that all Construction works 
                                                are carried out to Nigerian Engineering specifications. 
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="faq-item mb-4"> <span class="faq-question bg-primary text-white">Q</span>
                                        <div class="d-table">
                                            <h5 class="mb-2 text-secondary">Is Deum Engineering licensed to carryout Engineering practices in Nigeria</h5>
                                            <p>
                                                Deum Engineering Consultancy Limited is a leading name in 
                                                Engineering Consultancy in Nigeria incorporated
                                                under the COMPANIES AND ALLIDE MATTERS ACT 1990 with RC No 119230 in PURSUANT TO SECTION 659. 
                                            </p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Not available yet</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== FAQ Section End ==============-->
@endsection
@extends('layouts.app')

@push('title')
<title>Deum group List of Lands for purchase</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum group List of Lands for purchase">
<meta name="keywords" content="deum group land, deumgroup, deumgroup land">
<meta name="Deum Group" content="Deum group List of Lands for purchase">
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
                    <h3 class="page-name text-secondary m-0">Land</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('lands.index')}}">Lands</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

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

                <div>{{$lands->links()}}</div>
            </div>
        </div>
    
@endsection
        <!--============== Recent Property Section End ==============-->
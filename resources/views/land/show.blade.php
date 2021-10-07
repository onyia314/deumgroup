@extends('layouts.app')

@push('title')
<title>{{$land->description}}</title>
@endpush

@push('meta-tags')
<meta name="description" content="{{$land->description}}">
<meta name="keywords" content="deum group land, deumgroup, deumgroup land">
<meta name="Deum Group" content="{{{$land->description}}}">
@endpush

@push('link-tags')
<link rel="icon" href="{{'/uploads' .'/' .$land->image_path}}">
@endpush

@section('content')

    <!--============== Banner Section Start ==============-->
    <div class="page-banner full-row bg-gray py-2">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-3">
                <div class="col">
                    <h3 class="page-name text-secondary m-0">Land Details</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('lands.index')}}">Lands</a></li>
                            <li class="breadcrumb-item active">Land Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
     </div>
    <!--============== Banner Section End ==============-->
            
    <div class="full-row bg-white">
        <div class="container">

            <div class="row">
                
                <div class="col-12">
                    <div class="blog-details bg-white text-ordinary mb-30">
                        <div class="thumb-two overlay-black overflow-hidden position-relative"> <img src="{{'/uploads' .'/' .$land->image_path}}" alt="image">
                            <div class="date text-white position-absolute z-index-9">{{$land->created_at->format('d/m/Y')}}</div>
                        </div>
                        <div class="blog-content mt-5">
                            <div class="blog-info">
                                <h4 class="mb-4 text-secondary">{{$land->location}}</h4>
                                <p>{{$land->description}}</p>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mt-5">
                                <label class="me-4 text-secondary font-weight-bold my-1">Share This Post In Your Media :</label>
                                <div class="media-widget text-secondary hover-text-primary my-1">
                                    <a href="{{'https://www.facebook.com/sharer/sharer.php?u=' .urlencode(url()->full()) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{'https://api.whatsapp.com/send?text=' .url()->full() }}" data-action="share/whatsapp/share" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    <a href="{{'https://twitter.com/intent/tweet?url=' .url()->full()}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Blog Details & Sidebar Section End ==============-->

@endsection
@extends('layouts.app')
@push('title')
<title>Deum group List of engineering projects</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum group List of engineering projects">
<meta name="keywords" content="deum group projects, deumgroup engineering projects, deumgroup projects">
<meta name="Deum Group" content="Deum group List of engineering projects">
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
                    <h3 class="page-name text-secondary m-0">Projects</h3>
                </div>
                <div class="col">
                    <nav class="float-start float-md-end">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Engineering Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Banner Section End ==============-->

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

            <div>{{$projects->links()}}</div>
        </div>
    </div>
    <!--============== project Section End ==============-->
   

@endsection
@extends('layouts.app')
@push('title')
<title>Deum group category posts</title>
@endpush

@push('meta-tags')
<meta name="description" content="Deum group blog posts">
<meta name="keywords" content="deum group blog, deumgroup blog, deumgroup posts">
<meta name="Deum Group" content="Deum group blog posts">
@endpush

@push('link-tags')
<link rel="icon" type="image/png" href="/assets/images/logo/deum-engineering.png">
@endpush

@section('content')

    <!--============== Banner Section Start ==============-->
    {{-- <div class="page-banner full-row bg-gray py-5">
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
    </div> --}}
    <!--============== Banner Section End ==============-->

    <!--============== Blog & Sidebar Section Start ==============-->
    <div class="full-row bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 order-lg-1">
                    <div class="row row-cols-md-2 row-cols-1 g-4">

                        @foreach ($posts as $post)

                        <div class="col">
                            <div class="hover-zoomer thumb-two shadow-one">
                                <div class="overlay-black overflow-hidden position-relative">
                                     <img src="{{'/uploads' .'/' .$post->image_path}}" alt="image">
                                    <div class="date text-white position-absolute z-index-9">{{$post->title}}</div>
                                </div>
                                <div class="p-4">
                                    <h6 class="text-secondary hover-text-primary mb-4"><a href="{{route('posts.show' , $post->slug)}}">{{Str::words($post->content , 5)}}</a></h6>
                                    <p>
                                        @foreach ($post->categories as $category)
                                            <span>{{$category->name}}</span>
                                        @endforeach
                                    </p>
                                    <a class="mt-3 text-primary hover-text-secondary" href="{{route('posts.show' , $post->slug)}}">Read More</a> 
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                               {{--  <ul class="pagination">
                                    <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                    <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">45</a></li>
                                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                </ul> --}}
                                {{$posts->links()}}
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-lg-2">
                    <div class="blog-sidebar mt-md-50">

                        {{-- <div class="search_widget">
                            <form action="#" method="post">
                                <input class="form-control" type="text" name="search" placeholder="Search Here" />
                            </form>
                        </div> --}}

                        @include('post.includes.categories')
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============== Blog & Sidebar Section End ==============-->

@endsection
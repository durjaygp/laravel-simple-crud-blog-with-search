@extends('frontEnd.master')
@section('title')
{{$blog->title}}
@endsection
@section('content')
    <section class="blog blog-left pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">

                        <div class="blog-single-in align-items-center d-md-flex bg-navy ">
                            <div class="blog-date w-25 me-4">
                                <div class="date text-center bg-theme p-2">
                                    <h1 class="day mb-0 white">{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</h1>
                                </div>
                            </div>
                            <div class="blog-single-in-cont w-75">
                                <div class="blog-content">
                                    <h1 class="blog-title mb-0"><a href="blog-single.html" class="white">{{$blog->title}}</a></h1>
                                </div>
                            </div>
                        </div>

                        <div class="blog-wrapper">
                            <div class="blog-content">
                                <div class="blog-imagelist mb-3">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                </div>
                                <p class="mb-3">{!! $blog->description !!}</p>
                            </div>


                            <!-- blog share -->
                            <div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
                                <div class="header-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
{{--                            <div class="author-news mb-4 box-shadow p-4 text-center">--}}
{{--                                <div class="author-news-content">--}}
{{--                                    <div class="author-thumb mb-1">--}}
{{--                                        <img src="{{asset('frontEnd')}}/images/team/img2.jpg" alt="author">--}}
{{--                                    </div>--}}
{{--                                    <div class="author-content">--}}
{{--                                        <h3 class="title mb-1"><a href="#">Relson Dulux</a></h3>--}}
{{--                                        <p class="mb-2">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>--}}
{{--                                        <div class="header-social">--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="popular-post sidebar-item mb-4">
                                <div class="sidebar-tabs">
                                    <div class="post-tabs">
                                        <!-- tab navs -->
                                        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button aria-controls="popular" aria-selected="false" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Latest Post</button>
                                            </li>
                                        </ul>
                                        <!-- tab contents -->
                                        <div class="tab-content" id="postsTabContent">
                                            @foreach($blogs as $blog)
                                            <article class="post mb-3 border-b pb-3">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3">
                                                        <a href="blog-single.html"><img src="{{asset($blog->image)}}" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="blog-single.html">{{$blog->title}}</a></h5>
                                                        <div class="date">{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</div>
                                                    </div>
                                                </div>
                                            </article>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item mb-4">
                                <h4 class="">All Categories</h4>
                                <ul class="sidebar-category">
                                    @foreach($categories as $cat)
                                        <li><a href="{{route('category',['slug'=>$cat->slug])}}">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

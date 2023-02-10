@extends('frontEnd.master')
@section('title')
{{$cat->name}}
@endsection

@section('content')
    <section class="trending-topic pb-5">
        <div class="container">
            <div class="section-title mb-4 pb-1 w-50">
                <h2 class="m-0"><span>Category </span> {{$cat->name}}</h2>
            </div>
            <div class="trending-topic-main">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="trending-topic-item box-shadow before-none">
                                <div class="trending-topic-image overflow-hidden">
                                    <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                    <div class="trending-topic-content">
                                        <h4 class="mb-0 text-center py-1 px-3 bg-white position-absolute"><a href="{{route('category',['slug'=>$cat->slug])}}">{{$cat->name}}</a></h4>
                                    </div>
                                </div>
                                <div class="trending-topic-title p-3 bg-white w-100 d-inline-block">
                                    <h5 class="mb-1">
                                        <a href="{{route('blog',['slug'=>$blog->slug])}}">{{$blog->title}}</a>
                                    </h5>
                                    <p class="date mb-0">
                                        {{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination-main text-center">
                {{$blogs->links()}}
            </div>
        </div>
    </section>
@endsection

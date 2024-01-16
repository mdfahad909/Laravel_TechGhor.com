@extends('layout.viewApp')

@section('content')
<div class="main-content">
    <!--Full width header Start-->
    @include('partials.header')
    <!--Full width header End-->

             <!-- Breadcrumbs Start -->
            <div class="tg-breadcrumbs img3">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="{{ route('/') }}">Home</a>
                        </li>
                       <li>Blog </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

<div class="tg-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Latest Posts</h3>
                        </div>
                        @foreach ($post_limit as $post_data)
                            
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/blog/'.$post_data->thumbnail) }}" alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="{{ route('blogDetails') }}">{{ $post_data->title }}</a>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>{{ date('d-M-Y H:i', strtotime($post_data->created_at)); }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="categories mb-50">
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            @foreach ($category as $category_data)
                                <li><a href="{{ $category_data->category_name }}">{{ $category_data->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15">
                <div class="row">
                    @foreach ($post as $posts)
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="{{ route('blogDetails') }}"><img src="{{ asset('assets/images/blog/'.$posts->thumbnail) }}" alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="{{ route('blogDetails') }}">{{ $posts->category->category_name  }}</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="{{ route('blogDetails',$posts->id)}}">{{ $posts->title }}</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i>{{ date('d-M-Y', strtotime($posts->created_at)); }}
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i>{{ $posts->user->name  }}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">{!! \Illuminate\Support\Str::words($posts->short_description, 30,'....')  !!}
                                </div>
                                <div class="blog-button inner-blog">
                                    <a class="blog-btn" href="{{ route('blogDetails', $posts->id) }}">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
    
@endsection
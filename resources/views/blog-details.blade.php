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


<h1><marquee behavior="" direction="">Ajax a korte hobe</marquee></h1>

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
                                    <i class="fa fa-calendar"></i>{{ date('d-M-Y', strtotime($post_data->created_at)); }}
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
                                <li><a href="#">{{ $category_data->category_name }}</a></li>
                            @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    @foreach ($post as $post_data)
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="#"><img src="{{ asset('assets/images/blog/'.$post_data->thumbnail) }}" alt="Image"></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#">{{ $post_data->category->category_name }}</a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                             {!! $post_data->details !!}
                                          
                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            
                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="mailer.php">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div> 
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn-part">
                                                           <a class="readon learn-more post" href="#">Post Comment</a>
                                                        </div> 
                                                    </fieldset>
                                                </form>
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
    
</div>
    
@endsection
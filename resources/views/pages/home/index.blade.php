@extends('layouts.base')

@section('page.title')
    Gallivant
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="position-relative">
                <h6 class="content-title">
                    Choose A Category
                </h6>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                            <div class="swiper-slide">
                                <a href="#">
                                    <div class="slider-card">
                                        <div class="slider-img">
                                            <a href="{{route('category', ['id' => $category->id])}}">
                                                <img src="{{asset('storage/'.$category->img_path)}}" alt="Category">
                                            </a>
                                        </div>
                                        <div class="centered">{{__($category->name)}}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                        <path
                            d="M31.7777 23.5834L0.333356 23.5834L0.333357 18.4167L31.7777 18.4167L17.9207 4.55971L21.5735 0.906874L41.6667 21L21.5735 41.0932L17.9207 37.4404L31.7777 23.5834Z"
                            fill="#141414"/>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                        <path
                            d="M20.2223 28.4166H51.6667V33.5833H20.2223L34.0793 47.4403L30.4265 51.0931L10.3333 31L30.4265 10.9068L34.0793 14.5596L20.2223 28.4166Z"
                            fill="#141414"/>
                    </svg>
                </div>
            </div>
            <div class="explores">
                <h6 class="content-title">
                    Featured Explore
                </h6>
                <div class="row">
                    @foreach($featuredPosts as $post)
                        <div class="col-xl-4 col-md-6 ">
                            <div class="explores-content">
                                <div class="explores-card">
                                    <a href="{{route('single',['id' => $post->id])}}">
                                        <img class="blog-image" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                    </a></div>
                                <div class="explores-text">
                                    <h6 class="explores-title">{{__($post->title)}}</h6>
                                    <div class="explores-context">{{__($post->description)}}
                                    </div>
                                    <div class="explores-text-footer">
                                        <a href="{{route('category', ['id' => \App\Models\Category::where(
                                                'id', \App\Models\PostCategory::where('post_id', $post->id)->first()
                                                ->category_id)->first()->id])}}">
                                            <div class="explores-category">
                                                {{\App\Models\Category::where(
                                                 'id', \App\Models\PostCategory::where(
                                                     'post_id', $post->id)->first()->category_id)->first()->name
                                             }}
                                            </div>
                                        </a>
                                        <div class="explores-by">&nbspBy &nbsp</div>
                                        <div class="explores-author">
                                            {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
                                            (\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            {{$featuredPosts->links()}}

            <div class="blog">
                <h6 class="content-title">
                    My latest blog
                </h6>
                <div class="row">
                    <div class="col-md-8 ">
                        @foreach($latestPosts as $post)
                            <div class="row">
                                <div class="col-lg-6 col-md-10 ">
                                    <div class="blog-card">
                                        <a href="{{route('single',['id' => $post->id])}}">
                                            <img class="blog-image" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-10 ">
                                    <div class="blog-content">
                                        <h6 class="blog-title">{{__($post->title)}}</h6>
                                        <div class="blog-author">
                                            <div class="blog-post">Post</div>
                                            <div class="blog-by">By</div>
                                            <div class="blog-sign">
                                                {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
                                           (\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                            </div>
                                        </div>
                                        <div class="blog-data">
                                            <div class="blog-date">{{\App\Helpers\DateFormatHelper::index(explode(" ", $post->created_at)[0])}}</div>
                                            <div class="blog-hr"></div>
                                            <div class="blog-comments">
                                                <a class="blog-comments-ref" href="#">
                                                    {{\App\Models\Comment::where('post_id', $post->id)->count()}} comments
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-text">{{$post->description}}
                                        </div>
                                        <div class="blog-more">
                                            <a class="blog-more-ref" href="{{route('single',['id' => $post->id])}}">
                                                Read More ......</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-4 ">
                        <div class="blog-sidebar">
                            <h6 class="sidebar-title">
                                Popular Post
                            </h6>
                            @foreach($popular as $post)
                                <div class="sidebar-post">
                                    <div class="sidebar-card">
                                        <a href="{{route('single',[$post->id])}}">
                                            <img class="sidebar-img" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-text">
                                        <div class="post-title">{{$post->title}}</div>
                                        <div class="post-author">
                                            <div class="post-post">Post</div>
                                            <div class="post-by">By</div>
                                            <div class="post-sign">
                                                {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
(\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                            </div>
                                        </div>
                                        <div class="post-data">
                                            <div class="post-date">{{\App\Helpers\DateFormatHelper::index(explode(" ", $post->created_at)[0])}}</div>
                                            <div class="post-hr"></div>
                                            <div class="post-comments">
                                                <a class="post-comment" href="#">
                                                    {{\App\Models\Comment::where('post_id', $post->id)->count()}} comments
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="blog-sidebar blog-icons">
                            <h6 class="sidebar-title">
                                Follow Me
                            </h6>
                            <div class="sidebar-icons">
                                <a href="#">
                                    <div class="header-icon">
                                        <i class="fab fa-facebook-f icon" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-icon">
                                        <i class="fab fa-twitter icon" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-icon">
                                        <i class="fab fa-instagram icon" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-icon">
                                        <i class="fab fa-youtube icon" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{$latestPosts->links()}}
    <section class="video-background margin-top-60px">
        <img src="video/home/airpods-preview.jpg" alt="">
    </section>
    <div class="video-file margin-top-60px">
        <video id="video1" controls>
            <source src="video/home/Airpods%20(Not%20For%20Poor%20People).mp4"
                    type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
        <div class="video-btn">
            <button class="video-close" type="button"><i class="fas fa-times fa-2x"></i></button>
        </div>
    </div>
    <section class="video margin-top-60px">
        <button id="close-video1" class="close-video-btn"><i class="fas fa-times fa-2x"></i></button>
        <div class="container">
            <div class="video-content">
                <h6 class="video-title">Trips For your first solo traveling</h6>
                <div class="video-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec
                    purus
                    viverra. Sit justo velit, eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing.
                    Lobortis
                    pellentesque nulla accumsan id urna, ullamcorper gravida varius.
                </div>
                <div class="video-button">
                    <button id="play1" class="video-icon" type="button">
                        <i class="fas fa-play fa-2x"></i>
                    </button>
                </div>
                <div class="video-subtitle">
                    Watch Video
                </div>
            </div>
        </div>
    </section>

@endsection


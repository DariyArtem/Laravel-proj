@extends('layouts.base')

@section('page.title')
    Gallivant
@endsection

@section('content')
    <header class="header">
        <div class="background">
            <img src="{{asset('img/header/background.png')}}" alt="">
        </div>
        <div class="background-gradient"></div>
        <div class="header-sidebar">
            <div class="sidebar-top">
                <div class="header-logo"><img src="{{asset('img/header/logo.png')}}" alt=""></div>
                <div class="header-closeSidebar">
                    <span class="close-left"></span>
                    <span class="close-right"></span>
                </div>
            </div>
            <div class="header-sidebarSearch">
                <img class="sidebar-search" src="{{asset('img/header/lupa.png')}}" alt="">
                <input class="header-input" type="text" placeholder="Search your option">
            </div>
            <div class="header-menu">
                <ul class="sidebar-references">
                    <li><a href="#">Home</a></li>
                    @if(Auth::check() && Auth::user()->role->name === 'User')
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    @endif
                    <li><a href="{{route('login')}}">Account</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </div>
            <div class="header-sidebarIcons">
                <a href="#">
                    <div class="header-icon">
                        <i class="fab fa-facebook-f icon"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="header-icon">
                        <i class="fab fa-twitter icon"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="header-icon">
                        <i class="fab fa-instagram icon"></i>
                    </div>
                </a>
                <a href="#">
                    <div class="header-icon">
                        <i class="fab fa-youtube icon"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row header-row">
                <div class="header-logo"><img src="../img/header/logo.png" alt=""></div>
                <div class="header-search">
                    <img class="header-lupa" src="../img/header/lupa.png" alt="">
                    <input class="header-input" type="text" placeholder="Search your option">
                </div>
                <div class="header-burger">
                    <div class="burger-top"></div>
                    <div class="burger-center"></div>
                    <div class="burger-bottom"></div>
                </div>
                <div class="header-icons">
                    <a href="#">
                        <div class="header-icon">
                            <i class="fab fa-facebook-f icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="header-icon">
                            <i class="fab fa-twitter icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="header-icon">
                            <i class="fab fa-instagram icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="header-icon">
                            <i class="fab fa-youtube icon"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="header-hr">
                <hr class="header--hr">
            </div>
            <menu class="header-menu">
                <ul class="header-references">
                    <li><a href="#">Home</a></li>
                    @auth()
                        @if(Auth::user()->role->name === "User")
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        @else
                            <li><a href="{{route('private')}}">Adminka</a></li>@endif
                    @else
                        <li><a href="{{route('login')}}">Account</a></li>
                    @endauth
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </menu>
            <div class="header-content">
                <div class="header-text">
                    <div class="header-title">
                        <p>Where will you go next?</p>
                    </div>
                    <div class="header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit,
                            eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan id
                            urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed. </p>
                    </div>
                    <div class="header-subtitle">
                        <p>Let’s Go.....</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="position-relative">
                <h6 class="content-title">
                    <p>Choose A Category</p>
                </h6>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="slider-card">
                                    <div class="slider-img">
                                        <img src="{{asset('storage/'.$category->img_path)}}" alt="Category">
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
                        <path d="M31.7777 23.5834L0.333356 23.5834L0.333357 18.4167L31.7777 18.4167L17.9207 4.55971L21.5735 0.906874L41.6667 21L21.5735 41.0932L17.9207 37.4404L31.7777 23.5834Z" fill="#141414"/>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                        <path d="M20.2223 28.4166H51.6667V33.5833H20.2223L34.0793 47.4403L30.4265 51.0931L10.3333 31L30.4265 10.9068L34.0793 14.5596L20.2223 28.4166Z" fill="#141414"/>
                    </svg>
                </div>
            </div>
            <div class="explores">
                <h6 class="content-title">
                    <p>Featured Explore</p>
                </h6>
                <div class="row">
                    @foreach($posts as $post)
                        @foreach($users as $user)
                            <div class="col-xl-4 col-md-6 ">
                            <div class="explores-content">
                                <div class="explores-card">
                                    <img class="explores-image" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                </div>
                                <div class="explores-text">
                                    <h6 class="explores-title">{{__($post->title)}}</h6>
                                    <div class="explores-context">{{__($post->description)}}
                                    </div>
                                    <div class="explores-text-footer">
                                        <div class="explores-category">Solo Travel</div>
                                        <div class="explores-by">&nbspBy &nbsp</div>
                                        <div class="explores-author">{{$user->name[$post->author_id]}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
            <ul class="pagination justify-content-center align-items-center">
                <li class="page-item">
                    <a href="" class="page-link">
                        <svg class="explores-pagination-prev" xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                                  fill="#141414"/>
                        </svg>
                    </a></li>
                <li class="page-item"><a href="#" class="page-link page-link-current">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                            <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                                  fill="#141414"/>
                        </svg></a></li>
            </ul>
            <div class="blog">
                <h6 class="content-title">
                    <p>My latest blog</p>
                </h6>
                <div class="row">
                    <div class="col-md-8 ">
                        <div class="row">
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-card">
                                    <img class="blog-image" src="{{asset('img/homePage/blog/blog1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        13 things i’d Tell Any New Travler
                                    </h6>
                                    <div class="blog-author">
                                        <div class="blog-post">Post</div>
                                        <div class="blog-by">By</div>
                                        <div class="blog-sign">Adam Smith</div>
                                    </div>
                                    <div class="blog-data">
                                        <div class="blog-date">10 Nov, 2020</div>
                                        <div class="blog-hr"></div>
                                        <div class="blog-comments">
                                            <a class="blog-comments-ref" href="#">50 comment</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                                        viverra. Sit justo velit, eu sed sollicitudin tempus,
                                    </div>
                                    <div class="blog-more">
                                        <a class="blog-more-ref" href="#"> Read More ......</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-card">
                                    <img class="blog-image" src="{{asset('img/homePage/blog/blog2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        5 things i’d Tell Any New Travler
                                    </h6>
                                    <div class="blog-author">
                                        <div class="blog-post">Post</div>
                                        <div class="blog-by">By</div>
                                        <div class="blog-sign">Adam Smith</div>
                                    </div>
                                    <div class="blog-data">
                                        <div class="blog-date">10 Nov, 2020</div>
                                        <div class="blog-hr"></div>
                                        <div class="blog-comments">
                                            <a class="blog-comments-ref" href="#">50 comment</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                                        viverra. Sit justo velit, eu sed sollicitudin tempus,
                                    </div>
                                    <div class="blog-more">
                                        <a class="blog-more-ref" href="#"> Read More ......</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-card">
                                    <img class="blog-image" src="{{asset('img/homePage/blog/blog3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        15 things i’d Tell Any New Travler
                                    </h6>
                                    <div class="blog-author">
                                        <div class="blog-post">Post</div>
                                        <div class="blog-by">By</div>
                                        <div class="blog-sign">Adam Smith</div>
                                    </div>
                                    <div class="blog-data">
                                        <div class="blog-date">10 Nov, 2020</div>
                                        <div class="blog-hr"></div>
                                        <div class="blog-comments">
                                            <a class="blog-comments-ref" href="#">50 comment</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                                        viverra. Sit justo velit, eu sed sollicitudin tempus,
                                    </div>
                                    <div class="blog-more">
                                        <a class="blog-more-ref" href="#"> Read More ......</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-card">
                                    <img class="blog-image" src="{{asset('img/homePage/blog/blog4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        6 things i’d Tell Any New Travler
                                    </h6>
                                    <div class="blog-author">
                                        <div class="blog-post">Post</div>
                                        <div class="blog-by">By</div>
                                        <div class="blog-sign">Adam Smith</div>
                                    </div>
                                    <div class="blog-data">
                                        <div class="blog-date">10 Nov, 2020</div>
                                        <div class="blog-hr"></div>
                                        <div class="blog-comments">
                                            <a class="blog-comments-ref" href="#">50 comment</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                                        viverra. Sit justo velit, eu sed sollicitudin tempus,
                                    </div>
                                    <div class="blog-more">
                                        <a class="blog-more-ref" href="#"> Read More ......</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-card">
                                    <img class="blog-image" src="{{asset('img/homePage/blog/blog5.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 ">
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        12 things i’d Tell Any New Travler
                                    </h6>
                                    <div class="blog-author">
                                        <div class="blog-post">Post</div>
                                        <div class="blog-by">By</div>
                                        <div class="blog-sign">Adam Smith</div>
                                    </div>
                                    <div class="blog-data">
                                        <div class="blog-date">10 Nov, 2020</div>
                                        <div class="blog-hr"></div>
                                        <div class="blog-comments">
                                            <a class="blog-comments-ref" href="#">50 comment</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                                        viverra. Sit justo velit, eu sed sollicitudin tempus,
                                    </div>
                                    <div class="blog-more">
                                        <a class="blog-more-ref" href="#"> Read More ......</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="d-md-none d-sm-flex pagination justify-content-center align-items-center pagination-mobile">
                        <li class="page-item">
                            <a href="" class="page-link">
                                <svg class="explores-pagination-prev" xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                                          fill="#141414"/>
                                </svg>
                            </a></li>
                        <li class="page-item"><a href="#" class="page-link page-link-current">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                                    <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                                          fill="#141414"/>
                                </svg></a></li>
                    </ul>
                    <div class="col-md-4 ">
                        <div class="blog-sidebar">
                            <h6 class="sidebar-title">
                                Popular Post
                            </h6>
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <img class="sidebar-img" src="{{asset('img/homePage/blog/blog1.png')}}" alt="">
                                </div>
                                <div class="post-text">
                                    <h6 class="post-title">13 things i’d Tell Any New Travler </h6>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">Adam Smith</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">10, November</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">50 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <img class="sidebar-img" src="{{asset('img/homePage/blog/blog2.png')}}" alt="">
                                </div>
                                <div class="post-text">
                                    <h6 class="post-title">13 things i’d Tell Any New Travler </h6>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">Adam Smith</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">10, November</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">50 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <img class="sidebar-img" src="{{asset('img/homePage/blog/blog3.png')}}" alt="">
                                </div>
                                <div class="post-text">
                                    <h6 class="post-title">13 things i’d Tell Any New Travler </h6>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">Adam Smith</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">10, November</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">50 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <img class="sidebar-img" src="{{asset('img/homePage/blog/blog4.png')}}" alt="">
                                </div>
                                <div class="post-text">
                                    <h6 class="post-title">13 things i’d Tell Any New Travler </h6>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">Adam Smith</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">10, November</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">50 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <img class="sidebar-img" src="{{asset('img/homePage/blog/blog5.png')}}" alt="">
                                </div>
                                <div class="post-text">
                                    <h6 class="post-title">13 things i’d Tell Any New Travler </h6>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">Adam Smith</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">10, November</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">50 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    </div>
    <ul class="d-none d-md-flex pagination justify-content-center align-items-center">
        <li class="page-item">
            <a href="" class="page-link">
                <svg class="explores-pagination-prev" xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                          fill="#141414"/>
                </svg>
            </a></li>
        <li class="page-item"><a href="#" class="page-link page-link-current">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
                    <path d="M5.172 7.00001L0.222001 2.05001L1.636 0.636012L8 7.00001L1.636 13.364L0.222 11.95L5.172 7.00001Z"
                          fill="#141414"/>
                </svg></a></li>
    </ul>
    <div class="video-background margin-top-60px">
        <img src="video/home/airpods-preview.jpg" alt="">
    </div>
    <div class="video-file margin-top-60px">
        <video id="video1" controls>
            <source src="video/home/Airpods%20(Not%20For%20Poor%20People).mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
        <div class="video-btn">
            <button class="video-close" type="button"><i class="fas fa-times fa-2x"></i></button>
        </div>
    </div>
    <div class="video margin-top-60px">
        <button id="close-video1" class="close-video-btn"><i class="fas fa-times fa-2x"></i></button>
        <div class="container">
            <div class="video-content">
                <h6 class="video-title">Trips For your first solo traveling</h6>
                <div class="video-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus
                    viverra. Sit justo velit, eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis
                    pellentesque nulla accumsan id urna, ullamcorper gravida varius.
                </div>
                <div class="video-button">
                    <button id="play1" class="video-icon" type="button" >
                        <i class="fas fa-play fa-2x"></i>
                    </button>
                </div>
                <div class="video-subtitle">
                    Watch Video
                </div>
            </div>
        </div>
    </div>

@endsection


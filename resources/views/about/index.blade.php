@extends('layouts.base')

@section('page.title')
About Me
@endsection

@section('content')

    <header class="header">
        <div class="header-sidebar">
            <div class="sidebar-top">
                <div class="header-logo"><img src="http://gallivant/img/header/logo.png" alt=""></div>
                <div class="header-closeSidebar">
                    <span class="close-left"></span>
                    <span class="close-right"></span>
                </div>

            </div>
            <div class="header-sidebarSearch">
                <img class="sidebar-search" src="http://gallivant/img/header/lupa.png" alt="">
                <input class="header-input" type="text" placeholder="Search your option">
            </div>
            <div class="header-menu">
                <ul class="sidebar-references">
                    <li><a href="{{route('home')}}">Home</a></li>
                    @auth()
                        @if(Auth::user()->role->name === "User")
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        @else
                            <li><a href="{{route('private')}}">Adminka</a></li>@endif
                    @else
                        <li><a href="{{route('login')}}">Account</a></li>
                    @endauth
                    <li><a href="{{route('about')}}">About Me</a></li>
                    <li><a href="{{route('category')}}">Categories</a></li>
                    {{--                <li><a href="#">Blog</a></li>--}}
                    <li><a href="{{route('contact')}}">Contact Me</a></li>
                </ul>
            </div>
            <div class="header-sidebarIcons">
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
        <div class="background">
            <img src="img/aboutMePage/header-bg.png" alt="">
        </div>
        <div class="background-gradient"></div>
        <div class="container">
            <div class="row header-row">
                <div class="header-logo"><img src="img/header/logo.png" alt=""></div>
                <div class="header-search">
                    <img class="header-lupa" src="img/header/lupa.png" alt="">
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
                    <li><a href="{{route('home')}}">Home</a></li>
                    @auth()
                        @if(Auth::user()->role->name === "User")
                            <li><a href="{{route('logout')}}">Logout</a></li>
                        @else
                            <li><a href="{{route('private')}}">Adminka</a></li>@endif
                    @else
                        <li><a href="{{route('login')}}">Account</a></li>
                    @endauth
                    <li><a href="{{route('about')}}">About Me</a></li>
                    <li><a href="{{route('category')}}">Categories</a></li>
                    {{--                <li><a href="#">Blog</a></li>--}}
                    <li><a href="{{route('contact')}}">Contact Me</a></li>
                </ul>
            </menu>
            <div class="header-content">
                <div class="header-text">
                    <div class="header-title">
                        <p>About Me</p>
                    </div>
                    <div class="header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit,
                            eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan id
                            urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="about">
        <div class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="about-text">
                            <div class="row about-textTop">
                                <div class="col-md-2 ">
                                    <div class="about-title">A</div>
                                </div>
                                <div class="col-md-10 ">
                                    <div class="about-subtitle">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra.
                                        Sit justo velit, eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis
                                        pellentesque nulla accumsan id urna, ullamcorper gravida varius.
                                    </div>
                                </div>
                            </div>
                            <div class="about-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu pulvinar diam adipiscing ut placerat
                                nulla. Netus tortor ante vestibulum egestas facilisi scelerisque est rhoncus tristique. Viverra
                                malesuada massa libero, adipiscing elit phasellus elementum. Faucibus penatibus cursus
                                pellentesque tellus. Pellentesque dignissim. Netus pharetra in pellentesque vitae ante neque
                                duis nec. Eu eget tellus tempor aliquam commodo et ut vestibulum. Vulputate tellus sed semper
                                malesuada interdum lectus a sapien. Praesent lectus eu mauris libero rhoncus. Ac sapien rhoncus
                                diam cursus pellentesque aliquet.
                            </div>
                        </div>
                        <div class="about-cards">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="cards-top">
                                        <div class="cards-card">
                                            <img src="img/aboutMePage/cards/card1.png" alt="">
                                        </div>
                                        <div class="cards-bottom">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="cards-card">
                                                        <img src="img/aboutMePage/cards/card2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="cards-card">
                                                        <img src="img/aboutMePage/cards/card3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-none d-lg-block col-lg-5">
                                    <div class="cards-right">
                                        <div class="cards-cardRight">
                                            <img src="img/aboutMePage/cards/card4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="about-sidebar">
                            <div class="blog-sidebar sidebar-profile">
                                <div class="sidebar-profileInfo">
                                    <div class="sidebar-photo">
                                        <img src="img/aboutMePage/profile-photo/photo1.png" alt="">
                                    </div>
                                    <div class="sidebar-name">
                                        Adam Smith
                                    </div>
                                    <div class="sidebar-bio">
                                        Lorem ipsum dolor sit am consectetur adipisc ing elit. In sed et donec purus viverra.
                                        Sit justo
                                    </div>
                                    <div class="sidebar-hr-aboutPage"></div>
                                    <div class="blog-icons sidebar-social">
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
                            <div class="blog-sidebar sidebar-contacts">
                                <h6 class="sidebar-message">Contact ME</h6>
                                <p class="sidebar-address">
                                    <i class="fas fa-map-marker-alt icon-location"></i>Brahmanbaria, Chattagram, Bangladesh</p>
                                <p class="sidebar-email">
                                    <i class="fas fa-envelope icon-mail"></i>Designhunterrbd@gmail.com
                                </p>
                                <p class="sidebar-phone">
                                    <i class="fas fa-mobile icon-mobile"></i>+880 012 345 6789
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="video-background">
        <img src="video/home/airpods-preview.jpg" alt="">
    </div>
    <div class="video-file">
        <video id="video1" controls>
            <source src="video/home/Airpods%20(Not%20For%20Poor%20People).mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
        <div class="video-btn">
            <button class="video-close" type="button"><i class="fas fa-times fa-2x"></i></button>
        </div>
    </div>
    <div class="video">
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

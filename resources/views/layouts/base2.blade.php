<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/4d1ce4c9a9.js" crossorigin="anonymous"></script>
</head>
<body>
@error('role')
<div class="alert alert-danger mb-0 text-center">
    {{$message}}
</div>
@enderror
<div class="header-absoluteSearch">
    <button class="absolute-search" type="submit"><i class="fa fa-search"></i></button>
    <input class="absolute-input" type="text" placeholder="Search your option">
    <button class="absolute-searchClose" type="submit"><i class="fa fa-times"></i></button>
</div>
<header class="header-template2">
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
                <li><a href="{{route('categories')}}">Categories</a></li>
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
    <div class="container">
        <div class="row header-row">
            <div class="header-logo"><img src="img/errorPage/logo.png" alt=""></div>
            <div class="header-search">
                <img class="header-lupa" src="img/header/lupa.png" alt="">
                <input class="header-input" type="text" placeholder="Search your option">
            </div>
            <div class="header-burger">
                <div class="burger-top errorPage-burger"></div>
                <div class="burger-center errorPage-burger"></div>
                <div class="burger-bottom errorPage-burger"></div>
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
        <menu class="header-menu error-page">
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
                <li><a href="{{route('categories')}}">Categories</a></li>
                {{--                <li><a href="#">Blog</a></li>--}}
                <li><a href="{{route('contact')}}">Contact Me</a></li>
            </ul>
        </menu>
    </div>
</header>




@yield('content')


<div class="instagram-posts">
    <h6 class="instagram-title">Follow Me Instagram</h6>
    <div class="instagram-reference">
        <a class="instagram-ref" href="#">@designhunterrbd</a>
    </div>
    <div class="swiper instagramSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
        <div class="swiper-wrapper" id="swiper-wrapper-f4becf5079408bb2" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-2664px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="4 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="3">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post3.png" alt="">
                        </div>
                    </div>
                </a>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="5 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="4">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post5.png" alt="">
                        </div>
                    </div>
                </a>
            </div><div class="swiper-slide swiper-slide-invisible-blank swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 423px; margin-right: 21px;"></div>
            <div class="swiper-slide" role="group" aria-label="1 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="0">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post4.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide" role="group" aria-label="2 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="1">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post1.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="2">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post2.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="4 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="3">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post3.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="4">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post5.png" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide swiper-slide-invisible-blank" data-swiper-slide-index="5" style="width: 423px; margin-right: 21px;"></div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="1 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="0">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post4.png" alt="">
                        </div>
                    </div>
                </a>
            </div><div class="swiper-slide swiper-slide-duplicate" role="group" aria-label="2 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="1">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post1.png" alt="">
                        </div>
                    </div>
                </a>
            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="3 / 6" style="width: 423px; margin-right: 21px;" data-swiper-slide-index="2">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="http://gallivant/img/homePage/instagram-posts/post2.png" alt="">
                        </div>
                    </div>
                </a>
            </div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>
<footer class="footer-errorPage">
    <div class="footer-items">
        <div class="footer-copyright">
            <i class="far fa-copyright"></i>
            2020 ojjomedia All Right Reserved
        </div>
        <div class="footer-menu">
            <ul class="footer-references">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="footer-icons">
            <a href="#">
                <div class="footer-icon">
                    <i class="fab fa-facebook-f icon"></i>
                </div>
            </a>
            <a href="#">
                <div class="footer-icon">
                    <i class="fab fa-twitter icon"></i>
                </div>
            </a>
            <a href="#">
                <div class="footer-icon">
                    <i class="fab fa-instagram icon"></i>
                </div>
            </a>
            <a href="#">
                <div class="footer-icon">
                    <i class="fab fa-youtube icon"></i>
                </div>
            </a>
        </div>
    </div>
</footer>
<script src="{{asset('js/main.js')}}"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script src="{{asset('js/swiper.js')}}"></script>

</body>
</html>

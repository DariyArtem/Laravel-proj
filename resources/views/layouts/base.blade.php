<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/4d1ce4c9a9.js" crossorigin="anonymous"></script>

</head>
<body>
@yield('content')


<div class="instagram-posts">
    <h6 class="instagram-title">Follow Me Instagram</h6>
    <div class="instagram-reference">
        <a class="instagram-ref" href="#">@designhunterrbd</a>
    </div>
    <div class="swiper instagramSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="{{asset('img/homePage/instagram-posts/post4.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="{{asset('img/homePage/instagram-posts/post1.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="{{asset('img/homePage/instagram-posts/post2.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="{{asset('img/homePage/instagram-posts/post3.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <div class="slider-card">
                        <div class="slider-img slider-photo">
                            <img src="{{asset('img/homePage/instagram-posts/post5.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<footer class="footer-homePage">
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
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script src="{{asset('js/swiper.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>

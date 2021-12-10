<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <script src="https://kit.fontawesome.com/4d1ce4c9a9.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>

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




@yield('content')


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
</body>
</html>

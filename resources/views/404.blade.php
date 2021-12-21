@extends('layouts.base3')

@section('content')
    <div class="container">
        <div class="row header-row">
            <div class="header-logo"><img src="{{asset('img/errorPage/logo.png')}}" alt=""></div>
            <div class="header-search">
                <img class="header-lupa" src="{{asset('img/header/lupa.png')}}" alt="">
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
                <li><a href="{{route('about')}}">About Me</a></li>
                <li><a href="{{route('category')}}">Categories</a></li>
                {{--                <li><a href="#">Blog</a></li>--}}
                <li><a href="{{route('contact')}}">Contact Me</a></li>
            </ul>
        </menu>
    </div>
    <div class="error">
        <div class="container">
            <div class="error-img">
                <img src="img/errorPage/Oops.png" alt="">
            </div>
            <div class="error-text">
                <div class="error-title">Oops!</div>
                <div class="error-description">The page you’re looking for doesn’t exits.</div>
                <div class="error-subtitle">Don’t panic just click the big button to retun home</div>
            </div>
            <div class="error-btn">
                <div class="error-btnSubstance">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    <button type="button">Go Back Home</button>
                </div>
            </div>
        </div>
    </div>
@endsection

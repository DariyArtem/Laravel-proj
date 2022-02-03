@extends('layouts.base')

@section('page.title')
About Me
@endsection

@section('backgroundImage')
    <img src="img/aboutMePage/header-bg.png" alt="">
@endsection

@section('content')

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
                                       {{("Here you can see and read common information about person who created this blog.
The Author hopes you will enjoy his work that was done by this moment. And of course the work on this project is not finished it is still in process!")}}
                                    </div>
                                </div>
                            </div>
                            <div class="about-description">{{$author->about}}</div>
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
                                        <img src="{{asset("storage/".$author->picture)}}" alt="">
                                    </div>
                                    <div class="sidebar-name">{{$author->name." ".$author->surname}}</div>
                                    <div class="sidebar-bio">{{$author->about}}</div>
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
                                    <i class="fas fa-map-marker-alt icon-location"></i>{{$author->city.", ".$author->region.", ".$author->country}}</p>
                                <p class="sidebar-email">
                                    <i class="fas fa-envelope icon-mail"></i>{{$author->email}}
                                </p>
                                <p class="sidebar-phone">
                                    <i class="fas fa-mobile icon-mobile"></i>+{{$author->phone}}
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

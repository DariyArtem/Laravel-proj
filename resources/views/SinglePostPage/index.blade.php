@extends('layouts.base2')

@section('page.title')
    Post
@endsection

@section('content')

    <header class="header-singlePost">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </menu>
        </div>
    </header>
    <div class="container">
        <div class="single-top">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-img">
                        <img src="img/singlePage/post-img1.png" alt="">
                    </div>
                    <h6 class="single-title">14 Things to See and Do in Portland, Oregon</h6>
                    <div class="single-info">
                        <div class="single-data">
                            <a class="single-reference" href="#"><div class="single-time">
                                    <i class="far fa-clock icon-clock" aria-hidden="true"></i>30 minute ago
                                </div></a>
                            <a class="single-reference" href="#"><div class="single-category">
                                    <i class="far fa-folder icon-folder" aria-hidden="true"></i>Solo Travel
                                </div></a>
                            <a class="single-reference" href="#"><div class="single-by">
                                    <i class="far fa-user icon-user" aria-hidden="true"></i>Adam Smith
                                </div></a>
                            <a class="single-reference" href="#"><div class="single-quantity">
                                    <i class="far fa-comment icon-comment" aria-hidden="true"></i>502
                                </div></a>
                        </div>
                        <div class="single-social">
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
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar">
                        <h6 class="sidebar-title">
                            Popular Post
                        </h6>
                        <div class="sidebar-post">
                            <div class="sidebar-card">
                                <img class="sidebar-img" src="img/homePage/blog/blog1.png" alt="">
                            </div>
                            <div class="post-text">
                                <div class="post-title">13 things i’d Tell Any New Travler </div>
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
                                <img class="sidebar-img" src="img/homePage/blog/blog2.png" alt="">
                            </div>
                            <div class="post-text">
                                <div class="post-title">13 things i’d Tell Any New Travler </div>
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
                                <img class="sidebar-img" src="img/homePage/blog/blog3.png" alt="">
                            </div>
                            <div class="post-text">
                                <div class="post-title">13 things i’d Tell Any New Travler </div>
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
                                <img class="sidebar-img" src="img/homePage/blog/blog4.png" alt="">
                            </div>
                            <div class="post-text">
                                <div class="post-title">13 things i’d Tell Any New Travler </div>
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
                                <img class="sidebar-img" src="img/homePage/blog/blog5.png" alt="">
                            </div>
                            <div class="post-text">
                                <div class="post-title">13 things i’d Tell Any New Travler </div>
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
        <div class="col-md-8">
            <div class="single-content">
                <div class="single-shortDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac elementum
                    amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa mi
                    dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                    egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                    pharetra. Et purus donec nibh lectus penatibus enim. Mi ut a non pharetra, egestas diam,
                    pellentesque feugiat. Lectus turpis blandit sollicitudin mi netus. Morbi sagittis sit sem
                    facilisis diam purus sed. Quam cursus et a posuere a. Ornare at purus faucibus enim dolor
                    varius mauris. Arcu turpis ac facilisis ultricies eu vivamus. Lacinia feugiat dui enim massa
                </div>
                <div class="single-notification">
                    <span class="notification-span"></span>
                    <div class="notification-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac
                        elementum amet, et. Non nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a
                        massa mi dignissim vivamus lobortis et. Ante id di
                    </div>
                </div>
                <div class="row single-padding">
                    <div class="col-sm-6">
                        <div class="single-card">
                            <img src="img/singlePage/card1.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac vulputate magna ultrices
                            est. Sed adipiscing blandit pellentesque aenean at pulvinar cursus. Vitae egestas
                            pellentesque dolor ut nibh blandit eget. Vitae ut turpis imperdiet aenean massa.
                            Suspendisse pulvinar semper pharetra elit morbi facilisis habitant. Eleifend ut
                            vulputate lobortis sapien curabitur.
                        </div>
                    </div>
                </div>
                <div class="row single-padding">
                    <div class="col-sm-6">
                        <div class="single-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac vulputate magna ultrices
                            est. Sed adipiscing blandit pellentesque aenean at pulvinar cursus. Vitae egestas
                            pellentesque dolor ut nibh blandit eget. Vitae ut turpis imperdiet aenean massa.
                            Suspendisse pulvinar semper pharetra elit morbi facilisis habitant. Eleifend ut
                            vulputate lobortis sapien curabitur.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-card">
                            <img src="img/singlePage/card2.png" alt="">
                        </div>
                    </div>
                </div>
                <h6 class="single-title-fromContent">How was the jungal solo travel ?</h6>
                <div class="single-text single-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac elementum
                    amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa mi
                    dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                    egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                    pharetra. Et purus donec nibh lectus penatibus enim.
                </div>
                <div class="single-button">
                    <div>
                        <button id="singlePost-play1" class="video-icon" type="button" >
                            <i class="fas fa-play fa-2x"></i>
                        </button>
                    </div>
                </div>
                <div class="single-padding">
                    <div class="single-videofile">
                        <button id="singlePost-close" class="video-close single-close " type="button">
                            <i class="fas fa-times fa-2x" aria-hidden="true"></i>
                        </button>
                        <video id="singlePost-video1" src="video/home/Airpods%20(Not%20For%20Poor%20People).mp4"></video>
                    </div>
                </div>
                <div class="single-text single-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac elementum
                    amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa mi
                    dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                    egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                    pharetra. Et purus donec nibh lectus penatibus enim.
                </div>
                <div class="single-text single-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac elementum
                    amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa mi
                    dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                    egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                    pharetra. Et purus donec nibh lectus penatibus enim.
                </div>
                <div class="single-text single-padding">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac elementum
                    amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa mi
                    dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                    egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                    pharetra. Et purus donec nibh lectus penatibus enim.
                </div>
            </div>
            <div class="single-author">
                <div class="row">
                    <div class="col-xl-4 ">
                        <div class="single-photo">
                            <img src="img/AuthorPage/profile-photo/photo1.png" alt="">
                        </div>
                        <div class="single-icons">
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
                    <div class="col-xl-8">
                        <div class="single-name">Adam Smith</div>
                        <div class="single-function">Author</div>
                        <div class="single-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum
                            vitae ac elementum amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit.
                            Lectus a massa mi
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-faetured">
                <h6 class="featured-title text-center">You Might Also Like</h6>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New Travler </div>
                                <div class="recent-author">
                                    <div class="post-post recent-wordPost">Post</div>
                                    <div class="post-by recent-by">By</div>
                                    <div class="post-sign recent-sign">Adam Smith</div>
                                </div>
                                <div class="post-data recent-data">
                                    <div class="post-date recent-date">10, November</div>
                                    <div class="post-hr recent-hr"></div>
                                    <div class="post-comments recent-comments">
                                        <a class="post-comment recent-comment" href="#">50 comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New Travler </div>
                                <div class="recent-author">
                                    <div class="post-post recent-wordPost">Post</div>
                                    <div class="post-by recent-by">By</div>
                                    <div class="post-sign recent-sign">Adam Smith</div>
                                </div>
                                <div class="post-data recent-data">
                                    <div class="post-date recent-date">10, November</div>
                                    <div class="post-hr recent-hr"></div>
                                    <div class="post-comments recent-comments">
                                        <a class="post-comment recent-comment" href="#">50 comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 ">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New Travler </div>
                                <div class="recent-author">
                                    <div class="post-post recent-wordPost">Post</div>
                                    <div class="post-by recent-by">By</div>
                                    <div class="post-sign recent-sign">Adam Smith</div>
                                </div>
                                <div class="post-data recent-data">
                                    <div class="post-date recent-date">10, November</div>
                                    <div class="post-hr recent-hr"></div>
                                    <div class="post-comments recent-comments">
                                        <a class="post-comment recent-comment" href="#">50 comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-comments">
                <h6 class="comments-title">Comments (5)</h6>
                <div class="comments-comment">
                    <div class="comment-photo">
                        <img src="img/singlePage/comment%60s%20authors/1.png" alt="">
                    </div>
                    <div class="comment-text">
                        <div class="comment-name">Zaire Schleifer</div>
                        <div class="comment-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sem nisl rutrum vitae ac elementum amet, et. Non et nulla nisl, libero ac. Proin
                            vitae quis maecenas elit. Lectus a massa mi
                        </div>
                        <div class="single-time">
                            <i class="far fa-clock icon-clock" aria-hidden="true"></i>30 minute ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="col-xl-8 col-lg-10 ">
                        <h6 class="form-title">Leave a Comment</h6>
                    </div>
                    <form method="post">
                        <div class="form-input"><input class="form-name" type="text" placeholder="Full Name"></div>
                        <div class="form-input"><input class="form-email" type="text" placeholder="E-mail"></div>
                        <div class="form-input"><input class="form-number" type="text" placeholder="Number"></div>
                        <div class="form-input"><textarea class="form-message" type="text" placeholder="Your message here"></textarea></div>
                    </form>
                    <button type="submit" class="form-submitButton single-submit">POST COMMENT</button>
                </div>
            </div>
        </div>
    </div>

@endsection

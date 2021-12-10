@extends('layouts.base2')

@section('page.title')
   Author
@endsection

@section('content')

    <header class="header-authorPage">
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
    <div class="category-content">
        <div class="container">
            <div class="search">
                <div class="search-search">Author:</div>
                <div class="search-result">Adam Smith</div>
            </div>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                                <div class="category-cardInfo">
                                    <div class="category-cardTitle">14 Things to See and Do in Portland, Oregon</div>
                                    <div class="category-cardData">
                                        <i class="far fa-clock icon-clock"></i>30 minute ago
                                        <i class="far fa-folder icon-folder"></i>Solo Travel
                                        <i class="far fa-user icon-user"></i>Adam Smith
                                        <i class="far fa-comment icon-comment"></i>502
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post2.png" alt="">
                                <div class="category-cardInfo">
                                    <div class="category-cardTitle">14 Things to See and Do in Portland, Oregon</div>
                                    <div class="category-cardData">
                                        <i class="far fa-clock icon-clock"></i>30 minute ago
                                        <i class="far fa-folder icon-folder"></i>Solo Travel
                                        <i class="far fa-user icon-user"></i>Adam Smith
                                        <i class="far fa-comment icon-comment"></i>502
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post3.png" alt="">
                                <div class="category-cardInfo">
                                    <div class="category-cardTitle">14 Things to See and Do in Portland, Oregon</div>
                                    <div class="category-cardData">
                                        <i class="far fa-clock icon-clock"></i>30 minute ago
                                        <i class="far fa-folder icon-folder"></i>Solo Travel
                                        <i class="far fa-user icon-user"></i>Adam Smith
                                        <i class="far fa-comment icon-comment"></i>502
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post4.png" alt="">
                                <div class="category-cardInfo">
                                    <div class="category-cardTitle">14 Things to See and Do in Portland, Oregon</div>
                                    <div class="category-cardData">
                                        <i class="far fa-clock icon-clock"></i>30 minute ago
                                        <i class="far fa-folder icon-folder"></i>Solo Travel
                                        <i class="far fa-user icon-user"></i>Adam Smith
                                        <i class="far fa-comment icon-comment"></i>502
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
                                    <img src="img/AuthorPage/profile-photo/photo1.png" alt="">
                                </div>
                                <div class="sidebar-name">
                                    Adam Smith
                                </div>
                                <div class="sidebar-bio">
                                    Lorem ipsum dolor sit am consectetur adipisc ing elit. In sed et donec purus viverra.
                                    Sit justo
                                </div>
                                <div class="sidebar-hr"></div>
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
                                <i class="fas fa-map-marker-alt icon-location"></i>Brahmanbaria, Chattagram, Bangladesh
                            </p>
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
            <div class="col-md-8 ">
                <h6 class="recent-title margin-bottom-25px">
                    Recent Posts
                </h6>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <h6 class="post-title recent-post">13 things i’d Tell Any New Travler </h6>
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
                    <div class="col-lg-6">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <h6 class="post-title recent-post">13 things i’d Tell Any New Travler </h6>
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <h6 class="post-title recent-post">13 things i’d Tell Any New Travler </h6>
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
                    <div class="col-lg-6">
                        <div class="recent-post">
                            <div class="recent-img">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                            </div>
                            <div class="post-text recent-text">
                                <h6 class="post-title recent-post">13 things i’d Tell Any New Travler </h6>
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
        </div>
    </div>

@endsection

@extends('layouts.base')

@section('page.title')
    Categories
@endsection

@section('content')

    <header class="header">
        <div class="background">
            <img src="img/categoryPage/header-bg.png" alt="">
        </div>
        <div class="background-gradient"></div>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </menu>
            <div class="header-content">
                <div class="header-text">
                    <div class="header-title">
                        <p>4 Solo Travel Post</p>
                    </div>
                    <div class="header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit,
                            eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan id
                            urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed. </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="category-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 ">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post1.png" alt="">
                                <div class="category-cardInfo">
                                    <h6 class="category-cardTitle">14 Things to See and Do in Portland, Oregon</h6>
                                    <div class="category-cardData">
                                        <i class="far fa-clock"></i>&nbsp30 minute ago
                                        <i class="far fa-folder"></i>&nbspSolo Travel
                                        <i class="far fa-user"></i>&nbspAdam Smith
                                        <i class="far fa-comment"></i>&nbsp502</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10 ">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post2.png" alt="">
                                <div class="category-cardInfo">
                                    <h6 class="category-cardTitle">14 Things to See and Do in Portland, Oregon</h6>
                                    <div class="category-cardData">
                                        <i class="far fa-clock"></i>&nbsp30 minute ago
                                        <i class="far fa-folder"></i>&nbspSolo Travel
                                        <i class="far fa-user"></i>&nbspAdam Smith
                                        <i class="far fa-comment"></i>&nbsp502</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10 ">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post3.png" alt="">
                                <div class="category-cardInfo">
                                    <h6 class="category-cardTitle">14 Things to See and Do in Portland, Oregon</h6>
                                    <div class="category-cardData">
                                        <i class="far fa-clock"></i>&nbsp30 minute ago
                                        <i class="far fa-folder"></i>&nbspSolo Travel
                                        <i class="far fa-user"></i>&nbspAdam Smith
                                        <i class="far fa-comment"></i>&nbsp502</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10 ">
                            <div class="category-card">
                                <img src="img/categoryPage/posts/post4.png" alt="">
                                <div class="category-cardInfo">
                                    <h6 class="category-cardTitle">14 Things to See and Do in Portland, Oregon</h6>
                                    <div class="category-cardData">
                                        <i class="far fa-clock"></i>&nbsp30 minute ago
                                        <i class="far fa-folder"></i>&nbspSolo Travel
                                        <i class="far fa-user"></i>&nbspAdam Smith
                                        <i class="far fa-comment"></i>&nbsp502</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="recent-title">
                        Recent Posts
                    </h6>
                </div>
                <div class="col-md-4 ">
                    <div class="blog-sidebar">
                        <h6 class="sidebar-title">
                            Categories
                        </h6>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">Solo Travel</a></div>
                                <div class="category-posts">(50)</div>
                            </div>
                        </div>
                        <div class="sidebar-hr"></div>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">Jungal Travel</a></div>
                                <div class="category-posts">(10)</div>
                            </div>
                        </div>
                        <div class="sidebar-hr"></div>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">Mount Travel</a></div>
                                <div class="category-posts">(2)</div>
                            </div>
                        </div>
                        <div class="sidebar-hr"></div>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">Old City Travel</a></div>
                                <div class="category-posts">(5)</div>
                            </div>
                        </div>
                        <div class="sidebar-hr"></div>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">River Travel</a></div>
                                <div class="category-posts">(50)</div>
                            </div>
                        </div>
                        <div class="sidebar-hr"></div>
                        <div class="sidebar-post">
                            <div class="sidebar-category">
                                <div class="category-name"><a href="#">Ocean Travel</a></div>
                                <div class="category-posts">(51)</div>
                            </div>
                        </div>
                    </div>
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
            <div class="col-md-8 ">
                <div class="recent-posts">
                    <div class="row">
                        <div class="col-lg-6 col-md-10 ">
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
                        <div class="col-lg-6 col-md-10 ">
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
                        <div class="col-lg-6 col-md-10 ">
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
                        <div class="col-lg-6 col-md-10 ">
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
        </div>
    </div>

@endsection

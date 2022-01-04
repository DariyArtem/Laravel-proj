@extends('layouts.base')

@section('page.title')
    Categories
@endsection

@section('content')

    <header class="header">
        <div class="background">
            <img src="{{asset('storage/'.$currentCategory->img_path)}}" alt="">
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
                    <li><a href="{{route('categories')}}">Categories</a></li>
                    {{--                <li><a href="#">Blog</a></li>--}}
                    <li><a href="{{route('contact')}}">Contact Me</a></li>
                </ul>
            </menu>
            <div class="header-content">
                <div class="header-text">
                    <div class="header-title">
                        <p>{{$currentCategory->name}}</p>
                    </div>
                    <div class="header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit
                            justo velit,
                            eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque
                            nulla accumsan id
                            urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et
                            sed. </p>
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
                        @foreach($posts_category as $post_category)

                                @foreach(\App\Models\Post::where('id', $post_category->post_id)->get() as $post)
                                    <div class="col-lg-6 col-md-10 ">
                                        <a href="{{route('single', ['id' => $post->id])}}">
                                            <div class="category-card">
                                                <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                                <div class="category-cardInfo">
                                                    <h6 class="category-cardTitle">{{$post->title}}</h6>
                                                    <div class="category-cardData">
                                                        <i class="far fa-clock"></i>&nbsp;{{explode(" ", $post->created_at)[0]}}
                                                        <i class="far fa-folder"></i>&nbsp;{{$category_name}}
                                                        <i class="far fa-user"></i>&nbsp;{{
    \App\Models\User::where('id', $post->author_id)->first()->name.''.\App\Models\User::where('id', $post->author_id)->first()->surname
}}
                                                        <i class="far fa-comment"></i>&nbsp;{{\App\Models\Comment::where(
    'post_id', $post->id)->count()}}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                @endforeach

                        @endforeach
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
                        @foreach($categories as $category)
                            <div class="sidebar-post">
                                <div class="sidebar-category">
                                    <div class="category-name">
                                        <a href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a>
                                    </div>
                                    <div class="category-posts">
                                        ({{\App\Models\Post_Category::where('category_id', $category->id)->count()}})
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-hr"></div>
                        @endforeach

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
                                <div class="post-title">13 things i’d Tell Any New Travler</div>
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
                                <div class="post-title">13 things i’d Tell Any New Travler</div>
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
                                <div class="post-title">13 things i’d Tell Any New Travler</div>
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
                                <div class="post-title">13 things i’d Tell Any New Travler</div>
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
                                <div class="post-title">13 things i’d Tell Any New Travler</div>
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
                        @foreach($latest as $post_category)

                            @foreach(\App\Models\Post::where('id', $post_category->post_id)->get() as $post)
                                <div class="col-lg-6 col-md-10 ">
                                    <a href="{{route('single', ['id' => $post->id])}}">
                                        <div class="category-card">
                                            <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                            <div class="category-cardInfo">
                                                <h6 class="category-cardTitle">{{$post->title}}</h6>
                                                <div class="category-cardData">
                                                    <i class="far fa-clock"></i>&nbsp;{{explode(" ", $post->created_at)[0]}}
                                                    <i class="far fa-folder"></i>&nbsp;{{$category_name}}
                                                    <i class="far fa-user"></i>&nbsp;{{
    \App\Models\User::where('id', $post->author_id)->first()->name.''.\App\Models\User::where('id', $post->author_id)->first()->surname
}}
                                                    <i class="far fa-comment"></i>&nbsp;{{\App\Models\Comment::where(
    'post_id', $post->id)->count()}}</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @endforeach

                        @endforeach
{{--                        <div class="col-lg-6 col-md-10 ">--}}
{{--                            <div class="recent-post">--}}
{{--                                <div class="recent-img">--}}
{{--                                    <img src="img/categoryPage/posts/post1.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="post-text recent-text">--}}
{{--                                    <h6 class="post-title recent-post">13 things i’d Tell Any New Travler </h6>--}}
{{--                                    <div class="recent-author">--}}
{{--                                        <div class="post-post recent-wordPost">Post</div>--}}
{{--                                        <div class="post-by recent-by">By</div>--}}
{{--                                        <div class="post-sign recent-sign">Adam Smith</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="post-data recent-data">--}}
{{--                                        <div class="post-date recent-date">10, November</div>--}}
{{--                                        <div class="post-hr recent-hr"></div>--}}
{{--                                        <div class="post-comments recent-comments">--}}
{{--                                            <a class="post-comment recent-comment" href="#">50 comments</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            {{$latest->links()}}        </div>
    </div>
    </div>
    </div>

@endsection

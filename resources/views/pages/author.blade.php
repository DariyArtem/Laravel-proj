@extends('layouts.base2')

@section('page.title')
    Author
@endsection

@section('content')

    <div class="category-content">
        <div class="container">
            <div class="search">
                <div class="search-search">Author:</div>
                <div class="search-result">{{$info->name." ".$info->surname}}</div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="col-12">
                        <div class="row">
                            @foreach($popular as $key => $post)
                                <div class="col-lg-6">
                                    <div class="category-card">
                                        <a href="{{route('single', [$post->id])}}">
                                            <img src="{{asset("storage/".$post->img_path)}}" alt="">
                                        </a>
                                        <div class="category-cardInfo">
                                            <div class="category-cardTitle">{{$post->title}}</div>
                                            <div class="category-cardData">
                                                <div class="search-date">
                                                    <i class="far fa-clock icon-clock-search"></i>
                                                    {{$datesOfPopularPosts[$key]}}
                                                </div>
                                                <div class="search-category">
                                                    <i class="far fa-folder icon-folder-search"></i>
                                                    <a class="category-reference-search"
                                                       href="{{route('category', ['id' => $post->categories[0]->id])}}">
                                                        {{$post->categories[0]->name}}
                                                    </a>
                                                </div>
                                                <div class="search-user">
                                                    <i class="far fa-user icon-user-search"></i>
                                                    {{$post->user->name." ".$post->user->surname}}
                                                </div>
                                                <div class="search-comments">
                                                    <i class="far fa-comment icon-comment-search"></i>
                                                    {{$post->comments->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="recent-title margin-bottom-25px">
                            Recent Posts
                        </h6>
                        <div class="row">
                            @foreach($recent as $key => $post)
                                <div class="col-lg-6">
                                    <div class="category-card">
                                        <a href="{{route('single', [$post->id])}}">
                                            <img src="{{asset("storage/".$post->img_path)}}" alt="">
                                        </a>
                                        <div class="category-cardInfo">
                                            <div class="category-cardTitle">{{$post->title}}</div>
                                            <div class="category-cardData">
                                                <div class="search-date">
                                                    <i class="far fa-clock icon-clock-search"></i>
                                                    {{$datesOfRecentPosts[$key]}}
                                                </div>
                                                <div class="search-category">
                                                    <i class="far fa-folder icon-folder-search"></i>
                                                    <a class="category-reference-search"
                                                       href="{{route('category', ['id' => $post->categories[0]->id])}}">
                                                        {{$post->categories[0]->name}}
                                                    </a>
                                                </div>
                                                <div class="search-user">
                                                    <i class="far fa-user icon-user-search"></i>
                                                    {{$post->user->name." ".$post->user->surname}}
                                                </div>
                                                <div class="search-comments">
                                                    <i class="far fa-comment icon-comment-search"></i>
                                                    {{$post->comments->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{$recent->links()}}
                </div>
                <div class="col-lg-4 ">
                    <div class="about-sidebar">
                        <div class="blog-sidebar sidebar-profile">
                            <div class="sidebar-profileInfo">
                                <div class="sidebar-photo">
                                    <img src="{{asset('storage/'.$info->picture)}}" alt="">
                                </div>
                                <div class="sidebar-name">{{$info->name." ".$info->surname}}</div>
                                <div class="sidebar-bio">{{$info->about}}</div>
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
                                <i class="fas fa-map-marker-alt icon-location"></i>{{$info->city.", ".$info->region.", ".$info->country}}
                            </p>
                            <p class="sidebar-email">
                                <i class="fas fa-envelope icon-mail"></i>{{$info->email}}
                            </p>
                            <p class="sidebar-phone">
                                <i class="fas fa-mobile icon-mobile"></i>+{{$info->phone}}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

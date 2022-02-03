@extends('layouts.base2')

@section('page.title')
    Author
@endsection

@section('content')

    <div class="category-content">
        <div class="container">
            <div class="search">
                <div class="search-search">Author:</div>
                @foreach($info as $element)
                    <div class="search-result">{{$element->name." ".$element->surname}}</div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        @foreach($popular as $key => $post)
                            <div class="col-lg-6 col-md-10 ">
                                <div class="random">
                                    <div class="random__post">
                                        <div class="random__card">
                                            <a href="{{route('single', ["id" => $post->id])}}">
                                                <img src="{{asset("storage/".$post->img_path)}}" alt="">
                                            </a>
                                        </div>
                                        <div class="random__text">
                                            <div class="random__title">{{$post->title}}</div>
                                            <div class="random__data">
                                                <div class="random__date">
                                                    <i class="far fa-clock icon-clock-search"></i>
                                                    {{$datesOfPopularPosts[$key]}}
                                                </div>
                                                <div class="random__category-name">
                                                    <a href="{{route('category', ['id' => $post->categories[0]->id])}}">
                                                        <i class="far fa-folder icon-folder-search"></i>
                                                        {{$post->categories[0]->name}}
                                                    </a>
                                                </div>
                                                <div class="random__author">
                                                    <a href="{{route('author', ['id' => $post->user->id])}}">
                                                        <i class="far fa-user icon-user-search"></i>
                                                        {{$post->user->name." ".$post->user->surname}}
                                                    </a>
                                                </div>
                                                <div class="random__comments-amount">
                                                    <i class="far fa-comment icon-comment-search"></i>
                                                    {{$post->comments->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="about-sidebar">
                        @foreach($info as $element)
                            <div class="blog-sidebar sidebar-profile">
                                <div class="sidebar-profileInfo">
                                    <div class="sidebar-photo">
                                        <img src="{{asset('storage/'.$element->picture)}}" alt="">
                                    </div>
                                    <div class="sidebar-name">{{$element->name." ".$element->surname}}</div>
                                    <div class="sidebar-bio">{{$element->about}}</div>
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
                                    <i class="fas fa-map-marker-alt icon-location"></i>{{$element->city.", ".$element->region.", ".$element->country}}
                                </p>
                                <p class="sidebar-email">
                                    <i class="fas fa-envelope icon-mail"></i>{{$element->email}}
                                </p>
                                <p class="sidebar-phone">
                                    <i class="fas fa-mobile icon-mobile"></i>+{{$element->phone}}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="recent recent__author-page">
                    <h6 class="recent__title">Recent Posts</h6>
                    <div class="row">
                        @foreach($recent as $key => $post)
                            <div class="col-lg-6 col-md-10">
                                <div class="post">
                                    <div class="post__image">
                                        <a href="{{route('single', ["id" => $post->id])}}">
                                            <div class="post__img">
                                                <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post__text-block">
                                        <h4 class="text-block__title">{{$post->title}}</h4>
                                        <div class="text-block__author">
                                            <div class="text-block__post-word">Post</div>
                                            <div class="text-block__by-word">By</div>
                                            <a href="{{route('author', ['id' => $post->user->id])}}">
                                                <div class="text-block__name">
                                                    {{$post->user->name." ".$post->user->surname}}
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-block__info">
                                            <div class="text-block__date">{{$datesOfRecentPosts[$key]}}</div>
                                            <span class="text-block__hr"></span>
                                            <div class="text-block__comments">{{$post->comments->count()}}
                                                comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{$recent->links()}}
        </div>
    </div>

@endsection

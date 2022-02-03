@extends('layouts.base')

@section('page.title')
    Categories
@endsection

@section('title')
    <div class="header-title">{{$category->name}}</div>
@endsection

@section('backgroundImage')
    <img src="{{asset('storage/'.$category->img_path)}}" alt="">
@endsection

@section('content')
    <div class="category-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        @foreach($posts as $key => $post)
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
                                                    {{$datesOfPosts[$key]}}
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
                <div class="col-md-4">
                    <div class="categories">
                        <h5 class="categories__title">{{__("Categories")}}</h5>
                        <div class="categories__list">
                            @foreach($categories as $category)
                                <div class="category-item">
                                    <div class="category-item__name">
                                        <a href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a>
                                    </div>
                                    <div class="category-item__posts">({{$category->posts->count()}})</div>
                                </div>
                                <div class="category__hr"></div>
                            @endforeach
                        </div>

                    </div>
                    <div class="popular">
                        <div class="popular__title">{{__("Popular Posts")}}</div>
                        @foreach($popular as $key => $post)
                            <div class="popular__post">
                                <div class="post__card">
                                    <a href="{{route('single', ['id' => $post->id])}}">
                                        <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                    </a>
                                </div>
                                <div class="post__text">
                                    <div class="text__title">{{$post->title}}</div>
                                    <div class="text__author">
                                        <div class="text__post-word">Post</div>
                                        <div class="text__by-word">By</div>
                                        <a href="{{route('author', ['id' => $post->user->id])}}">
                                            <div class="text__name">{{$post->user->name." ".$post->user->surname}}</div>
                                        </a>
                                    </div>
                                    <div class="text__info">
                                        <div class="text__date">{{$datesOfPopularPosts[$key]}}</div>
                                        <span class="text__hr"></span>
                                        <div class="text__comments">{{$post->comments->count()}} comments</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="blog-sidebar blog-icons">
                        <h6 class="sidebar-title">Follow Me</h6>
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
            <div class="col-md-8">
                <div class="recent">
                    <h6 class="recent__title">Recent Posts</h6>
                    <div class="row">
                        @foreach($latest as $posts)
                            @foreach($posts as $key => $post)
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
                        @endforeach
                    </div>
                </div>
            </div>
            {{$posts->links()}}
        </div>
    </div>

@endsection

@extends('layouts.base2')

@section('page.title')
    Categories
@endsection

@section('content')
    <div class="category-content">
        <div class="container">
            <div class="search">
                <div class="search-search">Search Result:</div>
                <div class="search-result">{{$category_name}}</div>
            </div>
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        @foreach($posts as $key => $post)
                            <div class="col-lg-6 col-md-10 ">
                                <a href="{{route('single', ['id' => $post->id])}}">
                                    <div class="category-card">
                                        <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                        <div class="category-cardInfo">
                                            <h6 class="category-cardTitle">{{$post->title}}</h6>
                                            <div class="category-cardData">
                                                <div class="search-date">
                                                    <i class="far fa-clock icon-clock-search"></i>
                                                    {{$datesOfPosts[$key]}}
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
                                                    <a href="{{route('author',[$post->user->id])}}">
                                                        {{$post->user->name." ".$post->user->surname}}
                                                    </a>
                                                </div>
                                                <div class="search-comments">
                                                    <i class="far fa-comment icon-comment-search"></i>
                                                    {{$post->comments->count()}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <h6 class="recent-title">Recent Posts</h6>
                </div>
                <div class="col-md-4 ">
                    <div class="blog-sidebar">
                        <h6 class="sidebar-title">Categories</h6>
                        @foreach($categories as $category)
                            <div class="sidebar-post">
                                <div class="sidebar-category">
                                    <div class="category-name">
                                        <a href="{{route('category', ['id' => $category->id])}}">{{$category->name}}</a>
                                    </div>
                                    <div class="category-posts">
                                        ({{$category->posts->count()}})
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-hr"></div>
                        @endforeach
                    </div>
                    <div class="blog-sidebar">
                        <h6 class="sidebar-title">Popular Post</h6>
                        @foreach($popular as $key => $post)
                            <div class="sidebar-post">
                                <div class="sidebar-card">
                                    <a href="{{route('single',[$post->id])}}">
                                        <img class="sidebar-img" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-text">
                                    <div class="post-title">{{$post->title}}</div>
                                    <div class="post-author">
                                        <div class="post-post">Post</div>
                                        <div class="post-by">By</div>
                                        <div class="post-sign">{{$post->user->name." ".$post->user->surname}}</div>
                                    </div>
                                    <div class="post-data">
                                        <div class="post-date">{{$datesOfPopularPosts[$key]}}</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">{{$post->comments->count()}} comments</a>
                                        </div>
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
            <div class="col-md-8 ">
                <div class="recent-posts">
                    <div class="row">
                        @foreach($latest as $key => $post)
                                <div class="col-lg-6 col-md-10 ">
                                    <a href="{{route('single', ['id' => $post->id])}}">
                                        <div class="category-card">
                                            <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                            <div class="category-cardInfo">
                                                <h6 class="category-cardTitle">{{$post->title}}</h6>
                                                <div class="category-cardData">
                                                    <div class="search-date">
                                                        <i class="far fa-clock icon-clock-search"></i>
                                                        {{$datesOfPosts[$key]}}
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
                                                        <a href="{{route('author',[$post->user->id])}}">
                                                            {{$post->user->name." ".$post->user->surname}}
                                                        </a>
                                                    </div>
                                                    <div class="search-comments">
                                                        <i class="far fa-comment icon-comment-search"></i>
                                                        {{$post->comments->count()}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>{{$latest->links()}}</div>
    </div>

@endsection

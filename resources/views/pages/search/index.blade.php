@extends('layouts.base2')

@section('page.title')
    Search Results
@endsection

@section('content')
    <div class="category-content margin-top-50px">
        <div class="container">
            <div class="search">
                <div class="search-search">Search Result:</div>
                <div class="search-result">{{$query}}</div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($result as $post)
                            <div class="col-lg-6 col-md-10 ">
                                <div class="category-card">
                                    <a href="{{route('single',[$post->id])}}">
                                        <img src="{{asset("storage/".$post->img_path)}}" alt="">
                                    </a>
                                    <div class="category-cardInfo">
                                        <div class="category-cardTitle">{{$post->title}}</div>
                                        <div class="category-cardData">
                                          <div class="search-date">
                                              <i class="far fa-clock icon-clock-search"></i>
                                              {{\App\Helpers\DateFormatHelper::index(explode(" ", $post->created_at)[0])}}s
                                          </div>
                                            <div class="search-category">
                                                <i class="far fa-folder icon-folder-search"></i>
                                                <a class="category-reference-search"
                                                   href="{{route('category', ['id' => \App\Models\Category::where(
                                                 'id', \App\Models\PostCategory::where(
                                                     'post_id', $post->id)->first()->category_id)->first()->id])}}">
                                                    {{\App\Models\Category::where('id', \App\Models\PostCategory::where(
                                                         'post_id', $post->id)->first()->category_id)->first()->name}}
                                                </a>
                                            </div>
                                            <div class="search-user">
                                                <i class="far fa-user icon-user-search"></i>
                                                {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
                                                (\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                            </div>
                                            <div class="search-comments">
                                                <i class="far fa-comment icon-comment-search"></i>
                                                {{\App\Models\Post::find($post->id)->comments->count()}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <div class="blog-sidebar">
                            <h6 class="sidebar-title">
                                Popular Post
                            </h6>
                            @foreach($popular as $post)
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
                                            <div class="post-sign">
                                                {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
    (\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                            </div>
                                        </div>
                                        <div class="post-data">
                                            <div
                                                class="post-date">{{\App\Helpers\DateFormatHelper::index(explode(" ", $post->created_at)[0])}}</div>
                                            <div class="post-hr"></div>
                                            <div class="post-comments">
                                                <a class="post-comment" href="#">
                                                    {{\App\Models\Comment::where('post_id', $post->id)->count()}} comments
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                    {{$result->links()}}
                </div>
            </div>
        </div>

    @endsection

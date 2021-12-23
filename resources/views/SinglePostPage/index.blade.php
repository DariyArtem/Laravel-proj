@extends('layouts.base2')

@section('page.title')
    Post
@endsection

@section('content')
    <script src="{{asset('js/singlePostPage.js')}}"></script>
    <div class="container">
        <div class="single-top">
            <div class="row">
                <div class="col-md-8">
                    @foreach($result as $post)@endforeach
                    <div class="post-img">
                        <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                    </div>

                    <h6 class="single-title">{{$post->title}}</h6>
                        <h6 class="single-title">Views:{{$post->views}}</h6>
                    <div class="single-info">
                        <div class="single-data">
                            <a class="single-reference" href="#">
                                <div class="single-time">
                                    <i class="far fa-clock icon-clock" aria-hidden="true"></i>{{$post->created_at}}
                                </div>
                            </a>
                            <a class="single-reference" href="#">
                                <div class="single-category">
                                    <i class="far fa-folder icon-folder" aria-hidden="true"></i>Solo Travel
                                </div>
                            </a>
                            <a class="single-reference" href="#">
                                <div class="single-by">
                                    <i class="far fa-user icon-user" aria-hidden="true"></i>
                                    {{(\App\Models\User::where('id', $post->author_id)->first()->name)." ".
                                           (\App\Models\User::where('id', $post->author_id)->first()->surname)}}
                                </div>
                            </a>
                            <a class="single-reference" href="#">
                                <div class="single-quantity">
                                    <i class="far fa-comment icon-comment" aria-hidden="true"></i>502
                                </div>
                            </a>
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
                            Popular Posts
                        </h6>
                        @foreach($popular as $post)
                        <div class="sidebar-post">
                            <div class="sidebar-card">
                                <a href="{{route('single',[$post->id])}}">
                                    <img class="sidebar-img" src="{{asset('storage/'.$post->img_path)}}" alt="">
                                </a>
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
            </div>
        </div>
        <div class="col-md-8">
            <div class="single-content">
                <div class="single-shortDescription">
                    {{$post->description}}
                </div>
                <div class="single-notification">
                    <span class="notification-span"></span>
                    <div class="notification-text">
                        {{$post->notification}}
                    </div>
                </div>
                @for($i=0; $i<count(explode(PHP_EOL, $post->content)); $i++)
                    @if($i%2 !== 0)
                        @foreach((\App\Models\Post_Image::where('post_id', $post->id)->get()) as $img)
                            <div class="row single-padding">
                                <div class="col-sm-6">
                                    <div class="single-card">
                                        <img src="{{asset('storage/'.$img->img_path)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-text">
                                        {{explode(PHP_EOL, $post->content)[$i]}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row single-padding">
                                    <div class="col-sm-6">
                                        <div class="single-text">
                                            {{explode(PHP_EOL, $post->content)[$i]}}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-card">
                                            <img src="img/singlePage/card2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endfor
                            <h6 class="single-title-fromContent">How was the jungal solo travel ?</h6>
                            <div class="single-text single-padding">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac
                                elementum
                                amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa
                                mi
                                dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                                egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                                pharetra. Et purus donec nibh lectus penatibus enim.
                            </div>
                            <div class="single-button">
                                <div>
                                    <button id="singlePost-play1" class="video-icon" type="button">
                                        <i class="fas fa-play fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="single-padding">
                                <div class="single-videofile">
                                    <button id="singlePost-close" class="video-close single-close " type="button">
                                        <i class="fas fa-times fa-2x" aria-hidden="true"></i>
                                    </button>
                                    <video id="singlePost-video1"
                                           src="video/home/Airpods%20(Not%20For%20Poor%20People).mp4"></video>
                                </div>
                            </div>
                            <div class="single-text single-padding">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac
                                elementum
                                amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa
                                mi
                                dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                                egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                                pharetra. Et purus donec nibh lectus penatibus enim.
                            </div>
                            <div class="single-text single-padding">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac
                                elementum
                                amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa
                                mi
                                dignissim vivamus lobortis et. Ante id diam in odio. Enim sapien, aliquet libero cursus
                                egestas amet mattis. Facilisi cursus netus massa eget. Leo pharetra, aliquam viverra
                                pharetra. Et purus donec nibh lectus penatibus enim.
                            </div>
                            <div class="single-text single-padding">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl rutrum vitae ac
                                elementum
                                amet, et. Non et nulla nisl, libero ac. Proin vitae quis maecenas elit. Lectus a massa
                                mi
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
                        <div class="single-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem nisl
                            rutrum
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
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New
                                    Travler
                                </div>
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
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New
                                    Travler
                                </div>
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
                                <div class="post-title recent-post proposition-title">13 things i’d Tell Any New
                                    Travler
                                </div>
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
                        <div class="form-input"><textarea class="form-message" type="text"
                                                          placeholder="Your message here"></textarea></div>
                    </form>
                    <button type="submit" class="form-submitButton single-submit">POST COMMENT</button>
                </div>
            </div>
        </div>
    </div>

@endsection

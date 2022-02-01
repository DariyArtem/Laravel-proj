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
                    @foreach($currentPost as $key => $element)
                        <div class="post-img">
                            <img src="{{asset('storage/'.$element->img_path)}}" alt="">
                        </div>
                        <h6 class="single-title">{{$element->title}}</h6>
                        <h6 class="single-title">Views:{{$element->views}}</h6>
                        <div class="single-info">
                            <div class="single-data">
                                <div class="single-time">
                                    <i class="far fa-clock icon-clock" aria-hidden="true"></i>{{$dateOfPost[$key]}}
                                </div>
                                <div class="single-category">
                                    <i class="far fa-folder icon-folder" aria-hidden="true"></i>
                                    @foreach($categories as $key => $category)
                                        <a class="category-reference"
                                           href="{{route('category', ['id' => $category["id"]])}}">{{$category["name"]}}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="single-by">
                                    <i class="far fa-user icon-user" aria-hidden="true"></i>
                                    <a class="single-reference"
                                       href="{{route('author', ['id' => $element->author_id])}}">{{(\App\Models\User::where('id', $element->author_id)->first()->name)." ".(\App\Models\User::where('id', $element->author_id)->first()->surname)}}
                                    </a>
                                </div>
                                <div class="single-quantity">
                                    <i class="far fa-comment icon-comment"
                                       aria-hidden="true"></i>{{\App\Models\Post::find($element->id)->comments->count()}}
                                </div>
                            </div>
                            @endforeach
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
                                        <div class="post-sign">{{$post->user->name." ".$post->user->surname}}
                                        </div>
                                    </div>
                                    <div class="post-data">
                                        <div
                                            class="post-date">{{$dateOfPopularPosts[$key]}}</div>
                                        <div class="post-hr"></div>
                                        <div class="post-comments">
                                            <a class="post-comment" href="#">{{$post->comments->count()}}comments</a>
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
            @foreach($currentPost as  $element)
                <div class="single-content">
                    <div class="single-shortDescription">
                        {{$element->description}}
                    </div>
                    <div class="single-notification">
                        <span class="notification-span"></span>
                        <div class="notification-text">
                            {{$element->notification}}
                        </div>
                    </div>
                    @if($element->images->count() == 0)
                        <div class="col-sm-12">
                            <div class="single-text">
                                {{$element->content}}
                            </div>
                        </div>
                    @else
                        @for($i=0; $i<count(explode(PHP_EOL, $element->content, $element->images->count())); $i++)
                            @if($i%2 !== 0)
                                <div class="row single-padding">
                                    <div class="col-sm-6">
                                        <div class="single-card">
                                            <img
                                                src="{{asset('storage/'.$element->images[$i]->img_path)}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-text">
                                            {{explode(PHP_EOL, $element->content,$element->images->count())[$i]}}
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row single-padding">
                                    <div class="col-sm-6">
                                        <div class="single-text">
                                            {{explode(PHP_EOL, $element->content,$element->images->count())[$i]}}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-card">
                                            <img
                                                src="{{asset('storage/'.$element->images[$i]->img_path)}}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endfor
                    @endif
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
                            <video id="singlePost-video1" src="{{asset('storage./'.$element->video_path)}}"></video>
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
                                <img
                                    src="{{asset('storage/'.$element->user->picture)}}"
                                    alt="">
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
                            <div class="single-name">
                                <a class="single-reference" href="{{route('author', ['id' => $element->user->id])}}">
                                    {{$element->user->name." ".$element->user->surname}}
                                </a>
                            </div>
                            <div class="single-role">{{$element->user->role->name}}</div>
                            <div class="single-about">{{$element->user->about}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="single-faetured">
            <h6 class="featured-title text-center">You Might Also Like</h6>
            <div class="row">
                @foreach($similar as $key => $post)
                    <div class="col-xl-4">
                        <div class="recent-post">
                            <a href="{{route('single',[$post->id])}}">
                                <div class="recent-img">
                                    <img src="{{asset('storage/'.$post->img_path)}}" alt="">
                                </div>
                            </a>
                            <div class="post-text recent-text">
                                <div class="post-title recent-post proposition-title">{{$post->title}}
                                </div>
                                <div class="recent-author">
                                    <div class="post-post recent-wordPost">Post</div>
                                    <div class="post-by recent-by">By</div>
                                    <div
                                        class="post-sign recent-sign">{{$post->user->name." ".$post->user->surname}}</div>
                                </div>
                                <div class="post-data recent-data">
                                    <div class="post-date recent-date">{{$dateOfSimilarPosts[$key]}}</div>
                                    <div class="post-hr recent-hr"></div>
                                    <div class="post-comments recent-comments">
                                        <a class="post-comment recent-comment" href="#">{{$post->comments->count()}}
                                            comments</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="single-comments">
            @foreach($currentPost as $post)
            <h6 class="comments-title">Comments ({{$post->comments->count()}})</h6>
                @foreach($post->comments as $comment)
                    <div class="comments-comment">
                        <div class="comment-photo">
                            @if(\App\Models\User::where('email', $comment->email)->first() === null)
                                <img src="" alt="">
                            @else
                                <img
                                    src="{{asset('storage/'.\App\Models\User::where('email', $comment->email)->first()->picture)}}"
                                    alt="">
                            @endif
                        </div>
                        <div class="comment-text">
                            <div class="comment-name">{{$comment->name}}</div>
                            <div class="comment-comment">{{$comment->message}}</div>
                            <div class="single-time">
                                <i class="far fa-clock icon-clock" aria-hidden="true"></i>{{$comment->created_at}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
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
                    @foreach($currentPost as $post)
                    <form method="post" enctype="multipart/form-data" action="{{route('comment')}}">
                        @csrf
                        @if(Auth::check())
                            <div class="form-input">
                                <textarea required="required" id="inputMessage" class="form-message" type="text"
                                          name="message"
                                          placeholder="Your message here"></textarea>
                            </div>
                            <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}">
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">
                        @else
                            <div class="form-input">
                                <input id="inputName" class="form-name" type="text" name="name"
                                       placeholder="Full Name">
                            </div>
                            <div class="form-input">
                                <input id="inputEmail" class="form-email" type="text" name="email"
                                       placeholder="E-mail">
                            </div>
                            <div class="form-input">
                                <input id="inputNumber" class="form-number" type="text"
                                       name="number"
                                       placeholder="Number">
                            </div>
                            <div class="form-input">
                                        <textarea id="inputMessage" class="form-message" type="text"
                                                  name="message"
                                                  placeholder="Your message"></textarea>
                            </div>
                            <input type="hidden" id="post_id" value="{{($post->id)}}">

                        @endif
                        @error('formMessage')
                        <div class="mt-4 mb-0">
                            <div class="d-grid btn-danger">{{$message}}</div>
                        </div>
                        @enderror
                        <button type="button" id="submit" class="form-submitButton">SEND MESSAGE</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/AjaxComment.js')}}"></script>
@endsection

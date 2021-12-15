@extends('private')

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light">{{__('Editing post')}}</h3>
                        </div>
                        <div class="card-body">
                            @foreach($result as $element)
                                <form method="post" action="{{route('posts.update', ['id' => $element->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputTitle" name="title" required="required"
                                               type="text" placeholder="Title" value="{{$element->title}}"/>
                                        <label for="input=itle">{{__('Title of your post')}}</label>
                                    </div>
                                    @error('title')
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid btn-danger">{{$message}}</div>
                                    </div>
                                    @enderror
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputDescription" name="description"
                                               required="required"
                                               type="text" placeholder="Description" value="{{$element->description}}"/>
                                        <label for="inputDescription">{{__('Short description of post')}}</label>
                                    </div>
                                    @error('description')
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid btn-danger">{{$message}}</div>
                                    </div>
                                    @enderror
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputNotification" name="notification"
                                               required="required"
                                               type="text" placeholder="Notification"
                                               value="{{$element->notification}}"/>
                                        <label for="inputNotification">{{__('Notification for post')}}</label>
                                    </div>
                                    @error('notification')

                                    <div class="mt-4 mb-0">
                                        <div class="d-grid btn-danger">{{$message}}</div>
                                    </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="inputContent" class="form-label">Input content of your post</label>
                                        <textarea class="form-control" name="content" id="inputContent"
                                                  rows="20">{{$element->content}}</textarea>
                                    </div>
                                    @error('content')
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid btn-danger">{{$message}}</div>
                                    </div>
                                    @enderror
                                    @error('image')
                                    @enderror
                                    <div class="d-block mb-3">
                                        <div class="mb-3">Title image of your post</div>
                                        <div class="admin-image">
                                            <img src="{{asset("storage/".$element->img_path)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputImage" class="form-label">Upload title image of you post</label>
                                        <input id="inputImage" type="file" name="image">
                                    </div>

                                    @endforeach
                                    @error('formMessage')
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid btn-danger">{{$message}}</div>
                                    </div>
                                    @enderror
                                    <div class="d-flex justify-content-center mt-4 mb-0">
                                        <button class="btn btn-primary btn-lg" type="submit">{{__('Save')}}</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

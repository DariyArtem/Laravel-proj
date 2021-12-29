@extends('private')

@section('content')

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light">{{__('Create new post')}}</h3></div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('posts.store')}}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputTitle" name="title" required="required"
                                           type="text" placeholder="name@example.com"/>
                                    <label for="inputTitle">{{__('Title of your post')}}</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputDescription" name="description" required="required"
                                           type="text" placeholder="Password"/>
                                    <label for="inputDescription">{{__('Short description of post')}}</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputNotification" name="notification" required="required"
                                           type="text" placeholder="name@example.com"/>
                                    <label for="inputNotification">{{__('Notification for post')}}</label>
                                </div>
                                <div class="mb-3">
                                    <label for="inputContent"  class="form-label">{{__('Input content of your post')}}</label>
                                    <textarea class="form-control" name="content" id="inputContent" rows="12"></textarea>
                                </div>
                                <div class="mb-3">
                                        <label for="inputImage" class="form-label">{{__('Upload title image of you post')}}</label>
                                        <input id="inputImage" type="file" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="inputImages" class="form-label">{{__('Please upload image for every paragraph of you post')}}</label>
                                    <input id="inputImages" type="file" multiple name="images[]">
                                </div>
                                <div class="mb-3">
                                    <label for="inputVideo" class="form-label">{{__('Upload video for you post')}}</label>
                                    <input id="inputVideo" type="file" name="video">
                                </div>
                                <div class="mb-3">

                                    <select class="form-select" id="status" multiple="multiple" name="categories[]">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @error('formMessage')
                                <div class="mt-4 mb-0">
                                    <div class="d-grid btn-danger">{{$message}}</div>
                                </div>
                                @enderror
                                <div class="d-flex justify-content-center mt-4 mb-0">
                                    <button class="btn btn-primary btn-lg" type="submit">{{__('Create')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

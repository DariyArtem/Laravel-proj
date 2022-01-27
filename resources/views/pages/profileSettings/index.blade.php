@extends('layouts.admin')

@section('content')
    <div class="card mb-4">
        <div class="col-6 mb-3 mt-3">
            @if(session('success'))
                <div class="mt-4 mb-0">
                    <div class="d-grid btn-success big h5">{{session('success')}}</div>
                </div>
            @endif
            @error('fromMessage')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            <div class="about-sidebar">
                @foreach($result as $element)
                    <div class="blog-sidebar sidebar-profile">
                        <div class="sidebar-profileInfo">
                            <div class="sidebar-photo mb-2">
                                <img src="{{asset("storage/".$element->picture)}}" alt="">
                            </div>
                            @endforeach
                            <div class="">
                                <form method="post" enctype="multipart/form-data" action="{{route('settings.update')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputFirstName" name="name" type="text"
                                                   required="required" value="{{$element->name}}"
                                                   placeholder="Enter your first name"/>
                                            <label for="inputFirstName">{{__('First name')}}</label>
                                        </div>
                                        @error('name')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">

                                        <div class="form-floating">
                                            <input class="form-control" id="inputLastName" name="surname"
                                                   required="required" value="{{$element->surname}}" type="text"
                                                   placeholder="Enter your last name"/>
                                            <label for="inputLastName">{{__('Surname')}}</label>
                                        </div>
                                        @error('surname')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputNumber" type="number" name="phone"
                                               required="required" value="{{$element->phone}}"
                                               placeholder="+380934567890"/>
                                        <label for="inputNumber">{{__('Phone Number')}}</label>
                                        @error('phone')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputCountry" required="required"
                                                   name="country" value="{{$element->country}}" type="text"
                                                   placeholder="Enter country"/>
                                            <label for="inputCountry">{{__('Country')}}</label>
                                        </div>
                                        @error('country')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputRegion" required="required"
                                                   name="region" value="{{$element->region}}" type="text"
                                                   placeholder="Enter region"/>
                                            <label for="inputRegion">{{__('Region')}}</label>
                                        </div>
                                        @error('region')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputCity" required="required" name="city"
                                                   type="text" value="{{$element->city}}" placeholder="Enter city"/>
                                            <label for="inputCity">{{__('City')}}</label>
                                        </div>
                                        @error('city')
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid btn-danger">{{$message}}</div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputContent"
                                               class="form-label">{{__('Input information about yourself')}}</label>
                                        <textarea class="form-control" name="about" id="inputContent"
                                                  rows="12">{{$element->about}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputImage"
                                               class="form-label">{{__('Upload profile picture')}}</label>
                                        <input id="inputImage" type="file" name="picture">
                                    </div>
                                    <div class="d-flex mt-4 mb-0">
                                        <button class="btn btn-primary btn-lg" id="submit"
                                                type="button">{{__('Update')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <script src="{{asset('js/AjaxProfileSettingsUpdate.js')}}"></script>
@endsection

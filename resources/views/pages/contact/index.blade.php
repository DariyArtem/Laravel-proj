@extends('layouts.base')

@section('page.title')
    Contact Me
@endsection

@section('content')

    <section class="background">
        <img src="{{asset('img/contactMePage/background.png')}}" alt="">
        <div class="background-gradient"></div>
    </section>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @if(session('success'))
                        <div class="mt-4 mb-3">
                            <div class="d-grid btn-success big h5 text-center">{{session('success')}}</div>
                        </div>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="{{route('message')}}">
                        @csrf
                        @if(Auth::check())
                            <div class="form-input">
                                <textarea required="required" class="form-message" type="text" name="message"
                                          placeholder="Your message here"></textarea>
                            </div>
                        @else
                            <div class="form-input">
                                <input id="inputName" required="required" class="form-name" type="text" name="name"
                                       placeholder="Full Name">
                            </div>
                            <div class="form-input">
                                <input id="inputEmail" required="required" class="form-email" type="text" name="email"
                                       placeholder="E-mail">
                            </div>
                            <div class="form-input">
                                <input id="inputNumber" required="required" class="form-number" type="text"
                                       name="number"
                                       placeholder="Number">
                            </div>
                            <div class="form-input">
                                        <textarea id="inputMessage" required="required" class="form-message" type="text"
                                                  name="message"
                                                  placeholder="Your message"></textarea>
                            </div>
                        @endif
                        @error('formMessage')
                        <div class="mt-4 mb-0">
                            <div class="d-grid btn-danger">{{$message}}</div>
                        </div>
                        @enderror
                        <button type="submit" class="form-submitButton">SEND MESSAGE</button>
                    </form>

                </div>
                <div class="col">
                    <div class="form-textRight">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit
                        justo velit,
                        eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla
                        accumsan
                        id urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

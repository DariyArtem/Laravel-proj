@extends('layouts.auth')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">{{__('Password Recovery')}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">
                                    {{__('Enter your email address and we will send you a link to reset your password.')}}
                                </div>
                                <form>
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">{{__('Email address')}}</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="{{route('login')}}">{{__('Return to login')}}</a>
                                        <a class="btn btn-primary" href="{{route('login')}}">{{__('Reset Password')}}</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small">
                                    <a href="{{route('register')}}">{{__('Need an account? Sign up!')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">{{__('Privacy Policy')}}</a>
                        &middot;
                        <a href="#">{{__('Terms &amp; Conditions')}}</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection

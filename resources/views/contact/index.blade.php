@extends('layouts.base')

@section('page.title')
    Contact Me
@endsection

@section('content')

    <header class="header">
        <div class="background">
            <img src="img/contactMePage/contactMe-bg.png" alt="">
        </div>
        <div class="background-gradient"></div>
        <div class="header-sidebar">
            <div class="sidebar-top">
                <div class="header-logo"><img src="http://gallivant/img/header/logo.png" alt=""></div>
                <div class="header-closeSidebar">
                    <span class="close-left"></span>
                    <span class="close-right"></span>
                </div>

            </div>
            <div class="header-sidebarSearch">
                <img class="sidebar-search" src="http://gallivant/img/header/lupa.png" alt="">
                <input class="header-input" type="text" placeholder="Search your option">
            </div>
            <div class="header-menu">
                <ul class="sidebar-references">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </div>
            <div class="header-sidebarIcons">
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
        <div class="container">
            <div class="row header-row">
                <div class="header-logo"><img src="img/header/logo.png" alt=""></div>
                <div class="header-search">
                    <img class="header-lupa" src="img/header/lupa.png" alt="">
                    <input class="header-input" type="text" placeholder="Search your option">
                </div>
                <div class="header-burger">
                    <div class="burger-top"></div>
                    <div class="burger-center"></div>
                    <div class="burger-bottom"></div>
                </div>
                <div class="header-icons">
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
            <div class="header-hr">
                <hr class="header--hr">
            </div>
            <menu class="header-menu">
                <ul class="header-references">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
            </menu>
            <div class="header-content">
                <div class="header-text">
                    <div class="header-title">
                        <p>Contact Me</p>
                    </div>
                    <div class="header-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit,
                            eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan id
                            urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post">
                        <div class="form-input"><input class="form-name" type="text" placeholder="Full Name"></div>
                        <div class="form-input"><input class="form-email" type="text" placeholder="E-mail"></div>
                        <div class="form-input"><input class="form-number" type="text" placeholder="Number"></div>
                        <div class="form-input"><textarea class="form-message" type="text" placeholder="Your message here"></textarea></div>
                    </form>
                    <button type="submit" class="form-submitButton">SEND MESSAGE</button>
                </div>
                <div class="col-lg-6">
                    <div class="form-textRight">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed et donec purus viverra. Sit justo velit,
                        eu sed sollicitudin tempus, risus. Sed sit elit mauris adipiscing. Lobortis pellentesque nulla accumsan
                        id urna, ullamcorper gravida varius. Massa mauris, cursus orci magna non enim fames et sed.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

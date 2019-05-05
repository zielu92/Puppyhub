@extends('static.layouts.app-basic')

@section('body')

    <!-- mobile navbar-->
    <nav id="index-nav" class="navbar navbar-expand-lg navbar-light bg-light box-shadow fixed-top">
        <a class="navbar-brand" href="/"><img class="img-responsive mr-3" src="/images/logo.png" alt="logo">Puppies Hub</a>
        <button class="navbar-toggler float-right mt-2" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div id="navigation-bar">
                {!! Form::open(['method'=>'GET', 'class'=>'form-inline my-2 my-lg-0']) !!}
                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
                {!! Form::text('search', null, ['required',
                                            'id'=>'searchForm',
                                            'class'=>'form-control mr-sm-2 search-box box-shadow',
                                            'placeholder'=>'Search . . .']) !!}
                {!! Form::submit('Search',['class'=>'btn btn-primary mt-3 mt-md-0']) !!}
                {!! Form::close() !!}
            </div>
            @guest
                <a href="/register" class="btn btn-link nav-link-main text-uppercase" role="button">Register</a>
                <a href="/login" class="btn btn-link nav-link-main text-uppercase" role="button">Login</a>
            @endguest

            @auth
                <a href="/dashboard" class="btn btn-link nav-link-main text-uppercase" role="button">
                    Welcome, {{ Auth::user()->name }}
                </a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger nav-link-main text-uppercase">Logout</button>
                </form>
            @endauth
        </div>
    </nav>

    <!-- desktop site navbar-->
    <div class="container mt-5">
        <section id="index-header" class="d-flex justify-content-between">
            <div class="p-2">
                {!! Form::open(['method'=>'GET', 'class'=>'form-inline my-2 my-lg-0']) !!}
                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
                {!! Form::text('search', null, ['required',
                                            'id'=>'searchForm',
                                            'class'=>'form-control mr-sm-2 search-box box-shadow',
                                            'placeholder'=>'Search . . .']) !!}
                {!! Form::submit('Search',['class'=>'btn btn-primary mt-3 mt-md-0']) !!}
                {!! Form::close() !!}
            </div>
            <div class="p-2">
                <img id="logo" class="mx-auto" src="/images/logo.png" alt="" style="position: relative;
    left: -1.3rem;">
            </div>
            <div class="p-2">
                @guest
                    <h5 class="d-inline mr-5"><a class="font-weight-bold text-uppercase"
                                                 href="/register">Register</a>
                    </h5>
                    <h5 class="d-inline"><a class="font-weight-bold text-uppercase" href="/login">Login</a></h5>
                @endguest

                @auth
                    <h5 class="d-inline mr-5 text-uppercase"><a href="/dashboard">
                            Welcome, {{ Auth::user()->name }}
                        </a>
                    </h5>
                    <form class="d-inline" action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger nav-link-main text-uppercase">Logout</button>
                    </form>
                @endauth
            </div>
        </section>

        <!-- category navigation-->
        <section id="category-navigation" class="d-flex justify-content-center mt-5 scrolling-wrapper">
            <div class="text-center d-inline-block mr-3">
                <h5 class="d-inline font-weight-bold"><a href="/static/categoryPage">Category 1</a></h5>
            </div>
            <div class="text-center d-inline-block mr-3">
                <h5 class="d-inline font-weight-bold"><a href="/static/categoryPage">Category 2</a></h5>
            </div>
            <div class="text-center d-inline-block mr-3">
                <h5 class="d-inline font-weight-bold"><a href="/static/categoryPage">Category 3</a></h5>
            </div>
            <div class="text-center d-inline-block mr-3">
                <h5 class="d-inline font-weight-bold"><a href="/static/categoryPage">Category 4</a></h5>
            </div>
            <div class="text-center d-inline-block mr-3">
                <h5 class="d-inline font-weight-bold"><a href="/static/categoryPage">Category 5</a></h5>
            </div>
        </section>

        {{--    <section id="delete-this-on-production" class="text-center bg-danger p-5 my-3">--}}
        {{--        <h1 class="text-white">-- This section only for development purpose --</h1>--}}
        {{--        <p>--}}
        {{--            <a class="mr-3 text-warning" href="/static/login">[GOTO] Login page</a>--}}
        {{--            <a class="mr-3 text-warning" href="/static/register">[GOTO] Register page</a>--}}
        {{--            <a class="text-warning" href="/static/password_reset">[GOTO] Reset passsword page</a>--}}
        {{--        </p>--}}
        {{--        <p>--}}
        {{--            <a class="mr-3 text-warning" href="/static/categoryPage">[GOTO] Category page</a>--}}
        {{--            <a class="text-warning" href="/static/puppiesPage">[GOTO] Puppy page</a>--}}
        {{--        </p>--}}
        {{--        <p>--}}
        {{--            <a class="mr-3 text-warning" href="/static/announcement/create">[GOTO] Create announcement</a>--}}
        {{--            <a class="mr-3 text-warning" href="/static/dashboard">[GOTO] UserController dashboard</a>--}}
        {{--            <a class="text-warning" href="/static/dashboard/admin">[GOTO] Admin dashboard</a>--}}
        {{--        </p>--}}
        {{--    </section>--}}

        <!-- feature dog-->
        <section id="hero" class="mt-5">
            <div class="jumbotron bg-white no-rounding box-shadow hero-background-image" style="background-image: url('/images/hero.jpeg')">
                    <h2 class="display-5 font-weight-bold text-center text-uppercase text-shadow">Siberian Husky</h2>
                    <p class="px-5 pb-3 text-center mt-5 ml-auto mr-auto hero-description text-shadow">The most smart and cutest
                        creatures ever!</p>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="p-2">
                            <h6 class="d-inline text-shadow"><a class="font-weight-bold" href="/static/puppyPage">Learn More ></a>
                            </h6>
                        </div>
                        <div class="p-2 ml-5">
                            <h6 class="d-inline text-shadow"><a class="font-weight-bold" href="#">Buy ></a></h6>
                        </div>
                    </div>
                </div>
        </section>
        
        <section id="catalog">
            <div class="catalog mt-5">
                <div class="d-flex catalog-header scrolling-wrapper">
                    <div class="pt-1 pl-0 mr-4">
                        <h1 class="font-weight-bold"><a href="/static/categoryPage">Main Category</a></h1>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 1</a></h2>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 2</a></h2>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 3</a></h2>
                    </div>
                </div>

                <!-- dog card -->
                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-2.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-3.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-4.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>

                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-5.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-6.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-7.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-8.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>

                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-9.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-10.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-11.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-12.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>
                <h4 class="d-inline float-right mt-3"><a href="/static/categoryPage">More ></a></h4>
            </div>
            <br>
            <div class="catalog mt-5">
                <div class="d-flex catalog-header scrolling-wrapper">
                    <div class="pt-1 pl-0 mr-4">
                        <h1 class="font-weight-bold"><a href="/static/categoryPage">Main Category</a></h1>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 1</a></h2>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 2</a></h2>
                    </div>
                    <div class="pt-3 pl-0 mr-4">
                        <h2><a href="/static/categoryPage">Subcategory 3</a></h2>
                    </div>
                </div>

                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-2.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-3.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-4.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>

                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-5.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-6.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-7.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-8.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>

                <div class="row mt-4 catalog-body">
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-9.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-10.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-11.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 catalog-card">
                        <a href="/static/puppiesPage">
                            <div class="card no-border">
                                <img class="card-img-top" src="/images/225-12.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card header</h5>
                                    <p class="card-text">Card Subheader</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        <form class="p-0 like-form">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                </div>
                <h4 class="d-inline float-right mt-3"><a href="/static/categoryPage">More ></a></h4>
            </div>
        </section>
    </div>
@endsection
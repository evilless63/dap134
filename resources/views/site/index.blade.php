@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Преимущества работы с нами</h2>
            </div>
            <div class="features-wrap">
              <div class="row">
                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box">
                    <div class="featured-icon">
                      <i class="fa fa-bolt"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Эффективность</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->
                
                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box">
                    <div class="featured-icon">
                      <i class="fa fa-diamond"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Надежность</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->

                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box">
                    <div class="featured-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Опыт</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->

                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box">
                    <div class="featured-icon">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Планирование</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Последние новости и информация</h2>
            </div>
            
            <!-- Start Blog Section 3 -->
            <section class="blog">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <div class="blog-block">
                        <img src="img/blog/img1.jpg">
                        <div class="blog-content">
                        <h3><a href="{{ action('PostController@show', 1) }}">Post Title</a></h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                        <a href="{{ action('PostController@show', 1) }}" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="blog-block">
                        <img src="img/blog/img1.jpg">
                        <div class="blog-content">
                        <h3><a href="{{ action('PostController@show', 1) }}">Post Title</a></h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                        <a href="{{ action('PostController@show', 1) }}" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="blog-block">
                        <img src="img/blog/img1.jpg">
                        <div class="blog-content">
                        <h3><a href="{{ action('PostController@show', 1) }}">Post Title</a></h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                        <a href="{{ action('PostController@show', 1) }}" class="btn btn-common">Read More</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- End Blog Section 3 -->

        </div>
    </div>
</div>
@endsection
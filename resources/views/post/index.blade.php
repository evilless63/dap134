@extends('layouts.app')

@section('title', 'Новости')

@section('content')
{{$id = '1'}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Новости</h2>
            </div>

            <!-- Start Blog Section 3 -->
            <section class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-60"></div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img src="img/blog/img1.jpg">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $id) }}">Post Title</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>29 Марта, 2018</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet atque fugit vitae voluptatem...</p>
                                <a href="{{ action('PostController@show', $id) }}" class="btn btn-common">Read More</a>
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
@extends('layouts.app')

@section('title', 'Главная')

@section('content')

<div class="container">
  <div class="features-wrap">
  <div class="row">
    <div class="col-md-3">
      <div class="featured-box">
          <div class="featured-icon">
              <i class="fa fa-bolt"></i>
          </div>  
          <div class="featured-content">
              <h4><a class="nav-link" href="{{ route('docs_by_category', ['category' => 1]) }}">Извещения о торгах Крым</a></h4>
              <p></p>
          </div>
      </div>  
    </div>

    <div class="col-md-3">
        <div class="featured-box">
            <div class="featured-icon">
                <i class="fa fa-bolt"></i>
            </div>  
            <div class="featured-content">
                <h4><a class="nav-link" href="{{ route('docs_by_category', ['category' => 2]) }}">Извещения о торгах Волгоград</a></h4>
                <p></p>
            </div>
        </div>  
      </div>

      <div class="col-md-3">
          <div class="featured-box">
              <div class="featured-icon">
                  <i class="fa fa-bolt"></i>
              </div>  
              <div class="featured-content">
                  <h4><a class="nav-link" href="{{action('PostController@show', '2')}}">Комиссионная продажа Крым</a></h4>
                  <p></p>
              </div>
          </div>  
        </div>

        <div class="col-md-3">
            <div class="featured-box">
                <div class="featured-icon">
                    <i class="fa fa-bolt"></i>
                </div>  
                <div class="featured-content">
                    <h4><a class="nav-link" href="{{action('PostController@show', '1')}}">Комиссионная продажа Волгоград</a></h4>
                    <p></p>
                </div>
            </div>  
          </div>
  </div>
</div>
</div>

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
                  <div class="featured-box" style="    align-items: baseline;
    display: flex;">
                    <div class="featured-icon">
                      <i class="fa fa-bolt"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Эффективность</h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->
                
                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box" style="    align-items: baseline;
    display: flex;">
                    <div class="featured-icon">
                      <i class="fa fa-diamond"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Надежность</h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->

                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box" style="    align-items: baseline;
    display: flex;
    margin-top: 30px;">
                    <div class="featured-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Опыт</h4>
                      <p></p>
                    </div>
                  </div>
                </div>
                <!-- End featured -->

                <!-- Start featured -->
                <div class="col-md-6 col-sm-6">
                  <div class="featured-box" style="    align-items: baseline;
    display: flex;
    margin-top: 30px;">
                    <div class="featured-icon">
                      <i class="fa fa-cogs"></i>
                    </div>
                    <div class="featured-content">
                      <h4>Планирование</h4>
                      <p></p>
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

                    @foreach($posts as $post)

                    
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img style="height: 200px; background: url({{ asset('posts_files/'.$post->image_path) }}); background-size: cover;" src="">
                                <div class="blog-content">
                                <h3><a href="{{ action('PostController@show', $post->id) }}">{{$post->title}}</a></h3>
                                <div class="meta-tags">
                                    <span class="date"><i class="lnr lnr-calendar-full"></i>{{$post->updated_at}}</span>
                                </div>
                                <p>{{$post->description_preview}}</p>
                                <a href="{{ action('PostController@show', $post->id) }}" class="btn btn-common">Читать</a>
                                </div>
                            </div>
                        </div>

                    @if(is_int($loop->iteration / 3))
                    </div>

                    <div class="mb-60"></div>
                    
                    <div class="row">
                    @endif

                    @endforeach

                    

                </div>

                </div>
            </section>
            <!-- End Blog Section 3 -->

        </div>
    </div>
</div>
@endsection
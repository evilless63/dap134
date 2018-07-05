@extends('layouts.app')

@section('title', 'Новости')

@section('content')

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
                    @foreach($posts as $post)
                        <div class="col-md-4">
                            <div class="blog-block">
                                <img style="height: 200px; background: url({{ asset('posts_files/'.$post->image_path) }}) ;    background-size: cover;" src="">
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
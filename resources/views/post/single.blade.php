@extends('layouts.app')

@section('title', $post->title )
@section('meta_keys', $post->meta_keys )
@section('meta_description', $post->meta_description)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">{{ $post->title }}</h2>
            </div>

            <img src="{{ asset('posts_files/'.$post->image_path) }}" alt="" class="post-img float-right">

            {!!$post->description!!}
                
        </div>
    </div>
</div>
@endsection
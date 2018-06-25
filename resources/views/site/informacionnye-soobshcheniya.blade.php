@extends('layouts.app')

@section('title', 'Информационные сообщения')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Информационные сообщения</h2>
            </div>

            <ul class="list-style arrow-list arrow-list-one pl-0">
                @foreach($documents as $document)
                <li>
                    <a href="{{$document->file_path}}">
                        <i class="fa fa-download icons" aria-hidden="true"></i> {{$document->title}}
                    </a>
                </li>
                @endforeach
            </ul>           
            
        </div>
    </div>
</div>
@endsection
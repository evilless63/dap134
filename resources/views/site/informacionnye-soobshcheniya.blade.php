@extends('layouts.app')

@section('title', 'Информационные сообщения')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Информационные сообщения (
                    @if($category == 1) 
                        Крым
                    @elseif($category == 2)
                        Волгоград
                    @else
                    @endif
                    )</h2> 
            </div>

            <ul class="list-style arrow-list arrow-list-one pl-0">
                @foreach($documents as $document)
                <li>
                    <a href="/document_files/{{$document->file_path}}">
                        <i class="fa fa-download icons" aria-hidden="true"></i> {{$document->title}}
                    </a>
                </li>
                @endforeach
            </ul>           
            
        </div>
    </div>
</div>
@endsection
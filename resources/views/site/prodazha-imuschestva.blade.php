@extends('layouts.app')

@section('title', 'Продажа имущества')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Продажа имущества</h2>
            </div>

            <p class="lead text-center"><strong>Для просмотра списка имущества, выставленного на реализацию, нажмите на кнопку скачивания:</strong></p>

            <div class="mb-60"></div>
            
            <a href="{{asset('/document_files/list/list_of_property.xls')}}" class="btn std-btn btn-xlg btn-common text-center">
            <i class="fa fa-download icons"></i>
            Список имущества
            </a>
            
            
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Образцы документов')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Образцы документов</h2>
            </div>

            <table class="table table-hover-common">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Наименование</th>
                        <th>Документ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Заявка на участие в торгаж</td>
                        <td><a href="{{ asset('document_files/zayavka_na_torgi.doc') }}" target="_blank">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Опись документов</td>
                        <td><a href="{{ asset('document_files/opis_documentov.doc') }}" target="_blank">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Протокол о результатах торгов</td>
                        <td><a href="{{ asset('document_files/protocol_o_rezultatah_torgov.doc') }}" target="_blank">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Заявка на приобретение имущества</td>
                        <td><a href="{{ asset('document_files/zayavka_na_priobretenie_imushestva.doc') }}" target="_blank">Ссылка на документ</a></td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
@endsection
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
                        <td>Анкета-сведения об участнике для физических лиц</td>
                        <td><a href="{{ asset('documents/anketa_na_fizicheskoe_lico_lico_1.doc') }}">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Анкета-сведения об участнике для юридических лиц</td>
                        <td><a href="{{ asset('documents/anketa_na_yuridicheskoe_lico_1.doc') }}">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Заявка (комиссия)
                            <br>
                            ПРИЛОЖЕНИЕ-1 (заявка на приобретение имущества, обращенного в собственность государства)</td>
                        <td><a href="{{ asset('documents/zayvka_komissiya.docx') }}">Ссылка на документ</a>
                        <br><a href="{{ asset('documents/prilozhenie-1-zayavka-na-priobretenie-imushchestva-obrashchennogo-v-sobstvennost-gosudarstva.docx') }}">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Заявка (торги)</td>
                        <td><a href="{{ asset('documents/blank-zajavka-na-uchastie-v-torgakh.doc') }}">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Заявление на возврат задатка</td>
                        <td><a href="{{ asset('documents/zayvlenie_vozvrat_1.doc') }}">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Опись к заявке</td>
                        <td><a href="{{ asset('documents/opis_k_zayvke_na_torgi.doc') }}">Ссылка на документ</a></td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
@endsection
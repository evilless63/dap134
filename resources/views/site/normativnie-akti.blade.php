@extends('layouts.app')

@section('title', 'Нормативные акты')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Нормативные акты</h2>
            </div>

            <table class="table table-hover-common">
                <thead class="thead-inverse">
                    <tr>
                        <th>Название</th>
                        <th>Примечание</th>
                        <th>Ссылка на документ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Гражданский кодекс</th>
                        <td>Статьи 447-449</td>
                        <td><a href="#">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Закон об ипотеке</th>
                        <td>Федеральный закон от 16.07.1998 № 102-ФЗ «Об ипотеке (залоге недвижимости)»</td>
                        <td><a href="http://www.consultant.ru/document/cons_doc_LAW_5142/">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Закон об исполнительном производстве</th>
                        <td>Федеральный закон от 02.10.2007 № 229-ФЗ «Об исполнительном производстве»</td>
                        <td><a href="http://www.consultant.ru/document/cons_doc_LAW_19396/">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Постановление Правительства РФ о сайте по заложенному имуществу</th>
                        <td>Постановление Правительства Российской Федерации от 30 января 2013 г. № 66 «О Правилах направления информации о торгах по продаже заложенного недвижимого и движимого имущества в ходе исполнительного производства, а также о торгах по продаже заложенного движимого имущества во внесудебном порядке для размещения в информационно-телекоммуникационной сети «Интернет».</td>
                        <td><a href="http://www.consultant.ru/document/cons_doc_LAW_71450/">Ссылка на документ</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Постановление Правительства РФ об официальном сайте</th>
                        <td>Постановление Правительства Российской Федерации от 10.09.2012 № 909 "Об определении официального сайта Российской Федерации в информационно-телекоммуникационной сети «Интернет» для размещения информации о проведении торгов и внесении изменений в некоторые акты Правительства Российской Федерации"</td>
                        <td><a href="http://www.mnogozakonov.ru/catalog/date/2012/9/10/73600/">Ссылка на документ</a></td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Наименование новости')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Наименование новости</h2>
            </div>

            <img src="{{ asset('img/blog/img1.jpg') }}" alt="" class="post-img float-right">

            <p class="lead"><strong>Условия участия в торгах:</strong></p>

            <p class="lead">К участию в торгах допускаются юридические и физические лица, оплатившие в установленные сроки задатки и оформившие надлежащим образом следующие документы:</p>

            <p class="lead">1. Заявка на участие в торгах (примерная форма заявки размещена в разделе «Документы»). </p>
            <p class="lead">2. Платежное поручение с отметкой банка об исполнении, подтверждающее внесение претендентом задатка в счет обеспечения оплаты приобретаемого имущества. Задаток перечисляется на расчетный счет&nbsp;№40302810500001000051, отделение Волгоград г. Волгоград, БИК 041806001, получатель УФК по Волгоградской области (Территориальное управление Федерального агенства по управлению государственным имуществом в Волгоградской области л/с05291А18490) ИНН 3444168900, КПП 344401001</p>
            <p class="lead">3. Опись представленных документов, подписанная претендентом или его уполномоченным представителем (примерная форма описи размещена в разделе «Документы»). </p>
            <p class="lead">4. Надлежащим образом оформленная доверенность на лицо, имеющее право действовать от имени претендента, если заявка подается представителем претендента. </p>
            <p class="lead">5. Физические лица предъявляют документ, удостоверяющий личность (оригинал и копию), а также дополнительно представляют нотариальное согласие супруга (и) на приобретение имущества (с указанием предмета сделки) или заявление об отсутствии зарегистрированного брака. </p>
            <p class="lead">6. Юридические лица дополнительно представляют: </p>
                
        </div>
    </div>
</div>
@endsection
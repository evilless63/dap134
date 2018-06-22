@extends('layouts.app-kontakty')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <div class="page-header-title">
                <h2 class="heading-title text-center">Контакты</h2>
            </div>

            <div class="features-wrap">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="featured-box featured-center">
                            <div class="featured-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="featured-content">
                                <h4>Электронная почта</h4>
                                <p class="lead"><strong>dap134@yandex.ru</strong></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="featured-box featured-center">
                            <div class="featured-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="featured-content">
                                <h4>Адрес</h4>
                                <p class="lead"><strong>Юридический адрес:</strong> Россия, 404110, Волгоградская обл., г. Волжский, пр. Ленина 46, Офис 15</p>
                                <p class="lead"><strong>Фактический адрес:</strong> 400038, г. Волгоград, ул. Волгоградская, д. 31, офис 3</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6">
                        <div class="featured-box featured-center">
                            <div class="featured-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="featured-content">
                                <h4>Телефон</h4>
                                <p class="lead"><strong>+7 (969) 658-62-88</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row text-left">
                <div class="col-md-6">
                    <h4 class="sub-title">Реквизиты и время работы</h4>
                    <p class="lead"><strong>Наименование:</strong> ООО "Департамент Аукционных Продаж"</p>
                    <p class="lead"><strong>ИНН:</strong> 3435133604</p>
                    <p class="lead"><strong>КПП:</strong> 343501001</p>

                    <p class="lead"><strong>Время работы:</strong> ПН-ПТ с 09:00 до 18:00</p>
                </div>
                <div class="col-md-6">
                    <h4 class="sub-title">Банковские реквизиты </h4>
                    <p class="lead"><strong>Банк получателя:</strong> ЮЖНЫЙ ФИЛИАЛ ПАО «ПРОМСВЯЗЬБАНК»</p>
                    <p class="lead"><strong>р/счет:</strong> 40702810401000030274</p>
                    <p class="lead"><strong>к/счет:</strong> 30101810100000000715</p>
                    <p class="lead"><strong>БИК:</strong> 041806715</p>
                </div>
            </div> 
            
        </div>
    </div>
</div>
@endsection
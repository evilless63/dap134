<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet">

    

    <!-- helium ui kit styles -->
    <link rel="stylesheet" href="{{ asset('css/plugs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugs/responsive.css') }}">

      <!-- Fonts icons -->
    <link rel="stylesheet" href="{{ asset('css/plugs/font-awesome.min.css') }}">

    <!-- common styles -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

</head>
<body>
    <!-- Page Wrapper Start -->
    <div class="wrapper">
        <div id="content" class="">
            
            <header>
                
                <!-- top menu start -->
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-md-3">
                                            <a class="navbar-brand" href="index.html"><img src="img/logo-2.png" alt=""></a>
                                        </div>
                                    
                                        <div class="col">
                                            <ul class="list-style warning-list pl-0">
                                                <li>
                                                    <i class="fa fa-mobile-phone"></i>+9 34476 3244
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i>dap134@yandex.ru
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-style warning-list pl-0">
                                                <li>
                                                    <i class="fa fa-mobile-phone"></i>ПН - ЧТ
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i>09:00 до 18:00
                                                </li>
                                            </ul>   
                                        </div>



                                        <div class="col-md-3">
                                            <ul class="list-style warning-list pl-0">
                                                <li class="courses" id="courseRub">
                                                    Курсы валют (рубли) на текущее время
                                                </li>
                                                <li class="courses" id="courseDol">
                                                    Курсы валют (доллары) на текущее время
                                                </li>
                                                <li class="courses" id="courseEur">
                                                    Курсы валют (евро) на текущее время
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top menu end -->

                <!-- sliders -->
                <div id="sliders">
                    <div class="full-width">
                    <!-- light slider -->
                    <div id="light-slider" class="carousel slide">
                        <div id="carousel-area">
                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-slider" data-slide-to="1"></li>
                            <li data-target="#carousel-slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/slider/bg-1.jpg') }}" alt="">
                                <div class="carousel-caption">
                                <h3 class="slide-title animated fadeInDown"><span class="text-primary">Helium </span> - Bootstrap 4 UI Kit</h3>
                                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/slider/bg-2.jpg') }}" alt="">
                                <div class="carousel-caption">
                                <h3 class="slide-title animated fadeInDown"><span class="text-primary">Cutting-edge</span> Features</h3>
                                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/slider/bg-3.jpg') }}" alt="">
                                <div class="carousel-caption">
                                <h3 class="slide-title animated fadeInDown"><span class="text-primary">100+ </span> UI Blocks & Components</h3>
                                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                                </div>
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                            <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                            <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- End sliders -->

                <!-- Begin navbar -->
                
                        
                            <nav class="navbar sticky-top navbar-toggleable-sm navbar-light bg-default">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="navbar-nav d-flex justify-content-center">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Продажа имущества</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Информационные сообщения</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Условия реализации</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Правила торгов</a>
                                                        <a class="dropdown-item" href="#">Реализация по договору</a>
                                                        <a class="dropdown-item" href="#">Образцы документов</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Нормативные акты</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Новости</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Контакты</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            </nav>
                        
                        
                <!-- End navbar -->
                
            </header>


            <main class="py-4">
                @yield('content')
            </main>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="heading-title text-center">Краткая контактная информация</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A29cac54784ad2bf361ff338c1c7b3d24451e2403faed1775831ce83de9d0cb7a&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                </div>

                <div class="col-md-6">
                    <div class="contact-info">
                        <address>
                                            <i class="fa fa-map-marker icons cyan-color contact-info-icon"></i>
                                            Г. Волжский, Пр. Ленина 46, Офис 15
                                        </address>
                        <div class="tel-info">
                            <a href="tel:1800452308"><i class="fa fa-mobile icons cyan-color contact-info-icon"></i>1800 452 308</a>
                        </div>
                        <a href="mailto:hello@spiritapp.com"><i class="fa fa-envelope-o icons cyan-color contact-info-icon"></i>dap134@yandex.ru</a>
                    </div>
                    
                    <h4 class="contact-info-title">Форма для связи</h4>
                    <form class="contact-form" data-toggle="validator">
                    <div class="row">
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-user"></i>
                            <input type="text" class="form-control" id="name" placeholder="Представьтесь" required data-error="Пожалуйста, укажите, как к Вам обращаться">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-envelope-o"></i>
                            <input type="email" class="form-control" id="email" placeholder="Email" required data-error="Пожалуйста, укажите Ваш email">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-pencil-square-o"></i>
                            <input type="text" class="form-control" id="subject" placeholder="Тема письма" required data-error="Пожалуйста, укажите тему письма">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                        <div class="form-group">
                            <textarea id="message" rows="4" placeholder="Message" required data-error="Пожалуйста, опишите Ваш вопрос"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="pull-left">
                        <div class="checkbox checkbox-primary space-bottom">
                            <label for="files"><span>Вы можете прикрепить документы: </span></label>
                            <label class="hide"><input type="file"></label>
                            <input id="file" type="file">
                        </div>
                        <div class="checkbox checkbox-primary space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input id="checkbox2" type="checkbox">
                            <label for="checkbox2"><span><a href="#">Принимаю соглашение о передачи данных</a></span></label>
                        </div>
                        </div>
                        <div class="pull-left">
                            <button type="submit" id="form-submit" class="btn btn-common btn-form-submit">Отправить</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                        
                        </div>
                    </div>
                    </form>
                </div>
                
                </div>
            </div>

            <!-- Footer Section -->
            <footer class="footer">

                <!-- Copyright -->
                <div id="copyright">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="copyright-text">ООО "Департамент Аукционных Продаж". Все права защищены. {{ date("Y") }} год.</a>
                        </p>
                    </div>
                    <div class="col-md-6  col-sm-6">
                        <ul class="nav nav-inline  justify-content-end ">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Карта сайта</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Политика обработки данных</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Copyright  End-->

            </footer>
            <!-- Footer Section End-->    

        </div>
        
    </div>
    <!-- Page Wrapper End -->
    <!-- helium ui kit scripts -->
    <script src="{{ asset('js/plugs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugs/tether.min.js') }}"></script>
    <script src="{{ asset('js/plugs/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugs/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/plugs/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/plugs/main.js') }}"></script>
    
</body>
</html>

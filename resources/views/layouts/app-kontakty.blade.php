<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Департамент Аукционных Продаж - @yield('title')</title>

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
                    @include('common.topmenu')
                <!-- top menu end -->

                <!-- sliders -->
                    @include('common.sliders')
                <!-- End sliders -->

                <!-- Begin navbar -->     
                    @include('common.nav')     
                <!-- End navbar -->
                
            </header>


            <main class="py-4">
                @yield('content')
            </main>
            
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A29cac54784ad2bf361ff338c1c7b3d24451e2403faed1775831ce83de9d0cb7a&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
                </div>

                <div class="col-md-6">
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
                            <textarea id="message" rows="4" placeholder="Текст письма" required data-error="Пожалуйста, опишите Ваш вопрос"></textarea>
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
                            <input id="checkbox2" type="checkbox" required>
                            <label for="checkbox2"><span><a href="{{ route('politic') }}">Принимаю соглашение о передачи данных</a></span></label>
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
                @include('common.footer')
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

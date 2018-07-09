<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Департамент Аукционных Продаж</title>

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

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} col-md-12 alert-dismissible fade show" style="" role="alert">
        {{ Session::get('alert-' . $msg) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
      @endif
    @endforeach
    @if (session()->has('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

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
                                            400038, г. Волгоград, ул. Волгоградская, д. 31, офис 3
                                        </address>
                        <div class="tel-info">
                            <a href="tel:1800452308"><i class="fa fa-mobile icons cyan-color contact-info-icon"></i>+7 (969) 658-62-88</a>
                        </div>
                        <a href="mailto:hello@spiritapp.com"><i class="fa fa-envelope-o icons cyan-color contact-info-icon"></i>dap134@yandex.ru</a>
                    </div>
                    
                    <h4 class="contact-info-title">Форма для связи</h4>
                    <form class="contact-form" data-toggle="validator" action="{{action('MailController@sendemail')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-user"></i>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Представьтесь" required data-error="Пожалуйста, укажите, как к Вам обращаться">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-envelope-o"></i>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required data-error="Пожалуйста, укажите Ваш email">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="form-group">
                            <i class="contact-icon fa fa-pencil-square-o"></i>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Тема письма" required data-error="Пожалуйста, укажите тему письма">
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" placeholder="Текст письма" required data-error="Пожалуйста, опишите Ваш вопрос"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="pull-left">
                        <div class="checkbox checkbox-primary space-bottom">
                            <label for="files"><span>Вы можете прикрепить документы: </span></label>
                            <input type="file" name="files[]" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*" multiple>
                        </div>
                        <div class="checkbox checkbox-primary space-bottom">
                            <label class="hide"><input type="checkbox"></label>
                            <input type="hidden" name="politic" value="0">
                            <input id="checkbox2" value="1" name="politic" type="checkbox" required>
                            <label for="checkbox2"><span><a href="{{ route('politic') }}">Принимаю соглашение об обработке данных</a></span></label>
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
                        
            <div class="mb-60"></div>

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

    <script>
    $.getJSON("https://www.cbr-xml-daily.ru/daily_json.js", function(data) {
        $('#usd_kurs').html('Курс  <i class="fa fa-eur" aria-hidden="true"></i>на текущее время: '+data.Valute.USD.Value.toFixed(2)+' <i class="fa fa-rub" aria-hidden="true"></i>');
    });

    $.getJSON("https://www.cbr-xml-daily.ru/daily_json.js", function(data) {
        $('#eur_kurs').html('Курс  <i class="fa fa-usd" aria-hidden="true"></i>на текущее время: '+data.Valute.EUR.Value.toFixed(2)+' <i class="fa fa-rub" aria-hidden="true"></i>');
    });
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter49521394 = new Ya.Metrika2({
                        id:49521394,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/49521394" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    
</body>
</html>
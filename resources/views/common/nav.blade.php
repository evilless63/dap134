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
                        <a class="nav-link" href="{{ route('index') }}">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodazha-imuschestva') }}">Продажа имущества</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informacionnye-soobshcheniya') }}">Информационные сообщения</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Условия реализации</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('pravila-torgov') }}">Правила торгов</a>
                            <a class="dropdown-item" href="{{ route('realizaciya-po-dogovoru') }}">Реализация по договору</a>
                            <a class="dropdown-item" href="{{ route('obrazci-dokumentov') }}">Образцы документов</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('normativnie-akti') }}">Нормативные акты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('PostController@index') }}">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontakty') }}">Контакты</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>            
    </div>
</nav>
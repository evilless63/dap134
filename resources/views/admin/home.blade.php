@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Панель управления</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-3">
                                <ul class="nav nav-tabs flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Управление документами</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#documents_create" role="tab">Добавить документ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#imushestvo" role="tab">Обновление списка имущества</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Управление новостями</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Просмотр сообщений</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane" id="documents" role="tabpanel">

                                    <table class="table table-hover-common">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Текущий файл</th>
                                                <th>Новый файл</th>
                                                <th>Наименование</th>
                                                <th>Активен</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($documents as $document)
                                            <tr>
                                                <form action="">
                                                    <td><a href="{{$document->file_path}}">{{$document->file_path}}</a></td>
                                                    <td><input type="file" class="form-control-file" id="exampleFormControlFile1"></td>
                                                    <td><input type="text" value="{{$document->title}}"></td>
                                                    <td><input type="checkbox" value="1" {{ $document->is_active == 1 ? 'checked' : ''}}></td>
                                                    <td><div class="btn std-btn btn-sm btn-common">Обновить</div></td>
                                                    <td><div class="btn std-btn btn-sm btn-common">Удалить</div></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    </div>
                                    <div class="tab-pane" id="documents_create" role="tabpanel">
                                        
                                        <form>
                                            <div class="form-group">
                                                <label for="documentCreateFile">Файл документа</label>
                                                <input type="file" class="form-control-file" id="documentCreateFile">
                                            </div>

                                            <div class="form-group">
                                                <label for="documentCreateFileTitle">Наименование документа не более 255 символов</label>
                                                <input type="text" class="form-control" id="documentCreateFileTitle" placeholder="Укажите наименование документа">
                                            </div>

                                            <div class="btn std-btn btn-sm btn-common">Создать</div>
                                        </form>

                                    </div>
                                    <div class="tab-pane" id="imushestvo" role="tabpanel">
                                        <form>
                                            <div class="form-group">
                                                <label for="documentCreateFileImush">Файл с имуществом</label>
                                                <input type="file" class="form-control-file" id="documentCreateFileImush">
                                            </div>

                                            <div class="btn std-btn btn-sm btn-common">Загрузить</div>
                                        </form>
                                    </div>
                                    <div class="tab-pane active" id="posts" role="tabpanel">
                                        <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective unwilling get.</p>
                                        <p>Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit our but.</p>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <p>Certainty listening no no behaviour existence assurance situation is. Because add why not esteems amiable him. Interested the unaffected mrs law friendship add principles. Indeed on people do merits to. Court heard which up above hoped grave do.</p>
                                        <p>death he at share alone. Yet outward the him compass hearted are tedious.</p>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

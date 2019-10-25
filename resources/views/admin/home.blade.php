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
                                        <a class="nav-link active" data-toggle="tab" href="#documents" role="tab">Управление документами</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#documents_create" role="tab">Добавить документ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#imushestvo" role="tab">Обновление списка имущества</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#posts" role="tab">Управление новостями</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Просмотр сообщений</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col">
                                <!-- Tab panes -->
                                <div class="tab-content ">
                                    <div class="tab-pane active " id="documents" role="tabpanel">

                                    <table class="table table-hover-common">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Текущий файл</th>
                                                <th>Новый файл</th>
                                                <th>Наименование</th>
                                                <th>Активен</th>
                                                <th>Категория</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($documents as $document)
                                            <tr>
                                                <form method="post" action="{{action('DocumentController@update', $document->id)}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="PATCH" />
                                                    <td><a href="/document_files/{{$document->file_path}}">{{$document->file_path}}</a></td>
                                                    <td><input type="file" name="file_path" class="form-control-file" id="exampleFormControlFile1"></td>
                                                    <td><input type="text" name="title" value="{{$document->title}}"></td>
                
                                                    <input type="hidden" name="is_active" value="0">
                                                    <td><input type="checkbox" name="is_active"  value="1" {{ $document->is_active == 1 ? 'checked' : ''}}></td>
                                                    <td>
                                                        <select name="category"> <!--Supplement an id here instead of using 'name'-->
                                                            <option value="0" {{ $document->category == 0 ? 'selected' : ''}}>Не выбрана</option>
                                                            <option value="1" {{ $document->category == 2 ? 'selected' : ''}}>Волгоград</option> 
                                                            <option value="2" {{ $document->category == 1 ? 'selected' : ''}}>Крым</option>
                                                        </select></td>
                                                    <td><button type="submit" class="btn std-btn btn-sm btn-common">Обновить</button></td>
                                                </form>
                                                <td>
                                                    <form action="{{action('DocumentController@destroy', $document->id)}}" method="post">
                                                            {{csrf_field()}}
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn std-btn btn-sm btn-common">
                                                                Удалить
                                                            </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    </div>
                                    <div class="tab-pane" id="documents_create" role="tabpanel">
                                        
                                    <form method="post" action="{{action('DocumentController@store')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="documentCreateFile">Файл документа</label>
                                            <input type="file" name="file_path" class="form-control-file" id="documentCreateFile">
                                        </div>

                                        <div class="form-group">
                                            <label for="documentCreateFileTitle">Наименование документа не более 255 символов</label>
                                            <input type="text" name="title" class="form-control" id="documentCreateFileTitle" placeholder="Укажите наименование документа">
                                        </div>

                                        <div class="form-group">
                                            <label for="documentCreateFileCategory">Категория размещения:</label>
                                            <select name="category" id="documentCreateFileCategory"> <!--Supplement an id here instead of using 'name'-->
                                                <option value="0" {{ $document->category == 0 ? 'selected' : ''}}>Не выбрана</option>
                                                <option value="1" {{ $document->category == 2 ? 'selected' : ''}}>Волгоград</option> 
                                                <option value="2" {{ $document->category == 1 ? 'selected' : ''}}>Крым</option>
                                            </select>
                                        </div>
                                        

                                        <button type="submit" class="btn std-btn btn-sm btn-common" id="">Создать</button>
                                    </form>

                                    </div>
                                    <div class="tab-pane" id="imushestvo" role="tabpanel">
                                        <form method="post" action="{{action('DocumentController@updatelist')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="documentCreateFileImush">Файл с имуществом</label>
                                                <input type="file" name="file_list" class="form-control-file" id="documentCreateFileImush">
                                            </div>

                                            <button type="submit" class="btn std-btn btn-sm btn-common" id="">Загрузить</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="posts" role="tabpanel">
                                    <a href="{{action('PostController@create')}}" class="btn std-btn btn-sm btn-common">Создать новость</a>
                                    <table class="table table-hover-common">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Изображение</th>
                                                <th>Заголовок</th>
                                                <th>Начало новости</th>
                                                <th>Обновлено</th>
                                                <th>Активен</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($posts as $post)
                                            <tr>
                                                <form method="post" action="{{action('PostController@update', $post->id)}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="PATCH" />
                                                    <td><img src="{{ asset('posts_files/'. $post->image_path) }}" style="max-width: 75px;"></td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$post->description_preview}}</td>
                                                    <td>{{$post->updated_at}}</td>
                                                    <input type="hidden" name="is_active" value="0">
                                                    <td><input type="checkbox" name="is_active"  value="1" {{ $post->is_active == 1 ? 'checked' : ''}}></td>
                                                    <td><button type="submit" class="btn std-btn btn-sm btn-common">Обновить</button></td>
                                                    <td><a href="{{action('PostController@edit', $post->id)}}" class="btn std-btn btn-sm btn-common">Редактировать</a></td>
                                                </form>
                                                <td>
                                                    <form action="{{action('PostController@destroy', $post->id)}}" method="post">
                                                            {{csrf_field()}}
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn std-btn btn-sm btn-common">
                                                                Удалить
                                                            </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <div class="row">
                                        
                                        @foreach($messages as $message)
                                        <div class="col-md-6">
                                            <form action="{{action('MailController@destroy', $message->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <h4><strong>Тема:</strong> {{$message->subject}}</h4>

                                                <p><strong>Почта:</strong> {{$message->email}}</p>
                                                <p><strong>Имя:</strong> {{$message->name}}</p>

                                                <p><strong>Сообщение:</strong> {{$message->text}}</p>
                                                <button type="submit" class="btn std-btn btn-sm btn-common" id="">Удалить</button>
                                                <div style="margin-top: 5px; border-bottom:1px solid #000;"></div>
                                            </form>   
                                        </div>

                                        @if(is_int($loop->iteration / 2))
                                            </div>
                                            <div class="row">
                                        @endif

                                        @endforeach

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
</div>
@endsection

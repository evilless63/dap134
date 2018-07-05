@extends('admin.layouts.app')

@section('content')
<div class="container">
<h1>Создание новости</h1>

<form class="contact-form" method="post" action="{{action('PostController@store')}}" enctype="multipart/form-data">
    <div class="row">
        {{csrf_field()}}
        <div class="col-md-12">

            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" name="title" id="title" required />
            </div>
            <br>


            <div class="form-group">
                <label for="editorPostTextarea">Текст:</label>
                <textarea name="description" id="editorPostTextarea" required>

                </textarea>
            </div>

            </div> 

    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-md-12">
            <h4>Изображение новости:</h4>
            <input type="file" name="image_path" accept="image/*" required>
        </div>

    </div>
    <br>
    <br>
    <br>
    <div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_keys">Мета ключи (необязательно) :</label>
            <input type="text" name="meta_keys" id="meta_keys" required />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
                <label for="meta_description">Мета описание (необязательно) :</label>
                <input type="text" name="meta_description" id="meta_description" required />
        </div>
    </div>

    </div>

    <br>
    <br>
    <br>
    <div class="row">
    <div class="col-md-12">
            <div class="pull-left">
                <button type="submit" class="btn std-btn btn-sm btn-common">Создать</button>
            </div>
        </div>
        </div>
    </div>
</form>

</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editorPostTextarea' );
</script>

@endsection

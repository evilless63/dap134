@extends('admin.layouts.app')

@section('content')
<div class="container">
<h1>Редактирование новости</h1>



<form class="contact-form" method="post" action="{{action('PostController@update', $post->id)}}" enctype="multipart/form-data">
    <div class="row">
        {{csrf_field()}}
        <div class="col-md-12">

            <input name="_method" type="hidden" value="PATCH" />

            <div class="form-group">
                <label for="title">Заголовок:</label>
                <input type="text" name="title" value="{{$post->title}}" id="title" required />
            </div>
            <br>


            <div class="form-group">
                <label for="editorPostTextarea">Текст:</label>
                <textarea name="description" id="editorPostTextarea" required>
                    {!!$post->description!!}
                </textarea>
            </div>

            </div> 

    </div>
    <br>
    <br>

    <div class="row">

        <div class="col-md-6">
            <h4>Текущее изображение новости:</h4>
            <img src="{{ asset('posts_files/'.$post->image_path) }}">
        </div>
        <div class="col-md-6">
            <h4>Новое изображение новости:</h4>
            <input type="file" name="image_path" accept="image/*">
        </div>

    </div>
    <br>
    <br>
    <br>
    <div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="meta_keys">Мета ключи (необязательно) :</label>
            <input type="text" name="meta_keys" value="{{$post->meta_keys}}" id="meta_keys" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
                <label for="meta_description">Мета описание (необязательно) :</label>
                <input type="text" name="meta_description" value="{{$post->meta_description}}" id="meta_description" />
        </div>
    </div>

    </div>

    <br>
    <br>
    <br>

    <div class="row">
    <div class="col-md-12">
            <div class="pull-left">
                <button type="submit" class="btn std-btn btn-sm btn-common">Обновить</button>
            </div>
        </div>
        </div>
    </div>
</form>

</div>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.on( 'dialogDefinition', function( ev ) {
        var dialogName = ev.data.name;
        var dialogDefinition = ev.data.definition;

        if ( dialogName == 'table' ) {
            var info = dialogDefinition.getContents( 'info' );

            info.get( 'txtWidth' )[ 'default' ] = '100%';       // Set default width to 100%
            info.get( 'txtBorder' )[ 'default' ] = '1';         // Set default border to 0
        }
    });

    CKEDITOR.replace( 'editorPostTextarea'
    , {
    on: {
        instanceReady: function() {
            this.dataProcessor.htmlFilter.addRules( {
                elements: {
                    table: function( el ) {
                        // Add an attribute.
                        
                        el.attributes.style = '';
                        el.attributes.width = '';
                        // Add some class.
                        el.addClass( 'table' );
                        el.addClass( 'table-hover-common' );
                    },

                    tr: function( el ) {
                        // Add an attribute.
                        
                        el.attributes.style = '';
                        el.attributes.width = '';
                        // Add some class.
                    },

                    td: function( el ) {
                        // Add an attribute.
                        
                        el.attributes.style = '';
                        el.attributes.width = '';
                        // Add some class.
                    },

                    span: function( el ) {
                        // Add an attribute.
                        
                        el.attributes.style = '';
                        // Add some class.
                    }
                }
            } );            
        }
    }
}  );
</script>

@endsection
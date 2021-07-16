@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Servicio</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{  session('info')}}</strong>
</div>    
@endif
<div class="card">
    <div class="card-body">
   {!!Form::model($service,['route'=>['admin.services.update',$service],'autocomplete'=>'off','files'=>true,'method'=>'put'])!!}
  
  @include('admin.services.partials.form')
   {!!Form::submit('Actualizar Servicio' ,['class'=>'btn btn-primary'])!!}

   {!!Form::close([])!!}
    </div>
</div>
    
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<style>
  .image-wrapper{
    position: relative;
    padding-bottom: 50.25%;
  }
  .image-wrapper img{
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
  }
</style>
@stop


@section('js')
<script src={{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}>  </script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<script >
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );


//cambiar la imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }
</script>
@stop
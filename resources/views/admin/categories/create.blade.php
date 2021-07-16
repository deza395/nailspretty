@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
   {!!Form::open(['route'=>'admin.categories.store'])!!}

   <div class="form-group">
    {!!Form::label('name','Nombre',)!!}
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'ingrese nombre de la categoria'])!!}

    @error('name')
    <span class="danger" > {{$message}}</span>
    @enderror

   </div>

   <div class="form-group">
    {!!Form::label('slug','Slug',)!!}
    {!!Form::text('slug',null,['class'=>'form-control', 'placeholder'=>'slug','readonly'])!!}
    @error('slug')
    <span class="danger" > {{$message}}</span>
    @enderror
   </div> 
   {!!Form::submit('Crear categoría' ,['class'=>'btn btn-primary'])!!}

   {!!Form::close([])!!}
    </div>
</div>
   
@stop

@section('js')
    <script src={{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}>  </script>

    <script >
        $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
    </script>
@stop
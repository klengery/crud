@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Create Items</h1>
@stop

@section('content')

<form action="/items" method="POST">
   @csrf
   <div class="mt-3">
       <label for="" class="form-label">Código</label>
       <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
   </div>

   <div class="mt-3">
       <label for="" class="form-label">Descripción</label>
       <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
   </div>

   <div class="mt-3">
       <label for="" class="form-label">Cantidad</label>
       <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
   </div>

   <div class="mt-3">
       <label for="" class="form-label">Precio</label>
       <input id="precio" name="precio" type="number" class="form-control" tabindex="4">
   </div>

   <a href="/items" class="btn btn-secondary" tabindex="5">Cancelar</a>
   <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Edit Items</h1>
@stop

@section('content')
<form action="/items/{{$item->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$item->codigo}}">
    </div>

    <div class="mt-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$item->descripcion}}">
    </div>

    <div class="mt-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$item->cantidad}}">
    </div>

    <div class="mt-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" class="form-control" value="{{$item->precio}}">
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
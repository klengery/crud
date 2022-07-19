@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="articulos/create" class="btn btn-primary mb-4">Crear</a>

<table id="articulos" class="table table-striped table-bordered shadow-Ig mt-4" style="width:100%">
    <thead class="bg-primary text-white">
       <tr>
           <th scope="col">ID</th>
           <th scope="col">Código</th>
           <th scope="col">Descripcion</th>
           <th scope="col">Cantidad</th>
           <th scope="col">Precio</th>
           <th scope="col">Editar/Borrar</th>
       </tr>
    </thead>

    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>
                <form action="{{route('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

       <script>
         $(document).ready(function () {
         $('#articulos').DataTable({
            "lengthMenu":[[5,10,50-1], [5,10,50,"All"]]
         });       
         });
       </script>
@stop
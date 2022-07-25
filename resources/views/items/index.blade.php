@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a href="items/create" class="btn btn-primary mb-4">Crear</a>

<table id="items" class="table table-striped table-bordered shadow-Ig mt-4" style="width:100%">
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
        @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->codigo}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->cantidad}}</td>
            <td>{{$item->precio}}</td>
            <td>
                <form action="{{route('items.destroy',$item->id)}}" method="POST">
                <a href="/items/{{ $item->id}}/edit" class="btn btn-info">Editar</a>
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
         $('#items').DataTable({
            "lengthMenu":[[5,10,50-1], [5,10,50,"All"]]
         });       
         });
       </script>
@stop
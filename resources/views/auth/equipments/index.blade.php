@extends('layouts.app2')

@section('content')
<div class="container">
    <br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align:center;">
        <thead>
        <tr>
            <th>id</th>
            <th>Num de Ingreso</th>
            <th>Almacen</th>
            <th>Movimiento</th>
            <th>Codigo</th>
            <th>Serie</th>
            <th>Descripcion</th>
            <th>Codigo Almacen</th>
            <th>Codigo Proyecto</th>
            <th>Provedor</th>
            <th>Costo</th>
            <th>Editar</th>
            <th>Borrar</th>

        </tr>
        </thead>

        <tbody>
        @foreach($equipments as $equipment)
            <tr>
                <td>{{ $equipment->id }}</td>
                <td>{{ $equipment->num_ingreso }}</td>
                <td>{{ $equipment->alamcen }}</td>
                <td>{{ $equipment->movimiento }}</td>
                <td>{{ $equipment->codigo }}</td>
                <td>{{ $equipment->serie }}</td>
                <td>{{ $equipment->descripcion }}</td>
                <td>{{ $equipment->cod_almacen }}</td>
                <td>{{ $equipment->cod_proyecto }}</td>
                <td>{{ $equipment->proveedor }}</td>
                <td>{{ $equipment->costo }}</td>


                <td>
                    <a href="/equipments/{{ $equipment->id }}/edit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                        </span>
                        <span class="text">Editar</span>
                    </a>

                </td>


                <td>
                    <form action="/equipments/{{ $equipment->id }}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                            <span class="text">Eliminar</span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection

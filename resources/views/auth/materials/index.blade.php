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
            <th>Descripcion</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Provedor</th>
            <th>Costo</th>
            <th>Editar</th>
            <th>Borrar</th>

        </tr>
        </thead>

        <tbody>
        @foreach($materials as $material)
            <tr>
                <td>{{ $material->id }}</td>
                <td>{{ $material->num_ingreso }}</td>
                <td>{{ $material->alamcen }}</td>
                <td>{{ $material->movimiento }}</td>
                <td>{{ $material->codigo }}</td>
                <td>{{ $material->descipcion }}</td>
                <td>{{ $material->unidad }}</td>
                <td>{{ $material->cantidad }}</td>
                <td>{{ $material->proveedor }}</td>
                <td>{{ $material->costo }}</td>


                <td>
                    <a href="/materials/{{ $material->id }}/edit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                        </span>
                        <span class="text">Editar</span>
                    </a>

                </td>


                <td>
                    <form action="/materials/{{ $material->id }}" method="post">
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

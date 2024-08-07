@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Profesores</h1>
    <a href="{{ route('profesores.create') }}" class="btn btn-primary">Agregar Profesor</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profesores as $profesor)
        <tr>
            <td>{{ $profesor->id }}</td>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->apellido }}</td>
            <td>{{ $profesor->email }}</td>
            <td>
                <a href="{{ route('profesores.edit', $profesor) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('profesores.destroy', $profesor) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('home')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h2>Lista de Usuarios</h2>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo
            </button>
            <br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)

                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $usuario->id }}">
                                        Editar
                                    </button>
                                    @if (Auth::user()->name == $usuario->name)
                                        <button type="button" class="btn btn-danger" disabled>
                                            Eliminar
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $usuario->id }}">
                                            Eliminar
                                        </button>
                                        
                                    @endif
                                </td>
                            </tr>
                            @include('usuario.info')
                        @endforeach

                    </tbody>
                </table>
            </div>
            
            @include('usuario.create')
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Listado de categorias
                    </div>

                    <div class="card-body">

                        <a href="{{ route('category.create.index') }}">
                            <button class="btn btn-primary">
                                Agregar nueva categoria
                            </button>
                        </a>
                        <br>
                        <br>


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Icono</th>
                                <th scope="col">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>CLUB POTATOES</td>
                                <td>Papas a la francesa, papas en casco, queso americano, beicon, sour crearm</td>
                                <td>Comida</td>
                                <td>
                                    <a>
                                        <button class="btn btn-default">
                                            Editar
                                        </button>
                                    </a>
                                    <a>
                                        <button class="btn btn-danger">
                                            Eliminar
                                        </button>
                                    </a>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Categoria de productos</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('category') }}">Categoria</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Listado de categorias</h3>
                Para agregar una nueva categoria presione <a href="{{ route('category.create.index') }}">AQUÍ</a>. Al
                momento de actualizar una categoria podrá ver el listado de productos asociados a esa categoria.
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
                        <td align="center"><i class="fa fa-cutlery" aria-hidden="true"></i></td>
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
                    <tr>
                        <td>CLUB POTATOES</td>
                        <td>Papas a la francesa, papas en casco, queso americano, beicon, sour crearm</td>
                        <td align="center"><i class="fa fa-beer" aria-hidden="true"></i></td>
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

@endsection
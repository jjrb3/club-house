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

                @if($categories->count())

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

                        @foreach($categories as $category)

                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td align="center"><i class="fa {{ $category->icon_code }}" aria-hidden="true"></i></td>
                                <td width="20%">
                                    <a>
                                        <button class="btn btn-default"
                                                onclick="location.assign('{{
                                                route('category.update.index', [
                                                    'id' => $category->id
                                                ])
                                                }}')">
                                            Editar
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger" onclick="verification({{ $category->id }});">
                                        Eliminar
                                    </button>

                                    <form id="delete-form-{{ $category->id }}" method="get"
                                          action="{{ route('category.delete', ['id' => $category->id]) }}">
                                    </form>
                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>

                    {{ $categories->links() }}
                @else

                    <div class="alert alert-warning">
                        <strong>Alerta!</strong> No se encontraron categorias.
                    </div>

                @endif

            </div>
        </div>
    </div>

    <script>
        function verification(id) {

            if (confirm('¿Desea eliminar esta categoria? Al hacerlo borrará todos los productos que tiene y no podra recuperar la información.')) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>

@endsection
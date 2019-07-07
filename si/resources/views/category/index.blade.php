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

                @if($categories)

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
                                                onclick="location.assign('{{ route('category.update.index') }}')">
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

                        @endforeach


                        </tbody>
                    </table>

                    {{ $categories->links() }}
                @endif

            </div>
        </div>
    </div>

@endsection
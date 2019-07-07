@extends('layouts.admin')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Categorias de productos</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('category') }}">Categorias</a></li>
                <li class="active">Agregar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">

                @if($category)

                    <h3 class="box-title">Actualizar categoria</h3>

                    Recuerde llenar todos los campos obligatorios <span class="text-danger">(*)</span>.
                    <br>
                    <br>
                    <form action="{{ route('category.update') }}" method="post">

                        @csrf

                        <input type="hidden" name="id" value="{{ $category->id }}">
                        <div class="form-group">
                            <label for="email">Nombre. <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Descripción.</label>
                            <input type="text" class="form-control" name="description"
                                   value="{{ $category->description }}">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Icono. <span class="text-danger">(*)</span></label>
                            <select class="form-control" name="icon_id">

                                @foreach($icons as $icon)

                                    <option value="{{ $icon->id }}" @if($icon->id === $category->icon_id) selected @endif>

                                        @if($icon->name === 'fa-beer')
                                            Bebidas
                                        @else
                                            Comida
                                        @endif

                                    </option>

                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                @else
                    <div class="alert alert-warning">
                        <strong>Alerta!</strong> No se encontraron datos para esta categoria. Para volver a la página
                        anterior presione <a href="{{ url()->previous() }}">AQUI</a>.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
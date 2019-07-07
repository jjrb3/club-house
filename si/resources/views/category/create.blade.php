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
                <h3 class="box-title">Agregar nueva categoria</h3>

                Recuerde llenar todos los campos obligatorios <span class="text-danger">(*)</span>.
                <br>
                <br>
                <form action="{{ route('category.create') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="email">Nombre. <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Descripción.</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Icono. <span class="text-danger">(*)</span></label>
                        <select class="form-control" name="icon_id">

                            @foreach($icons as $icon)

                                <option value="{{ $icon->id }}">

                                    @if($icon->name === 'fa-beer')
                                        Bebidas
                                    @else
                                        Comida
                                    @endif

                                </option>

                            @endforeach

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
                <br>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
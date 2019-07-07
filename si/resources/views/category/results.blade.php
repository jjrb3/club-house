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

            @if(!$category)
                <div class="alert alert-danger">
                    <strong>Error!</strong> Se presentaron problemas al ejecutar la acción. Para volver a intentarlo
                    presione <a href="{{ url()->previous() }}">AQUI</a>.
                </div>
            @else
                <div class="alert alert-success">
                    <strong>Completado!</strong> Se guardaron los datos correctamente. Para volver a la página anterior
                    presione <a href="{{ url()->previous() }}">AQUI</a>.
                </div>
            @endif

        </div>
    </div>
@endsection
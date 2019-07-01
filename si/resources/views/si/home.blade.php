@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('category') }}">Categoría</a>
                </div>

                <div class="card-body">

                    En esta sesión podras crear categorias, productos y agregar detalle de los productos.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

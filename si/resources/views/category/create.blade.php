@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Agregar nueva categoría
                    </div>

                    <div class="card-body">

                        <form action="{{ route('category.create') }}" method="post">

                            @csrf

                            <div class="form-group">
                                <label for="email">Nombre:</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Descripción:</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Icono:</label>
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
                        <a href="{{ route('category') }}">
                            <button type="submit" class="btn btn-default">Volver</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
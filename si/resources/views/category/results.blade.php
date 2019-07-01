@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if(!$category)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Se presentaron problemas al ejecutar la acción. Para volver a intentarlo
                        presione <a href="{{ url()->previous() }}">AQUI</a>.
                    </div>
                @else
                    <div class="alert alert-success">
                        <strong>Completado!</strong> Se guardaron los datos correctamenet. Para volver a la pagina anterior
                        presione <a href="{{ url()->previous() }}">AQUI</a>.
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
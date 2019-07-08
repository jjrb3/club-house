@extends('layouts.admin')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Productos de productos</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('category') }}">Categorias</a></li>
                <li><a href="{{ route('category.update.index', ['id' => $category_id]) }}">Productos</a></li>
                <li class="active">Agregar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Actualizar producto</h3>

                Recuerde llenar todos los campos obligatorios <span class="text-danger">(*)</span>. No debe colocar
                puntos ni comas en el precio.
                <br>
                <br>
                <form action="{{ route('product.update') }}" method="post">

                    @csrf

                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="category_product_id" value="{{ $category_id }}">
                    <div class="form-group">
                        <label for="email">Nombre. <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Descripción.</label>
                        <input type="text" class="form-control" value="{{ $product->description }}" name="description">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Precio. <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" value="{{ $product->price }}" name="price">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Tamaño grande. </label>
                        <input type="text" class="form-control" value="{{ $product->big_size }}" name="big_size">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tamaño mediano. </label>
                        <input type="text" class="form-control" value="{{ $product->medium_size }}" name="medium_size">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tamaño pequeño. </label>
                        <input type="text" class="form-control" value="{{ $product->small_size }}" name="small_size">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
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
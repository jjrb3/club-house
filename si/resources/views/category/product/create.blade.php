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
                <h3 class="box-title">Agregar nuevo producto</h3>

                Recuerde llenar todos los campos obligatorios <span class="text-danger">(*)</span>. Si no quiere colocar
                precio debe dejar por default 0.
                <br>
                <br>
                <form action="{{ route('product.create') }}" method="post">

                    @csrf

                    <input type="hidden" name="category_product_id" value="{{ $category_id }}">
                    <div class="form-group">
                        <label for="email">Nombre. <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Descripción.</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Precio. <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" name="price" value="0">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tamaño grande. </label>
                        <input type="text" class="form-control" name="big_size" placeholder="30000">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tamaño mediano. </label>
                        <input type="text" class="form-control" name="medium_size" placeholder="30000">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tamaño pequeño. </label>
                        <input type="text" class="form-control" name="small_size" placeholder="30000">
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
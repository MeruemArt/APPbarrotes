@extends('layouts.argon')

@section('content')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Nuevo</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('productos.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-circle-left"></i> Volver</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="name">Nombre</label>
                                        <input type="text" id="" class="form-control" name="nombre" placeholder="Nombre..." value="">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="valor_E">Valor Entrada</label>
                                        <input type="text" id="" name="valor_E" class="form-control" placeholder="Precio de Entrada...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nit">Codigo Producto</label>
                                        <input type="text" id="" name="id" class="form-control" placeholder="Codigo...">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="valor_S">Precio de Venta</label>
                                        <input type="text" id="" name="valor_S" class="form-control" placeholder="Precio de Venta...">
                                    </div>


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
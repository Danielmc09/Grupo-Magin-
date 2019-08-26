@extends('layouts.layout')
@section('title','Crear')
@section('content')
<div class="row">
        <div class="col-lg-12">
           @include('includes.form-error')
           @include('includes.mensaje') 
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h1 class="text-center text-info">Crear Medicamentos</h1>
                </div>
                <form action="{{Route('medicamentos.store')}}" method="POST">
                   @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control select2" style="width: 100%;" value="{{old('nombre')}}">
                                </div>
                                <div class="form-group">
                                    <label>Proveedor</label>
                                    <input type="text" name="proveedor" class="form-control select2" style="width: 100%;" value="{{old('proveedor')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Laboratorio</label>
                                    <input type="text" name="laboratorio" class="form-control select2" style="width: 100%;" value="{{old('laboratorio')}}">
                                </div>
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="number" name="stock" class="form-control select2" style="width: 100%;" value="{{old('stock')}}">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            @include('includes.boton-crear')
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>

@endsection
@extends('layouts.layout')
@section('title','Listar')
@section('scripts')
<script src="{{asset("assets/pages/index.js")}}" type="text/javascript"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
            @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Listado de medicamentos</h1>
                <div class="box-tools pull-right">
                    <a href="{{Route('medicamentos.create')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped" id="tabla-data"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Laboratorio</th>
                            <th>Stock</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($m as $me) 
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$me->nombre}}</td>
                            <td>{{$me->proveedor}}</td>
                            <td>{{$me->laboratorio}}</td>
                            <td>{{$me->stock}}</td>
                            <td>
                                <a href="{{Route('medicamentos.edit',$me->id)}}" class="btn-accion-tabla" title="Editar este registro"><i class="fa fa-fw fa-pencil"></i></a>
                                <form action="{{Route('medicamentos.destroy',$me->id)}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection
@extends('layouts.layout')
@section('title','Listado')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Listado de medicamentos</h1>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped"> 
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
                            <td></td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection
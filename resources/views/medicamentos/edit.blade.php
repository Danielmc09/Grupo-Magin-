@extends('layouts.layout')
@section('title','Editar')
@section('scripts')
<script src="{{asset("assets/pages/crear.js")}}" type="text/javascript"></script>
@endsection
@section('content')
<div class="row">
        <div class="col-lg-12">
           @include('includes.form-error')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h1 class="text-center text-info">Editar Medicamentos</h1>
                    <div class="box-tools pull-right">
                        <a href="{{Route('medicamentos.index')}}" class="btn btn-block btn-info btn-sm">
                            <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                        </a>
                    </div>
                </div>
                <form action="{{Route('medicamentos.update',$m->id)}}" id="form-general" method="POST">
                   @csrf 
                   @method('put')
                    <div class="box-body">
                            @include('includes.form')
                    </div>     
                        <div class="box-footer">
                            @include('includes.boton-editar')
                        </div>
                </form>
            </div>
        </div> 
    </div>
@endsection
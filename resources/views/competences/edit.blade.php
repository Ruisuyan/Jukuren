@extends('layouts.app')
@section('title', 'Competencias')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Editar Competencia</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Información</h3>
            </div>
            <div class="panel-body">
             {{Form::open(['route' => ['competencia.update',$competence->id],'class' => ' form-horizontal','method' => 'put'])}}
            
                <div class="form-group">
                    {{Form::label('Codigo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::text('codigo',$competence->codigo,['class'=>'form-control', 'required', 'maxlength' => 6])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::text('nombre',$competence->nombre,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Descripcion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('descripcion',$competence->descripcion,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                        <a class="btn btn-default pull-right" href="{{ route('competencia.index') }}">Cancelar</a>
                    </div>
                </div>

            {{Form::close()}}
            </div>  
        </div>
    </div>
</div>
@endsection
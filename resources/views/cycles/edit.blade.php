@extends('layouts.app')
@section('title', 'Ciclos')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nuevo Ciclo</h3>
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
            {{Form::open(['route' => ['ciclo.update',$cycle->id],'class' => ' form-horizontal','method' => 'put'])}}  
                <div class="form-group">
                    {{Form::label('Año: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::number('anho',$cycle->anho,['class'=>'form-control', 'required','min' => 1970, 'max' => 2077])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Periodo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::number('periodo',$cycle->periodo,['class'=>'form-control', 'required','min' => 0, 'max' => 2])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::date('fechainicio',$cycle->fechainicio,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::date('fechafin',$cycle->fechafin,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Estado: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::select('estado',[1 => 'Activo',2 => 'Proximo',3 => 'Culminado'],$cycle->estado,['placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                        <a class="btn btn-default pull-right" href="{{ route('ciclo.index') }}">Cancelar</a>
                    </div>
                </div>
            {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection
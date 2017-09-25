@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nueva Evaluacion</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="clearfix"></div>
            </div>
            {{Form::open(['route' => 'evaluaciones.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="form-group">
                {{Form::label('Titulo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="titulo" id="titulo" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Descripcion',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="descripcion" id="descripcion" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="date" name="fecha" id="fecha" value=""/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{--  {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}  --}}
                    <a class="btn btn-default pull-right" href="{{ route('competencias.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}

        </div>
    </div>
</div>
@endsection
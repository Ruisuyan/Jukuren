@extends('layouts.app')
@section('title', 'Competencias')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nueva Pregunta</h3>
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
             {{Form::open(['route' => 'pregunta.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
                <div class="form-group">
                    {{Form::label('Pregunta: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('descripcion',null,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Duracion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::number('tiempo',null,['class'=>'form-control', 'required'])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Puntaje: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::number('puntaje',null,['class'=>'form-control', 'required', 'step' => 0.1])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">						
                        <div class="radio">									
                            <label><input type="radio" value="1" name="tipo" checked > Abierta </label>
                            <i class="fa fa-pencil-square-o fa-2x" title="Abierta" aria-hidden="true"></i>
                        </div>
                        <div class="radio">
                            <label><input type="radio" value="2" name="tipo" >Cerrada </label>
                            <i class="fa fa-list-ul fa-2x" title="Cerrada" aria-hidden="true"></i>
                        </div>						
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
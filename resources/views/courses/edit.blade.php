@extends('layouts.app')
@section('title', 'Cursos')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nuevo Curso</h3>
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
                    {{Form::open(['route' => ['curso.update',$course->id],'class' => ' form-horizontal','method' => 'put'])}}                        
                        <div class="form-group">
                            {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                            <div class="col-md-4">
                                {{Form::text('codigo',$course->codigo,['class'=>'form-control', 'required', 'maxlength' => 6])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Nombre',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                            <div class="col-md-4">
                                {{Form::text('nombre',$course->nombre,['class'=>'form-control', 'required', 'maxlength' => 50])}}                    
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Descripcion',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                            <div class="col-md-4">
                                {{Form::textarea('descripcion',$course->descripcion,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                            </div>
                        </div>
                        <div class="form-group">
                            {{Form::label('Ciclo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                            <div class="col-md-4">
                                {{Form::number('cicloCurso',$course->ciclo,['class'=>'form-control', 'required'])}}
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                                <a class="btn btn-default pull-right" href="{{ route('curso.index') }}">Cancelar</a>
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
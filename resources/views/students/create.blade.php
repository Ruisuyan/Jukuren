@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nuevo Alumno</h3>
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
            {{Form::open(['route' => 'alumno.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',null,['class'=>'form-control', 'required', 'maxlength' => 8])}}                    
                </div>
            </div>

            <div class="form-group">
                {{Form::label('DNI',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('dni',null,['class'=>'form-control', 'required', 'maxlength' => 8])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombres',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoPaterno',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoMaterno',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Correo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('correo',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('telefono',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('alumno.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nuevo Docente</h3>
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
            {{Form::open(['route' => 'docentes.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="codigo" id="codigo" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="nombres" id="nombres" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="apellidoPaterno" id="apellidoPaterno" value=""/>
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="apellidoMaterno" id="apellidoMaterno" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Email',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="email" id="email" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Oficina',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="oficina" id="oficina" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="text" name="telefono" id="telefono" value=""/>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('¿Es docente a tiempo completo?',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <input class="form-control" type="checkbox" name="tiempoCompleto" id="tiempoCompleto" value=""/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('docentes.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}

        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Docentes')
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
            {{Form::open(['route' => 'docente.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',null,['class'=>'form-control', 'required', 'maxlength' => 8])}} 
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
                {{Form::label('Email',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::email('email',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Oficina',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('oficina',null,['class'=>'form-control', 'required', 'maxlength' => 8])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('telefono',null,['class'=>'form-control', 'required', 'maxlength' => 9])}}
                </div>
            </div>

            {{--  <div class="form-group">
                {{Form::label('¿Es docente a tiempo completo?',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::checkbox('tiempoCompleto',1, false,['class'=>'form-control'])}}
                </div>
            </div>  --}}

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('docente.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}

        </div>
    </div>
</div>
@endsection
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
            {{Form::open(['class' => ' form-horizontal'])}}
            
            <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',$teacher->codigo,['class'=>'form-control', 'readonly', 'maxlength' => 8])}} 
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombres',$teacher->nombres,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}                    
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoPaterno',$teacher->apellidoPaterno,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoMaterno',$teacher->apellidoMaterno,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Email',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::email('email',$teacher->email,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Oficina',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('oficina',$teacher->oficina,['class'=>'form-control', 'readonly', 'maxlength' => 8])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('telefono',$teacher->telefono,['class'=>'form-control', 'readonly', 'maxlength' => 9])}}
                </div>
            </div>

             <div class="form-group">
                {{Form::label('Curso: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::text('curso',$courses,['id' => 'courseOfTeacher','class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">                    
                    <a class="btn btn-success pull-right" href="{{ route('docente.index') }}">Regresar</a>
                </div>
            </div>

            {{Form::close()}}

        </div>
    </div>
</div>
@endsection
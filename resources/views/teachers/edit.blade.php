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
            {{Form::open(['route' => ['docente.update',$teacher->id],'class' => ' form-horizontal','method' => 'put'])}}
            
            <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',$teacher->codigo,['class'=>'form-control', 'required', 'maxlength' => 8])}} 
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombres',$teacher->nombres,['class'=>'form-control', 'required', 'maxlength' => 50])}}                    
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoPaterno',$teacher->apellidoPaterno,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('apellidoMaterno',$teacher->apellidoMaterno,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Email',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::email('email',$teacher->email,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Oficina',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('oficina',$teacher->oficina,['class'=>'form-control', 'required', 'maxlength' => 8])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('telefono',$teacher->telefono,['class'=>'form-control', 'required', 'maxlength' => 9])}}
                </div>
            </div>

            {{--  <div class="form-group">
                {{Form::label('¿Es docente a tiempo completo?',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::checkbox('tiempoCompleto', $teacher->tiempoCompleto, true,['class'=>'form-control', 'required'])}}
                </div>
            </div>  --}}

             <div class="form-group">
                {{Form::label('Curso: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('curso',$courses,null,['id' => 'courseOfTeacher','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>

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
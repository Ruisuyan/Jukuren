@extends('layouts.app')
@section('title', 'Competencias')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Competencia</h3>
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
            {{Form::open(['class' => ' form-horizontal','id'=>'formSuggestion'])}}
                <div class="form-group">
                    {{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        @if($competence->tipo==1)
                            {{Form::text('tipo','Competencia genérica',['class'=>'form-control', 'readonly', 'maxlength' => 50])}}    
                        @else
                            {{Form::text('tipo','Competencia específica',['class'=>'form-control', 'readonly', 'maxlength' => 50])}}    
                        @endif                        
                        
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::text('nombre',$competence->nombre,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Descripcion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('descripcion',$competence->descripcion,['class'=>'form-control', 'readonly','resize' => 'none', 'maxlength' => 500])}}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">                        
                        <a class="btn btn-success pull-right" href="{{ route('competencia.index') }}">Regresar</a>
                    </div>
                </div>
            {{Form::close()}}
            </div>  
        </div>
    </div>
</div>
@endsection
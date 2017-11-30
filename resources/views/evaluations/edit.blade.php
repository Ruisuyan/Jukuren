@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Editar Evaluacion</h3>
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
            {{Form::open(['route' => ['evaluacion.update',$evaluation->id],'class' => ' form-horizontal','id'=>'formSuggestion','method' => 'put'])}}

            {{Form::hidden('scheduleId',$schedule->id)}}

            {{Form::hidden('teacherId',$teacherId)}}

            <div class="form-group">
                {{Form::label('Curso: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('curso',$schedule->course->nombre,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    <select name="performanceId" id="performanceId" class="form-control">
                        <option name="performanceId" value="" data-content="Elegir desempeño">Elegir</option>
                        @foreach($performances as $performance)
                            <option name="performanceId" value="{{$performance->id}}" data-content="{{$performance->competence->nombre}}"
                            @if($performance->id==evaluation->performance->id)
                                selected="selected"
                            @endif
                            >{{$performance->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Competencia: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    <label id="competencia" class="form-control">{{$evaluation->performance->competence->nombre}}</label>
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Titulo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',$evaluation->nombre,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('tipo',[1 => 'Carga de evidencia',2 => 'Cuestionario', 3 => 'Directa'],$evaluation->tipo,['placeholder' => 'Elegir','class'=>'form-control', 'required', 'id' => 'tipo'])}}
                </div>
            </div>
            {{--  La idea es que solo pueda modificar antes de la fecha inicio, luego de esta tendra que cancelarla  --}}

            <div class="form-group">
                {{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaInicio',$evaluation->fechaInicio,['class'=>'form-control', 'required','id' => 'fechaInicio'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaFin',$evaluation->fechaFin,['class'=>'form-control','id' => 'fechaFin'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::textarea('indicaciones',$evaluation->indicaciones,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                </div>
            </div>
            {{--  <hr/>
            <div>
                <h3>Criterios de evaluación</h3>
            </div>
            <div id="form-cerrada" class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="form-group">
                        {{Form::label('Criterios: ',null,['class'=>'control-label col-md-4 col-sm-4 col-xs-6'])}}
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <a id="add" class="btn btn-warning tCerr">Agregar</a>
                            <a id="remove" class="btn btn-danger tCerr">Quitar</a>
                        </div>
                    </div>
                </div>
                <div id="opciones" class="row">									
                    <div class="form-group">
                        {{Form::label('-',null,['class'=>'control-label col-md-2 col-sm-2 col-xs-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-5'])}}
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="input-group">									
                                {{Form::text('clave[1]',null,['class'=>'form-control tCerrada', 'maxlength' => 500])}}
                                <span class="input-group-addon">
                                    <input class="tCerr" type="number" value="0" name="puntaje[1]" > Puntaje 
                                </span>
                            </div>
                        </div>
                    </div>                                
                </div>
            </div>  --}}
            <hr/>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">                    
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('evaluacion.chooseScheduleGet') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}
            </div>
            

        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/evaluationCreate.js') }}" type="text/javascript"></script>
@endsection
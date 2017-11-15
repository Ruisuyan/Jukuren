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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Información</h3>
            </div>
            <div class="panel-body">
            {{Form::open(['route' => 'evaluacion.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}

            {{Form::hidden('scheduleId',$scheduleId)}}

            {{Form::hidden('teacherId',$teacherId)}}

            {{--  Parte select  --}}
            <div class="form-group">
                {{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('performanceId',$performances,null,['placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>
            {{--  Grado alto  --}}
            {{--  <div class="form-group">
                {{Form::label('Grado alto: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('gradoAlto',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>            
            <div class="form-group">
                {{Form::label('Puntaje',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::number('puntajeAlto',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                </div>
            </div>   --}}
            {{--  Grado Medio  --}}
            {{--  <div class="form-group">
                {{Form::label('Grado medio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('gradoMedio',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Puntaje',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::number('puntajeMedio',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                </div>
            </div> 
              --}}
            {{--  Grado Bajo  --}}
            {{--  <div class="form-group">
                {{Form::label('Grado medio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('gradoBajo',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Puntaje',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::number('puntajeBajo',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                </div>
            </div>   --}}
            <div class="form-group">
                {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('tipo',[1 => 'Portafolio',2 => 'En linea', 3 => 'Directa'],null,['placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaInicio',null,['class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaFin',null,['class'=>'form-control'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::textarea('indicaciones',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>
            <hr/>
            <div>
                <h3>Describa los niveles de logro del desempeño a evaluar e indique su puntaje</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                    <tr class="headings">                            
                        <th class="text-center column-title">Nivel Bajo</th>
                        <th class="text-center column-title">Nivel Medio</th>
                        <th class="text-center column-title">Nivel Alto</th>                                                        
                    </tr>
                    </thead>
                    <tbody>                            
                        <tr>                                
                            <td class="text-center">
                                {{Form::textarea('gradoBajo',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                            </td>
                            <td class="text-center">
                                {{Form::textarea('gradoMedio',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                            </td>
                            <td class="text-center">
                                {{Form::textarea('gradoAlto',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                            </td>      
                        </tr>
                        <tr>                                
                            <td class="text-center">
                                {{Form::number('puntajeBajo',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                            </td>
                            <td class="text-center">
                                {{Form::number('puntajeMedio',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                            </td>
                            <td class="text-center">
                                {{Form::number('puntajeAlto',null,['class'=>'form-control', 'required', 'min' => 1, 'max' => 10])}}
                            </td>      
                        </tr>                             
                    </tbody>
                </table>                  
            </div>

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
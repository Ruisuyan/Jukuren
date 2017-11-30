@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
		    <h3>Lista de Evaluaciones</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Evaluaciones</h3>
            </div>
            <div class="panel-body">
                {{--  <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('evaluacion.chooseScheduleGet')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Evaluacion',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>                    
                </div>  --}}
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">                            
                            <th class="column-title">Nombre</th>
                            <th class="centered column-title">Curso</th>
                            <th class="centered column-title">Fecha Inicio</th>
                            <th class="centered column-title">Fecha Fin</th>
                            <th class="centered column-title">Ver</th>
                            <th class="centered column-title">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($student->schedules as $schedule)
                                @foreach($schedule->evaluations as $evaluation)
                                <tr>                                
                                    <td>{{$evaluation->nombre}}</td>
                                    <td>{{$evaluation->schedule->course->nombre}}</td>
                                    <td>{{$evaluation->fechaInicio}}</td>
                                    <td>{{$evaluation->fechaFin}}</td>
                                    <td>
                                    <a class="btn btn-success btn-xs" title="Detalles" data-toggle="modal" data-target="#evaluation{{$evaluation->id}}">
										<i class="fa fa-eye"></i>
									</a>
                                    </td>
                                    {{--  <td>{{$evaluation->performance->nombre}}</td>  --}}
                                    @if(($timeNow->diffInDays(\Carbon\Carbon::createFromFormat('Y-m-d', $evaluation->fechaFin), false))<0)
                                        <td>No disponible por fecha limite</td>
                                    @elseif($evaluation->tipo == 1)                                    
                                        <td>
                                            <a href="{{route('evidencia.uploadEvidenceGet',$evaluation->id)}}" title="Resolver">
                                                <button type="button" class="btn btn-success btn-xs view-group">
                                                    <i class="fa fa-arrow-circle-o-right"></i>
                                                    Subir Archivo
                                                </button>
                                            </a>
                                        </td>
                                    @elseif($evaluation->tipo == 2)
                                        <td>
                                            <a href="{{route('evaluacionenlinea.infoPoll',$evaluation->id)}}" title="Resolver">
                                                <button type="button" class="btn btn-success btn-xs view-group">
                                                    <i class="fa fa-arrow-circle-o-right"></i>
                                                    Resolver Cuestionario
                                                </button>
                                            </a>
                                        </td>
                                    @elseif($evaluation->tipo == 3)    
                                        <td>Es una evaluacion directa del docente</td>
                                    @endif
                                </tr>
                                @include('modals.evaluation', ['id'=> $evaluation->id, 'evaluation' => $evaluation]) 
                                @endforeach                            
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
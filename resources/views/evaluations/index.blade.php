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
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('evaluacion.chooseScheduleGet')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Evaluacion',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">                            
                            <th class="column-title">Nombre</th>
                            <th class="centered column-title">Curso</th>
                            <th class="centered column-title">Fecha Fin</th>
                            <th class="centered column-title">Tipo</th>                            
                            <th class="centered column-title">Acciones</th>                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($evaluations as $evaluation)
                            @if($evaluation->schedule->cycle->estado != 3)
                                <tr>                                
                                <td>{{$evaluation->nombre}}</td>
                                <td>{{$evaluation->schedule->course->nombre}}</td>
                                <td>{{$evaluation->fechaFin}}</td>
                                @if($evaluation->tipo == 1)
                                    <td>Carga de evidencia</td>
                                    <td class="centered">   
                                        <a href="{{route('evidencia.evidencesIndex',$evaluation->id)}}" title="Revisar evidencia">
                                            <button type="button" class="btn btn-success btn-xs view-group">
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                                Revisar evidencias
                                            </button>
									    </a>
                                    </td>
                                @elseif($evaluation->tipo == 2)
                                    <td>Cuestionario</td>
                                    <td class="centered">
                                    @if(count($evaluation->poll))
                                        <a href="{{route('evaluacionenlinea.pollsIndex',$evaluation->id)}}" title="Revisar cuestionarios">
                                            <button type="button" class="btn btn-success btn-xs view-group">
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                                Revisar cuestionarios
                                            </button>
                                        </a>
                                    @else
                                        <a href="{{route('cuestionario.create',$evaluation->id)}}" title="Crear cuestionario">
                                            <button type="button" class="btn btn-success btn-xs view-group">
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                                Crear cuestionario
                                            </button>
                                        </a>
                                    @endif
                                    </td>
                                @elseif($evaluation->tipo == 3)
                                    <td>Directa</td>
                                    <td class="centered">
                                        <a href="{{route('directa.chooseStudent',$evaluation->id)}}" title="Asignar puntajes">
                                            <button type="button" class="btn btn-success btn-xs view-group">
                                                <i class="fa fa-arrow-circle-o-right"></i>
                                                Asignar puntajes
                                            </button>
                                        </a>
                                    </td>
                                @endif                         
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
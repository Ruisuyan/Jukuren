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
                            <th class="centered column-title">Fecha Inicio</th>
                            <th class="centered column-title">Fecha Fin</th>
                            <th class="centered column-title">Tipo</th>
                            {{--  <th class="centered column-title">Desempeño</th>  --}}
                            <th class="centered column-title">Acciones</th>                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($evaluations as $evaluation)
                            <tr>                                
                                <td>{{$evaluation->nombre}}</td>
                                <td>{{$evaluation->schedule->course->nombre}}</td>
                                <td>{{$evaluation->fechaInicio}}</td>
                                <td>{{$evaluation->fechaFin}}</td>
                                @if($evaluation->tipo == 1)
                                    <td>Portafolio</td>
                                @elseif($evaluation->tipo == 2)
                                    <td>En linea</td>
                                @else
                                    <td>Directa</td>
                                @endif                                
                                {{--  <td>{{$evaluation->performance->nombre}}</td>  --}}
                                <td class="centered">
                                    <a href="#" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{{route('evidencia.evidencesIndex',$evaluation->id)}}" title="Asignar a Docente" class="btn btn-success btn-xs view-group">
                                        <i class="fa fa-arrow-circle-o-right">Evaluaciones subidas</i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$evaluation->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
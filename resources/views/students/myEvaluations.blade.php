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
                            <th class="centered column-title">Desempeño</th>                            
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
                                    <td>{{$evaluation->performance->nombre}}</td>
                                </tr> 
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
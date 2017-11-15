@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Elija el horario</h3>
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
            {{Form::open(['route' => 'reporte.scheduleSelectPost','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                        <tr class="headings">
                            <th></th>                          
                            <th class="column-title">Codigo</th>     
                            <th class="column-title">Curso</th>
                            <th class="column-title">Horario</th>                            
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($schedules as $schedule)                        
                        <tr> 
                            <td>{{Form::radio('scheduleId', $schedule->id)}}</td>                            
                            <td>{{$schedule->course->codigo}}</td>
                            <td>{{$schedule->course->nombre}}</td>                            
                            <td>{{$schedule->codigo}}</td>                                                       
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Siguiente', ['class'=>'btn btn-success pull-right'])}}
                    {{--  <a class="btn btn-default pull-right" href="{{ route('evaluacion.index') }}">Cancelar</a>  --}}
                </div>
            </div>

            {{Form::close()}}
            </div>
            

        </div>
    </div>
</div>
@endsection
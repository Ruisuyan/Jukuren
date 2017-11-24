@extends('layouts.app')
@section('title', 'Cuestionarios')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
		    <h3>Cuestionarios</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Evaluaciones en Linea</h3>
            </div>
            <div class="panel-body">
                {{--  <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('cuestionario.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Cuestionario',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>                    
                </div>  --}}
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            {{--  <th class="centered column-title">Estado</th>  --}}
                            {{--  <th class="centered column-title">Codigo</th>  --}}
                            <th class="column-title">Horario</th>
                            <th class="column-title">Curso</th>
                            <th class="column-title">Competencia</th>
                            <th class="centered column-title">Acciones</th>                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($polls as $poll)
                            <tr> 
                                {{--  @if($onlineEvaluation->estado==1)
                                    <td>Pendiente</td>
                                @endif  --}}
                                {{--  <td>{{$evaluation->codigo}}</td>  --}}
                                {{--  <td>{{$onlineEvaluation->nombre}}</td>  --}}
                                {{--  <td>{{$onlineEvaluation->nombre}}</td>  --}}
                                <td>{{$poll->evaluation->schedule->codigo}}</td>
                                <td>{{$poll->evaluation->schedule->course->codigo}}</td>
                                <td>{{$poll->evaluation->performance->competence->nombre}}</td>
                                <td class="centered">
                                    <a href="{{route('cuestionario.edit',$poll->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$poll->id}}">
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
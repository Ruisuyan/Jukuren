@extends('layouts.app')
@section('title', 'Horarios')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Horarios</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Horarios</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('horario.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Horario',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Codigo</th>
                                <th class="column-title">Curso</th>
                                <th class="column-title">Ciclo Academico</th>
                                <th class="column-title">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{$schedule->codigo}}</td>                                
                                <td>{{$schedule->course->nombre}}</td>
                                <td>{{$schedule->cycle->semestre}}</td>
                                <td class="centered">
                                    <a href="{{route('horario.edit',$schedule->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"> Editar</i>
                                    </a>                                    
                                    <a href="{{route('horario.assignToTeacherGet',$schedule->id)}}" title="Asignar a Docente" class="btn btn-success btn-xs view-group">
                                        <i class="fa fa-arrow-circle-o-right"> Asignar docente</i>
                                    </a>                                    
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$schedule->id}}">
                                        <i class="fa fa-trash-o"> Eliminar</i>
                                    </a>
                                </td>
                            </tr>
                            @include('modals.destroy', ['id'=> $schedule->id, 'message' => '¿Esta seguro que desea eliminar este horario?', 'route' => 'horario.destroy'])  
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
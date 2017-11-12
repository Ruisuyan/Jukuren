@extends('layouts.app')
@section('title', 'Evaluaciones en Linea')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
		    <h3>Lista de Evaluaciones en Linea</h3>
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
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('evaluacionenlinea.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Evaluacion en Linea',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            <th class="centered column-title">Estado</th>
                            {{--  <th class="centered column-title">Codigo</th>  --}}
                            <th class="column-title">Nombre</th>
                            <th class="centered column-title">Fecha Inicio</th>
                            <th class="centered column-title">Fecha Fin</th>
                            <th class="centered column-title">Acciones</th>                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($onlineEvaluations as $onlineEvaluation)
                            <tr> 
                                @if($onlineEvaluation->estado==1)
                                    <td>Pendiente</td>
                                @endif
                                {{--  <td>{{$evaluation->codigo}}</td>  --}}
                                <td>{{$onlineEvaluation->nombre}}</td>
                                <td>{{$onlineEvaluation->fechaInicio}}</td>
                                <td>{{$onlineEvaluation->fechaFin}}</td>
                                <td class="centered">
                                    <a href="{{route('evaluacionenlinea.edit',$onlineEvaluation->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$onlineEvaluation->id}}">
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
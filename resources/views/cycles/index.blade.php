@extends('layouts.app')
@section('title', 'Ciclos')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Ciclos</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ciclos</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('ciclo.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Ciclo',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Ciclo</th>
                                <th class="column-title">Fecha Inicio</th>
                                <th class="column-title">Fecha Fin</th>
                                <th class="column-title">Estado</th>
                                <th class="column-title">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($cycles as $cycle)
                            <tr>
                                <td>{{$cycle->anho.' - '.$cycle->periodo}}</td>                                
                                <td>{{$cycle->fechainicio}}</td>
                                <td>{{$cycle->fechafin}}</td>
                                @if($cycle->estado==1)
                                    <td>Activo</td>
                                @elseif($cycle->estado==2)
                                    <td>Proximo</td>
                                @else
                                    <td>Culminado</td>
                                @endif                                
                                <td class="centered">
                                    <a href="{{route('ciclo.edit',$cycle->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"> Editar</i>
                                    </a>
                                    @if($cycle->estado==1)
                                        <a href="{{route('ciclo.assignToCourseGet',$cycle->id)}}" title="Asignar a Cursos" class="btn btn-success btn-xs view-group">
                                            <i class="fa fa-arrow-circle-o-right"> Asignar</i>
                                        </a>
                                    @endif                                    
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$cycle->id}}">
                                        <i class="fa fa-trash-o"> Eliminar</i>
                                    </a>
                                </td>
                            </tr>
                            @include('modals.destroy', ['id'=> $cycle->id, 'message' => '¿Esta seguro que desea eliminar este ciclo?', 'route' => 'ciclo.destroy'])  
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

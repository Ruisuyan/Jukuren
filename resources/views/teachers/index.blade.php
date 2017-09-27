@extends('layouts.app')
@section('title', 'Docentes')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Docentes</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Docentes</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('docente.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Docente',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Codigo</th>
                            <th class="column-title">Nombre</th>
                            <th class="column-title">Correo</th>                                                
                            <th class="column-title">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr> 
                                <td>{{$teacher->codigo}}</td>
                                <td>{{$teacher->nombres . ' ' . $teacher->apellidoPaterno . ' ' . $teacher->apellidoMaterno}}</td>
                                <td>{{$teacher->email}}</td>
                                <td class="centered">
                                    <a href="{{route('docente.edit',$teacher->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$teacher->id}}">
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
@extends('layouts.app')
@section('title', 'Cursos')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Cursos</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Cursos</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('curso.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Curso',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">
                                <th class="centered column-title">Código</th>
                                <th class="centered column-title">Cíclo</th>
                                <th class="column-title">Nombre</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($courses as $course)
                            <tr> 
                                <td class="centered">{{$course->codigo}}</td> 
                                <td class="centered">{{$course->ciclo}}</td> 
                                <td>{{$course->nombre}}</td>                             
                                <td class="centered">
                                    <a href="{{route('curso.edit',$course->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$course->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td> 
                            </tr>
                            @include('modals.destroy', ['id'=> $course->id, 'message' => '¿Esta seguro que desea eliminar este curso?', 'route' => 'curso.destroy'])  
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
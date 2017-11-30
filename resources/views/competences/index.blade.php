@extends('layouts.app')
@section('title', 'Competencias')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Competencias</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Competencias</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('competencia.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Competencia',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Nombre</th>
                                <th class="centered column-title">Tipo</th>
                                <th class="centered column-title last">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($competences as $competence)
                            <tr> 
                                {{--  <td class="centered">{{$competence->codigo}}</td>   --}}
                                <td class="centered">{{$competence->nombre}}</td>
                                @if($competence->tipo == 1)
                                    <td>Competencia generica</td>
                                @else
                                    <td>Competencia especifica</td>
                                @endif
                                <td class="centered">
                                    <a href="{{route('competencia.edit',$competence->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="{{route('competencia.show',$competence->id)}}" title="Detalles" class="btn btn-success btn-xs view-group">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$competence->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>                             
                            </tr>
                            @include('modals.destroy', ['id'=> $competence->id, 'message' => '¿Esta seguro que desea eliminar esta competencia?', 'route' => 'competencia.destroy']) 
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
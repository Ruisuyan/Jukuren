@extends('layouts.app')
@section('title', 'Preguntas')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Preguntas</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Preguntas</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('pregunta.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Pregunta',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">
                                <th class="centered column-title">Codigo</th>
                                <th class="column-title">Pregunta</th>
                                <th class="centered column-title">Tipo</th>
                                <th class="centered column-title last">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($questions as $question)
                            <tr> 
                                <td class="centered">{{$question->codigo}}</td> 
                                <td>{{$question->descripcion}}</td>  
                                @if($question->tipo == 1)
                                <td class="centered"><i class="fa fa-pencil-square-o fa-2x" title="Abierta" aria-hidden="true"></i></td>                                 
                                @else
                                <td class="centered"><i class="fa fa-list-ul fa-2x" title="Cerrada" aria-hidden="true"></i></td> 
                                @endif 
                                <td class="centered">
                                    <a href="{{route('pregunta.edit',$question->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$question->id}}">
                                        <i class="fa fa-remove"></i>
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
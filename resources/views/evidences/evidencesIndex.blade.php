@extends('layouts.app')
@section('title', 'Evidencias')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Evidencias de la Evaluacion</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Evidencias</h3>
            </div>
            <div class="panel-body">
                
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Alumno</th>                                
                                <th class="centered column-title">Fecha Subida</th>                                
                                <th class="centered column-title">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($evidences as $evidence)
                            <tr> 
                                <td>{{$evidence->student->nombres}}</td>                                
                                <td>{{$evidence->fechasubida}}</td>
                                {{--  <td></td>                                 --}}
                                <td class="centered">
                                    <a href="{{route('evidencia.checkEvidenceGet',$evidence->id)}}" title="Corregir" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil">Corregir</i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$evidence->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>                             
                            </tr>
                            @include('modals.destroy', ['id'=> $evidence->id, 'message' => '¿Esta seguro que desea eliminar esta evidencia?', 'route' => 'evidencia.destroy']) 
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
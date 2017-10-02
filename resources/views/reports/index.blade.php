@extends('layouts.app')
@section('title', 'Reporte')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Reporte de Competencia 1</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Alumnos del curso EDU123</h3>
            </div>
            <div class="panel-body">
                {{--  <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('competencia.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva Competencia',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>  --}}
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Nombre del alumno</th>
                                <th class="centered column-title">Lograda</th>
                                <th class="centered column-title">En Proceso</th>
                                <th class="centered column-title">No lograda</th>
                                <th class="centered column-title">Observaciones</th>
                            </tr>
                        </thead> 
                        <tbody>                           
                            <tr>                                
                                <td>John Doe</td>
                                <td class="centered"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                                <td class="centered"></td>
                                <td class="centered"></td>
                                <td>Esta bien</td>                             
                            </tr>
                            <tr>                                
                                <td>Reimu Hakurei</td>
                                <td class="centered"></td>
                                <td class="centered"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                                <td class="centered"></td>
                                <td>Debe mejorar</td>                             
                            </tr> 
                            <tr>                                
                                <td class="centered">Flandre Scarlet</td>
                                <td class="centered"></td>
                                <td class="centered"></td>
                                <td class="centered"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                                <td>Desaprobo evaluacion 1</td>                             
                            </tr>  
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
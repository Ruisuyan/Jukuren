@extends('layouts.app')
@section('title', 'Evaluacion directa')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Evaluacion</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Evaluacion</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">                                
                                <th class="column-title">Codigo</th>
                                <th class="column-title">Alumno</th>                                
                                <th class="centered column-title">Acciones</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->codigo}}</td> 
                                <td>{{$student->nombres.' '.$student->apellidoPaterno}}</td>                                
                                <td class="centered">
                                    <a href="{{route('directa.putScoreGet',[$student->id,$evaluation->id])}}" title="Puntuar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil">Puntuar</i>
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
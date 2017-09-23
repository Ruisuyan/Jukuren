@extends('layouts.app')
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
                        <a href="{{route('docentes.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Docente',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Nombres</th>
                            <th class="column-title">Apellido Paterno</th>
                            <th class="column-title">Apellido Materno</th>                                                
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr> 
                                <td>{{$teacher->nombres}}</td>
                                <td>{{$teacher->apellidoPaterno}}</td>
                                <td>{{$teacher->apellidoMaterno}}</td>
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
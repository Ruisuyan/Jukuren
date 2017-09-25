@extends('layouts.app')
@section('title', 'Alumnos')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Alumnos</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Alumnos</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('alumnos.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Alumno',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Codigo</th>
                            <th class="column-title">Nombre</th>
                            <th class="column-title">Apellido Paterno</th>
                            <th class="column-title">Apellido Materno</th>                         
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr> 
                                <td>{{$student->codigo}}</td> 
                                <td>{{$student->nombres}}</td> 
                                <td>{{$student->apellidoPaterno}}</td> 
                                <td>{{$student->apellidoMaterno}}</td>                            
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
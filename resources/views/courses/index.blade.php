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
                                <th class="column-title">Codigo</th>
                                <th class="column-title">Nombre</th>
                                <th class="column-title">Descripcion</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($courses as $course)
                            <tr> 
                                <td>{{$course->codigo}}</td> 
                                <td>{{$course->nombre}}</td> 
                                <td>{{$course->descripcion}}</td>                             
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
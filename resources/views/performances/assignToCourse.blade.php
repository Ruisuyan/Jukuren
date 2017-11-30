@extends('layouts.app')
@section('title', 'Desempeños')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Asignar un desempeño a uno o más cursos</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">            
            <div class="panel-body">
             {{Form::open(['route' => ['desempenho.assignToCoursePost',$performance->id],'class' => ' form-horizontal','method'=>'put'])}}            

            <div class="form-group">
                {{Form::label('Desempeño:',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',$performance->nombre,['class'=>'form-control', 'readonly', 'maxlength' => 500])}}                    
                </div>
                <div class="col-md-1">
                    <a class="btn btn-success btn-xs form-control" title="Detalles" data-toggle="modal" data-target="#performance{{$performance->id}}">
                        <i class="fa fa-eye "></i>
                    </a>
                </div>                
            </div>
            <div class="form-group">
                {{Form::label('Competencia: ',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::text('competencia',$performance->competence->nombre,['class'=>'form-control', 'readonly'])}}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-success btn-xs form-control" title="Detalles" data-toggle="modal" data-target="#competence{{$performance->competence->id}}">
                        <i class="fa fa-eye "></i>
                    </a>
                </div> 
            </div>
            <hr/>
            <div class="form-group">
                {{Form::label('Ciclo del curso: ',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::selectRange('cicloCurso',1,10,null,['id' => 'cycleOfCourse','placeholder' => 'Elegir','class'=>'form-control'])}}
                </div>
            </div>            

             {{-- Tabla de preguntas   --}}

            <div>
                <h3>Lista de Cursos</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                        <tr class="headings">
                            <th></th>                               
                            <th class="column-title">Codigo</th>
                            <th class="column-title">Nombre</th>                            
                            <th class="column-title">Detalle</th>
                        </tr>
                    </thead> 
                    <tbody class="listOfCourses">
                        @foreach($courses as $course)                        
                        <tr class="course{{$course->cicloCurso}}"> 
                            <td>{{Form::checkbox('checks['. $course->id .']', $course->id)}}</td>
                            <td>{{$course->codigo}}</td>
                            <td>{{$course->nombre}}</td>
                            <td>
                                <a class="btn btn-success btn-xs" title="Detalles" data-toggle="modal" data-target="#course{{$course->id}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @include('modals.course', ['id'=> $course->id, 'course' => $course]) 
                        @endforeach
                    </tbody>
                </table>
                {{$courses->links()}}
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('desempenho.index') }}">Cancelar</a>
                </div>
            </div>
            
            {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@include('modals.performance', ['id'=> $performance->id, 'performance' => $performance])
@include('modals.competence', ['id'=> $performance->competence->id, 'competence' => $performance->competence])
@endsection

@section('scripts')
<script src="{{ asset('js/performanceToCourse.js') }}" type="text/javascript"></script>
@endsection
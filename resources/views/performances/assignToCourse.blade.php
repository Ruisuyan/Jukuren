@extends('layouts.app')
@section('title', 'Desempeños')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Asignar Desempeño a Cursos</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{$performance->nombre}}</h3>
            </div>
            <div class="panel-body">
             {{Form::open(['route' => ['desempenho.assignToCoursePost',$performance->id],'class' => ' form-horizontal','method'=>'put'])}}            
            <div class="form-group">
                {{Form::label('Ciclo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
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
                            <th class="column-title text-center">Nombre</th>                            
                            <th class="column-title text-center">Ciclo de enseñanza</th>
                        </tr>
                    </thead> 
                    <tbody class="listOfCourses">
                        @foreach($courses as $course)                        
                        <tr class="course{{$course->cicloCurso}}"> 
                            <td>{{Form::checkbox('checks['. $course->id .']', $course->id)}}</td>
                            <td>{{$course->codigo}}</td>
                            <td class='text-center'>{{$course->nombre}}</td>
                            <td class='text-center'>{{$course->cicloCurso}}</td>                           
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
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
@endsection

@section('scripts')
<script src="{{ asset('js/performanceToCourse.js') }}" type="text/javascript"></script>
@endsection
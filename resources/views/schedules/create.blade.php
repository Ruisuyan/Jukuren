@extends('layouts.app')
@section('title', 'Horario')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Crear Horario</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Nuevo Horario</h3>
            </div>
            <div class="panel-body">
             {{Form::open(['route' =>'horario.store','class' => ' form-horizontal'])}}            
             <div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',null,['class'=>'form-control', 'required', 'maxlength' => 6])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('Ciclo Academico: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('cicloAcademico',$cycles,null,['id' => 'academicCycle','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('Ciclo (nivel academico): *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::selectRange('cicloCurso',1,10,null,['id' => 'cycleOfCourse','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
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
                        </tr>
                    </thead> 
                    <tbody class="listOfCourses">
                        @foreach($courses as $course)                        
                        <tr class="course{{$course->cicloCurso}}"> 
                            <td>{{Form::radio('courseId', $course->id)}}</td>
                            <td>{{$course->codigo}}</td>
                            <td>{{$course->nombre}}</td>                           
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('horario.index') }}">Cancelar</a>
                </div>
            </div>
            
            {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/cycleToCourse.js') }}" type="text/javascript"></script>
@endsection
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
                <h3 class="panel-title">{{$schedule->semestre}}</h3>
            </div>
            <div class="panel-body">
             {{Form::open(['route' =>['horario.assignToTeacherPost',$schedule->id],'class' => ' form-horizontal','method'=>'put'])}}            
             <div class="form-group">
                {{Form::label('Codigo del horario',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('codigo',$schedule->codigo,['class'=>'form-control','readonly'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('Nombre del curso',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',$schedule->course->nombre,['class'=>'form-control','readonly'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('Ciclo Academico: ',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::text('cicloAcademico',$schedule->cycle->semestre,['id' => 'academicCycle','class'=>'form-control','readonly'])}}
                </div>
            </div>           

             {{-- Tabla   --}}

            <div>
                <h3>Lista de Docentes</h3>
            </div>

            <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">
                                <th class="column-title"></th>
                                <th class="column-title">Codigo</th>
                                <th class="column-title">Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr> 
                                <td>{{Form::radio('teacherId', $teacher->id)}}</td>
                                <td>{{$teacher->codigo}}</td>
                                <td>{{$teacher->nombres . ' ' . $teacher->apellidoPaterno . ' ' . $teacher->apellidoMaterno}}</td>
                                <td>
                                    <a class="btn btn-success btn-xs" title="Detalles" data-toggle="modal" data-target="#teacher{{$teacher->id}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>                                                               
                            </tr>
                            @include('modals.teacher', ['id'=> $teacher->id, 'teacher' => $teacher])  
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

{{--  @section('scripts')
<script src="{{ asset('js/cycleToCourse.js') }}" type="text/javascript"></script>
@endsection  --}}
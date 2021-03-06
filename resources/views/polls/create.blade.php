@extends('layouts.app')
@section('title', 'Cuestionario')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nuevo Cuestionario</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Información</h3>
            </div>
            <div class="panel-body">
            {{Form::open(['route' => 'cuestionario.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            {{Form::hidden('evaluationId',$evaluation->id)}}
            
            <div class="form-group">
                {{Form::label('Titulo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',$evaluation->nombre,['class'=>'form-control', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaInicio',$evaluation->fechaInicio,['class'=>'form-control'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaFin',$evaluation->fechaFin,['class'=>'form-control'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('indicaciones',$evaluation->indicaciones,['class'=>'form-control', 'maxlength' => 50])}}
                </div>
            </div>

            {{--  <div class="form-group">
                {{Form::label('Competencia: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('competencia',$competences,null,['id' => 'competenceOfQuestions','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>  --}}

            {{-- Tabla de preguntas   --}}

            <div>
                <h3>Banco de Preguntas</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                        <tr class="headings">
                            <th></th>                               
                            <th class="column-title">Enunciado</th>
                            {{--  <th class="column-title">Competencia</th>  --}}
                            <th class="centered column-title">Tipo</th>                            
                        </tr>
                    </thead> 
                    <tbody class="listOfQuestions">
                        @foreach($questions as $question)                        
                        <tr class="competence{{$question->competence->id}}"> 
                            <td>{{Form::checkbox('checks['. $question->id .']', $question->id)}}</td>
                            <td>{{$question->enunciado}}</td>
                            {{--  <td>{{$question->competence->nombre}}</td>  --}}
                            @if($question->tipo == 1)
                            <td class="centered">Abierta</td>                                 
                            @else
                            <td class="centered">Cerrada</td> 
                            @endif                                                         
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
            </div>            
        
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('cuestionario.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}
            </div>
            

        </div>
    </div>
</div>
@endsection
{{--  @section('scripts')
<script src="{{ asset('js/quizCreate.js') }}" type="text/javascript" ></script>
@endsection  --}}
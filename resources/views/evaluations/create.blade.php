@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Nueva Evaluacion</h3>
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
            {{Form::open(['route' => 'evaluacion.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
            
            <div class="form-group">
                {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::text('nombre',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaInicio',null,['class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::date('fechaFin',null,['class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Descripcion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::textarea('descripcion',null,['class'=>'form-control', 'required', 'maxlength' => 50])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Duración: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::number('duracion',null,['class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Peso: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::number('peso',null,['class'=>'form-control', 'required'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Competencia: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4 col-sm-8 col-xs-12">
                    {{Form::select('competencia',$competences,null,['id' => 'competenceOfQuestions','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                </div>
            </div>

            {{-- Tabla de preguntas   --}}

            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                        <tr class="headings">
                            <th></th>                               
                            <th class="column-title">Enunciado</th>
                            <th class="column-title">Competencia</th>
                            <th class="centered column-title">Tipo</th>                            
                        </tr>
                    </thead> 
                    <tbody class="listOfQuestions">
                        @foreach($questions as $question)
                        {{--  class="competence".{{$question->competence->id}} --}}
                        <tr class="competence{{$question->competence->id}}"> 
                            <td>{{Form::checkbox('checks['. $question->id .']', $question->id)}}</td>
                            <td>{{$question->enunciado}}</td>
                            <td>{{$question->competence->nombre}}</td>
                            @if($question->tipo == 1)
                            <td class="centered"><i class="fa fa-pencil-square-o fa-2x" title="Abierta" aria-hidden="true"></i></td>                                 
                            @else
                            <td class="centered"><i class="fa fa-list-ul fa-2x" title="Cerrada" aria-hidden="true"></i></td> 
                            @endif                                                         
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
            </div>            
        
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('evaluacion.index') }}">Cancelar</a>
                </div>
            </div>

            {{Form::close()}}
            </div>
            

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>

var rows = $('tbody.listOfQuestions tr');

$(function(){
    rows.hide();
});

$('#competenceOfQuestions').change(function(){
    var idValue = $(this).val();
    rows.filter('.competence'+idValue).show();
    rows.not('.competence'+idValue).hide();
    rows.not('.competence'+idValue).find(':checkbox').prop('checked', false);
});

</script>
@endsection
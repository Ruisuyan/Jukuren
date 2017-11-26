    @extends('layouts.app')
    @section('title', 'Competencias')
    @section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="page-title">
                <div class="title_left">
                    <h3>Nueva Pregunta</h3>
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
                {{Form::open(['route' => 'pregunta.store','class' => ' form-horizontal','id'=>'formSuggestion'])}}
                
                    <div class="form-group">
                        {{Form::label('Enunciado: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-4">
                            {{Form::textarea('enunciado',null,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                        </div>
                    </div>

                    <div class="form-group">
                        {{Form::label('Competencia: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-4 col-sm-8 col-xs-12">
                            {{Form::select('competencia',$competences,null,['placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        {{Form::label('Proporción: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-4">
                            {{Form::select('proporcion',[1 => 'Baja',2 => 'Media',3 => 'Alta'],null,['placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                {{Form::label('Tipo: *',null,['class'=>'control-label col-md-6 col-sm-6 col-xs-6'])}}
                                <div class="col-md-6 col-sm-6 col-xs-6">						
                                    <div class="radio">									
                                        <label><input type="radio" value="1" name="tipo" checked > Abierta </label>
                                        <i class="fa fa-pencil-square-o fa-2x" title="Abierta" aria-hidden="true"></i>
                                    </div>                                    
                                    <div class="radio">
                                        <label><input type="radio" value="2" name="tipo" >Cerrada </label>
                                        <i class="fa fa-list-ul fa-2x" title="Cerrada" aria-hidden="true"></i>
                                    </div>						
                                </div>
                            </div>
                        </div>
                        <div id="form-cerrada" hidden="true" class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="form-group">
                                    {{Form::label('Alternativas: ',null,['class'=>'control-label col-md-4 col-sm-4 col-xs-6'])}}
                                    <div class="col-md-8 col-sm-8 col-xs-6">
                                        <a id="add" disabled class="btn btn-warning tCerr">Agregar</a>
                                        <a id="remove" disabled class="btn btn-danger tCerr">Quitar</a>
                                    </div>
                                </div>
                            </div>
                            <div id="opciones" class="row">									
                                <div class="form-group">
                                    {{Form::label('-',null,['class'=>'control-label col-md-2 col-sm-2 col-xs-1 col-md-offset-0 col-sm-offset-0 col-xs-offset-5'])}}
                                    <div class="col-md-8 col-sm-8 col-xs-6">
                                        <div class="input-group">									
                                            {{Form::text('clave[1]',null,['class'=>'form-control tCerrada','readonly', 'maxlength' => 500])}}
                                            <span class="input-group-addon">
                                                <input class="tCerr" type="radio" disabled value="1" name="respuesta" > Respuesta.
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                                  
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                            <a class="btn btn-default pull-right" href="{{ route('competencia.index') }}">Cancelar</a>
                        </div>
                    </div>
                {{Form::close()}}
                </div>  
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script src="{{ asset('js/questionCreate.js') }}" type="text/javascript"></script>
    @endsection
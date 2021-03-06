@extends('layouts.app') 
@section('title', 'Evidencia') 
@section('content')
<style>
input.scoreInTable {
    width: 100%;
    padding: 10px;
    margin: 0px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>Nueva Evidencia</h3>
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
				{{Form::open(['route' => ['evidencia.checkEvidencePost',$evidence->id],'class' => ' form-horizontal','id'=>'formSuggestion','files'=> true,'method' => 'put'])}}
                <div class="form-group">
                    {{Form::label('Evaluacion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::text('nombreEvidencia',$evidence->evaluation->nombre,['class'=>'form-control', 'readonly'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Alumno: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::text('nombreAlumno',$evidence->student->nombres.' '.$evidence->student->apellidoPaterno,['class'=>'form-control', 'readonly'])}}
                    </div>
                </div>				
				<div class="form-group">
					{{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{Form::text('nombre',$evidence->evaluation->performance->nombre,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>
                <div class="form-group">
                    {{Form::label('Archivo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        <a class="btn btn-success" href="{{$studentArchive}}" download>Descargar</a>
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Observaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('observaciones',null,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>
                <hr/>
                <h3>Seleccionar puntaje del desempeño</h3>

                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">                            
                            
                            <th class="text-center column-title">Criterio</th>
                            <th class="text-center column-title">Puntaje</th>
                        </tr>
                        </thead>
                        <tbody> 
                            @foreach($evaluation->levels as $level)                           
                            <tr>
                                <td>{{$level->nombre}}</td>
                                <td><input type="number" class="scoreInTable" name="scores[{{$level->id}}]" min="0" max="{{$level->puntaje}}"></td>                                
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

{{--  @section('scripts')
<script src="{{ asset('js/checkEvidence.js') }}" type="text/javascript"></script>
@endsection  --}}
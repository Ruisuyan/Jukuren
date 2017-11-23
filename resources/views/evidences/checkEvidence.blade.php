@extends('layouts.app') 
@section('title', 'Evidencia') 
@section('content')

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
                        {{Form::label('nombreEvidencia',$evidence->evaluation->nombre,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('Alumno: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::label('nombreAlumno',$evidence->student->nombres.' '.$evidence->student->apellidoPaterno,['class'=>'form-control', 'required'])}}
                    </div>
                </div>				
				<div class="form-group">
					{{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{Form::label('nombre',$evidence->evaluation->performance->nombre,['class'=>'form-control', 'required'])}}
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

				{{--  <div class="form-group">
					{{Form::label('Archivo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{csrf_field()}} {{Form::file('archivo',['class'=>'form-control', 'required'])}}
					</div>
				</div>  --}}
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">                            
                            {{--  <th class="text-center column-title">Bajo</th>
                            <th class="text-center column-title">Medio</th>
                            <th class="text-center column-title">Alto</th>--}}
                            <th class="text-center column-title">Criterio</th>
                            <th class="text-center column-title">Puntaje</th>
                        </tr>
                        </thead>
                        <tbody> 
                            @foreach($evaluation->levels as $level)                           
                            <tr>
                                <td>{{$level->nombre}}</td>
                                <td>{{$level->puntaje}}</td>
                            </tr>
                            @endforeach
                            {{--  <tr class="selectGrade">                                
                                <td class="text-center">
                                    {{$evidence->evaluation->level->gradoBajo.' / Puntos: '.$evidence->evaluation->level->puntajeBajo}}
                                    {{Form::hidden('bajo',$evidence->evaluation->level->puntajeBajo,['class' => 'puntos'])}}
                                </td>
                                <td class="text-center">
                                    {{$evidence->evaluation->level->gradoMedio.' / Puntos: '.$evidence->evaluation->level->puntajeMedio}}
                                    {{Form::hidden('medio',$evidence->evaluation->level->puntajeMedio,['class' => 'puntos'])}}
                                </td>
                                <td class="text-center">
                                    {{$evidence->evaluation->level->gradoAlto.' / Puntos: '.$evidence->evaluation->level->puntajeAlto}}
                                    {{Form::hidden('alto',$evidence->evaluation->level->puntajeAlto,['class' => 'puntos'])}}
                                </td>      
                            </tr>--}}
                        </tbody>
                    </table>                  
                </div>
                <div class="form-group">
					{{Form::label('Puntaje: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{Form::number('puntaje',null,['class'=>'form-control', 'required','id' => 'puntaje'])}}
					</div>
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
<script src="{{ asset('js/checkEvidence.js') }}" type="text/javascript"></script>
@endsection
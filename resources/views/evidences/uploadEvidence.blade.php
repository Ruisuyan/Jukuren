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
				{{Form::open(['route' => ['evidencia.uploadEvidencePost',$evaluation->id],'class' => ' form-horizontal','id'=>'formSuggestion','files'=> true,'method' => 'put'])}}
                <div class="form-group">
                    {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::label('nombre',$evaluation->nombre,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
				<div class="form-group">
                    {{Form::label('Fecha Entrega: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::label('fechaInicio',$evaluation->fechaInicio,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
				<div class="form-group">
					{{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{Form::label('nombre',$evaluation->performance->nombre,['class'=>'form-control', 'required'])}}
					</div>
				</div>
                <div class="form-group">
                    {{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('indicaciones',$evaluation->indicaciones,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>
				<div class="form-group">
					{{Form::label('Archivo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{csrf_field()}} {{Form::file('archivo',['class'=>'form-control', 'required'])}}
					</div>
				</div>
                <div class="form-group">
                    {{Form::label('Comentario: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('comentario',null,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>

				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						{{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
						<a class="btn btn-default pull-right" href="{{ route('alumno.myEvaluations') }}">Cancelar</a>
					</div>
				</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@endsection
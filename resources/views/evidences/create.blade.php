@extends('layouts.app') @section('title', 'Evidencia') @section('content')

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
				{{Form::open(['route' => 'evidencia.store','class' => ' form-horizontal','id'=>'formSuggestion','files'=> true])}}
                <div class="form-group">
                    {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::text('nombre',null,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
				<div class="form-group">
                    {{Form::label('Fecha Entrega: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::date('fechalimite',null,['class'=>'form-control', 'required'])}}
                    </div>
                </div>
				<div class="form-group">
					{{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4 col-sm-8 col-xs-12">
						{{Form::select('desempenho',$performances,null,['id' => 'performances','placeholder' => 'Elegir','class'=>'form-control',
						'required'])}}
					</div>
				</div>
                <div class="form-group">
                    {{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4">
                        {{Form::textarea('indicaciones',null,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                    </div>
                </div>
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						{{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
						<a class="btn btn-default pull-right" href="{{ route('evidencia.index') }}">Cancelar</a>
					</div>
				</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@endsection
<div id="evaluation{{$id}}" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Detalles del desempeño</h4>
			</div>
			<div class="modal-body">
				{{Form::open(['class' => ' form-horizontal'])}}
				<div class="form-group">
					{{Form::label('Curso: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('curso',$evaluation->schedule->course->nombre,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Desempeño: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6 col-sm-8 col-xs-12">
						{{Form::text('performanceId',$evaluation->performance->id,['class'=>'form-control',
						'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Titulo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::text('nombre',$evaluation->nombre,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6 col-sm-8 col-xs-12">
                        @if($evaluation->tipo==1)
                            {{Form::text('tipo','Carga de evidencia',['class'=>'form-control', 'readonly'])}}
                        @elseif($evaluation->tipo==2)
                            {{Form::text('tipo','Cuestionario',['class'=>'form-control', 'readonly'])}}
                        @else
                            {{Form::text('tipo','Directa',['class'=>'form-control', 'readonly'])}}
                        @endif						
					</div>
				</div>
				
				<div class="form-group">
					{{Form::label('Fecha Inicio: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::date('fechaInicio',$evaluation->fechaInicio,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Fecha Fin: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-6">
						{{Form::date('fechaFin',$evaluation->fechaFin,['class'=>'form-control', 'readonly'])}}
					</div>
				</div>

				<div class="form-group">
					{{Form::label('Indicaciones: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
					<div class="col-md-4">
						{{Form::textarea('indicaciones',$evaluation->indicaciones,['class'=>'form-control', 'readonly', 'maxlength' => 500])}}
					</div>
				</div>				
				{{Form::close()}}
			</div>
			<div class="modal-footer">
				{{Form::button('Regresar', ['class' => 'btn btn-success', 'data-dismiss' => 'modal'])}}
			</div>
		</div>
	</div>
</div>
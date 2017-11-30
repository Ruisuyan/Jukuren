<div id="student{{$id}}" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Detalles del docente</h4>
			</div>
			<div class="modal-body">
			{{Form::open(['class' => ' form-horizontal'])}}

			<div class="form-group">
                {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('codigo',$student->codigo,['class'=>'form-control', 'readonly'])}}                    
                </div>
            </div>

            <div class="form-group">
                {{Form::label('DNI',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('dni',$student->dni,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Nombres',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('nombres',$student->nombres,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Apellido Paterno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('apellidoPaterno',$student->apellidoPaterno,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('Apellido Materno',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('apellidoMaterno',$student->apellidoMaterno,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Correo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('correo',$student->correo,['class'=>'form-control', 'readonly'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('Telefono',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-6">
                    {{Form::text('telefono',$student->telefono,['class'=>'form-control', 'readonly'])}}
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
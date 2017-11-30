<div id="course{{$id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detalles del curso</h4>
            </div>
            <div class="modal-body">
                {{Form::open(['class' => ' form-horizontal'])}}				
                
                <div class="form-group">
                    {{Form::label('Codigo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-6">
                            {{Form::text('codigo',$course->codigo,['class'=>'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Nombre',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-6">
                            {{Form::text('nombre',$course->nombre,['class'=>'form-control', 'readonly'])}}                    
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Descripcion',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-6">
                            {{Form::textarea('descripcion',$course->descripcion,['class'=>'form-control', 'readonly'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('Ciclo',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                        <div class="col-md-6">
                            {{Form::number('cicloCurso',$course->cicloCurso,['class'=>'form-control', 'readonly'])}}
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
<div id="competence{{$id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detalles de la competencia</h4>
            </div>
            <div class="modal-body">
                {{Form::open(['class' => ' form-horizontal'])}}				
                
                <div class="form-group">
                    {{Form::label('Nombre: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        {{Form::text('nombre',$competence->nombre,['class'=>'form-control', 'readonly', 'maxlength' => 50])}}
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Tipo: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        @if($competence->tipo==1)
                            {{Form::text('tipo','Competencia genérica',['class'=>'form-control', 'readonly', 'maxlength' => 50])}}    
                        @else
                            {{Form::text('tipo','Competencia específica',['class'=>'form-control', 'readonly', 'maxlength' => 50])}}    
                        @endif                        
                        
                    </div>
                </div>

                <div class="form-group">
                    {{Form::label('Descripcion: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-6">
                        {{Form::textarea('descripcion',$competence->descripcion,['class'=>'form-control', 'readonly','resize' => 'none', 'maxlength' => 500])}}
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
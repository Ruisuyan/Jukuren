@extends('layouts.app')
@section('title', 'Evaluacion en línea')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>{{$evaluation->nombre}}</h3>							
				{{--  <input hidden type="number" id="minutos" value="{{$evaluation->tiempo}}">--}}
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-body">
                			
			{{Form::open(['route' => ['evaluacionenlinea.solvePollPost',$evaluation->id], 'class'=>'form-horizontal','method' => 'put'])}}
				{{Form::hidden('evaluationId',$evaluation->id)}}
				
					@foreach($poll->questions as $key => $question)
						@if($question->tipo == 1)
						<div class="form-group">
						<div class="col-md-12">
						<h4>Pregunta {{$key+1}}</h4>
							<p class="form-control">{{$question->enunciado}}</p>
							<h5>Respuesta: (máximo 5000 caracteres)</h5>
							<textarea class="form-control" name="arrQuestion[{{$question->id}}]" rows="4" maxlength="5000"></textarea>
						</div>
													
						</div><br>
						@elseif($question->tipo == 2)
						<div class="form-group">
							<div class="col-md-12">
								<h4>Pregunta {{$key+1}}</h4>
								<p class="form-control">{{$question->enunciado}}</p>
								<h5>Respuesta:</h5>
								<ul>
									<li hidden>
										<p>
											<input checked name="arrQuestion[{{$question->id}}]" value="0" type="radio" />		
										</p>															
									</li>
									@foreach($question->alternatives as $subKey => $alternative)
									<li>
										<div class="radio">
										<label><input class="form-control" name="arrQuestion[{{$question->id}}]" value="{{$subKey+1}}" type="radio" id="clave_{{$question->id}}_{{$subKey+1}}" /> {{$subKey+1}}. {{$alternative->descripcion}} </label>
										</div>											
									</li>
									@endforeach
								</ul>
							</div>							
						</div><br>
						@endif
					@endforeach
					<div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                            <a class="btn btn-default pull-right" href="#">Cancelar</a>
                        </div>
                    </div>				
				{{Form::close()}}
			</div>				
		</div>
	</div>
</div>

@endsection


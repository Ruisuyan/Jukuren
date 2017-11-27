@extends('layouts.app')
@section('title', 'Evaluacion en línea')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>{{$poll->evaluation->nombre}}</h3>				
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-body">
			{{Form::open(['route' =>'evaluacionenlinea.checkPollPost', 'class'=>'form-horizontal','method' => 'put'])}}
				{{Form::hidden('onlineevaluationId',$onlineEvaluation->id)}}				
					@foreach($onlineEvaluation->answers as $key => $answer)
						@if($poll->questions[$key]->tipo == 1)
						<div class="form-group">

							<h4>Pregunta {{$key+1}}</h4>
							<p>{{$poll->questions[$key]->enunciado}}</p>

							<h5>Respuesta:</h5>
							<textarea class="form-control" rows="4" disabled>{{$answer->respuestaAbierta}}</textarea>

                            <h5>Observaciones:</h5>
                            <textarea class="form-control" name="arrObservation[{{$answer->id}}]" rows="4"></textarea>

                            <h5>Puntaje:</h5>
							<input class="form-control" type="number" name="arrScore[{{$answer->id}}]" min ="1" max ="3" >
                            
						</div>
						<hr/>
						@elseif($poll->questions[$key]->tipo == 2)
						<div class="form-group">
							<h4>Pregunta {{$key+1}}</h4>
							<p>{{$poll->questions[$key]->enunciado}}</p>

							<h5>Respuesta:</h5>
							<p>{{$answer->respuestaCerrada}}</p>

                            <h5>Observaciones:</h5>
                            <textarea class="form-control" name="arrObservation[{{$answer->id}}]" rows="4"></textarea>

                            <h5>Puntaje:</h5>							
                            {{Form::number('respuestaCerrada',$answer->puntaje,['class'=>'form-control','disabled' => 'true'])}}
						</div>
						<hr/>
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


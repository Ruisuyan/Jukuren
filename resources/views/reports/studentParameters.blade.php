@extends('layouts.app') @section('title', 'Reporte') @section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>Seleccionar parametros</h3>
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
				{{Form::open(['route' =>'reporte.studentParametersPost','class' => ' form-horizontal'])}}
				<div class="form-group">
                    {{Form::label('Semestre inicial: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::select('semestreIni',$semestreIni,null,['id' => 'competenceOfQuestions','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                    </div>
                </div>
				<div class="form-group">
                    {{Form::label('Semestre final: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        {{Form::select('semestreFin',$semestreFin,null,['id' => 'competenceOfQuestions','placeholder' => 'Elegir','class'=>'form-control', 'required'])}}
                    </div>
                </div>

				{{-- Tabla --}}

				<div>
					<h3>Lista de Alumnos</h3>
				</div>

				<div class="table-responsive">
					<table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action">
						<thead>
							<tr class="headings">
								<th class="column-title"></th>
								<th class="column-title">Codigo</th>
								<th class="column-title">Nombre</th>
							</tr>
						</thead>
						<tbody>
							@foreach($students as $student)
							<tr>
								<td>{{Form::radio('studentId', $student->id)}}</td>
								<td>{{$student->codigo}}</td>
								<td>{{$student->nombres . ' ' . $student->apellidoPaterno . ' ' . $student->apellidoMaterno}}</td>
								<td>
									<a class="btn btn-success btn-xs" title="Detalles" data-toggle="modal" data-target="#student{{$student->id}}">
										<i class="fa fa-eye"></i>
									</a>
								</td>
							</tr>
							@include('modals.student', ['id'=> $student->id, 'student' => $student])
                            @endforeach
						</tbody>
					</table>
                    {{ $students->links() }}
				</div>

				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						{{Form::submit('Generar', ['class'=>'btn btn-success pull-right'])}}
						<a class="btn btn-default pull-right" href="{{ route('horario.index') }}">Cancelar</a>
					</div>
				</div>

				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
@endsection {{-- @section('scripts')
<script src="{{ asset('js/cycleToCourse.js') }}" type="text/javascript"></script>
@endsection --}}
@extends('layouts.app') @section('title', 'Horarios') @section('content')

<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<h3>Lista de Horarios</h3>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Horarios</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<a href="{{route('horario.create')}}">
							{{Form::button('
							<i class="fa fa-plus"></i> Nuevo Horario',['class'=>'btn btn-success pull-right'])}}
						</a>
					</div>

				</div>
				<div class="table-responsive">
					<table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action">
						<thead>
							<tr class="headings">
								<th class="column-title">Codigo</th>
								<th class="column-title">Curso</th>
								<th class="column-title text-center">Ciclo Academico</th>
								{{--  <th class="column-title text-center">Acciones</th>  --}}
								<th class="column-title text-center">Asignar</th>
							</tr>
						</thead>
						<tbody>
							@foreach($schedules as $schedule)
							<tr>
								<td>{{$schedule->codigo}}</td>
								<td>{{$schedule->course->nombre}}</td>
								<td class="text-center">{{$schedule->cycle->semestre}}</td>
								{{--  <td class="text-center">
									<a href="{{route('horario.edit',$schedule->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="{{route('horario.show',$schedule->id)}}" title="Detalles" class="btn btn-success btn-xs view-group">
										<i class="fa fa-eye"></i>
									</a>
									<a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$schedule->id}}">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>  --}}
								<td class="text-center">
									@if($schedule->cycle->estado==3) Ciclo culminado @else
									<a href="{{route('horario.assignToTeacherGet',$schedule->id)}}" title="Asignar a Curso">
										<button type="button" class="btn btn-success btn-xs view-group">
											<i class="fa fa-arrow-circle-o-right"></i>
											Asignar docente
										</button>
									</a>
									<a href="{{route('horario.assignToStudentsGet',$schedule->id)}}" title="Asignar a Curso">
										<button type="button" class="btn btn-success btn-xs view-group">
											<i class="fa fa-arrow-circle-o-right"></i>
											Asignar alumnos
										</button>
									</a>
									@endif

								</td>
							</tr>
							@include('modals.destroy', ['id'=> $schedule->id, 'message' => '¿Esta seguro que desea eliminar este horario?', 'route' =>
							'horario.destroy']) @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
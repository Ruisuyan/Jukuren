@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>Evaluaciones</h3>
			</div>
		</div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="clearfix"></div>
                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">Titulo</th>
                        <th class="column-title">Fecha</th>
						<th class="column-title">Hora</th>                                                
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($evaluations as $evaluation)
                        <tr> 
                            <td>{{$evaluation->titulo}}</td>
							<td>{{$evaluation->fecha}}</td>
							<td>{{$evaluation->horaInicio}}</td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
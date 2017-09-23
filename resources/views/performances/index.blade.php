@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="page-title">
			<div class="title_left">
				<h3>Desempeños</h3>
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
                        <th class="column-title">ID</th>
						<th class="column-title">Descripcion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($performances as $performance)
                        <tr> 
                            <td>{{$performance->id}}</td> 
                            <td>{{$performance->descripcion}}</td> 
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
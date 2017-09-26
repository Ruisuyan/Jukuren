@extends('layouts.app')
@section('title', 'Desempenhos')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Desempeños</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Desempeños</h3>
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('desempenho.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Desempeño',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Descripcion</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach($performances as $performance)
                            <tr>                                
                                <td>{{$performance->descripcion}}</td>                             
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
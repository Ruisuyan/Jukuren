@extends('layouts.app')
@section('title', 'Evaluaciones')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Reporte de la competencia 1</h3>
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
            {{--  {{Form::open(['route' => 'reporte.scheduleSelectPost','class' => ' form-horizontal','id'=>'formSuggestion'])}}  --}}
            
            <div class="table-responsive">
                <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                    <thead>
                        <tr class="headings">
                            <th class="column-title">Codigo</th>                          
                            <th class="column-title">Alumno</th>     
                            <th class="column-title text-center">Logrado</th>
                            <th class="column-title text-center">En proceso</th>
                            <th class="column-title text-center">No logrado</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($students as $n => $student)                        
                        <tr> 
                            <td>{{$student->codigo}}</td>
                            <td>{{$student->nombres}}</td>
                            @if(($scoreCollection[$n] <= $highScore) and ($scoreCollection[$n] > $midScore))
                                <td class="text-center"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                            @endif
                            @if( ($scoreCollection[$n] <= $midScore) and ($scoreCollection[$n] > $lowScore))
                                <td class="text-center"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                            @endif
                            @if(($scoreCollection[$n] <= $lowScore) and ($scoreCollection[$n] >= 0))
                                <td class="text-center"><i class="fa fa-times fa-2" aria-hidden="true"></i></td>
                            @endif
                        </tr> 
                        @endforeach
                    </tbody>
                </table>                  
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{--  {{Form::submit('Siguiente', ['class'=>'btn btn-success pull-right'])}}  --}}
                    <a class="btn btn-default pull-right" href="{{ route('reporte.scheduleSelectGet') }}">Regresar</a>
                </div>
            </div>

            {{--  {{Form::close()}}  --}}
            </div>
            

        </div>
    </div>
</div>
@endsection
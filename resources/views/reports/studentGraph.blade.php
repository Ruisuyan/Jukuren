@extends('layouts.app')
@section('title', 'Reporte')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Reporte de Competencia 1</h3>
        </div>
    </div>
</div>

<div class="row">    
    {!!$chart->html()!!}
</div>
<div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">        
        <a class="btn btn-success pull-right" href="{{ route('reporte.studentParametersGet') }}">Regresar</a>
    </div>
</div>
@endsection
@section('scripts')
{!! $chart->script() !!}
@endsection
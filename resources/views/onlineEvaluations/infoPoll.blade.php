@extends('layouts.app') 
@section('title', 'Cuestionario') 
@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Iniciar evaluación</h3>
  </div>  
</div>

<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">

    <div class="x_title">
      <h2>{{$evaluation->nombre}}</h2>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
            
      <div class="row" style="margin-top: 10px;">
        <div class="form-group">
          <div class="col-md-12 col-sm-12"></div>
          <p>
            {{$evaluation->indicaciones}}
          </p>
        </div>
      </div>        
      <div class="separator"></div>
      
    </div>
    <br>
    
    <a class="btn btn-default" href="{{ route('alumno.myEvaluations') }}">Cancelar</a>
    <a class="btn btn-success pull-right " href="{{ route('evaluacionenlinea.solvePollGet',$evaluation->id) }}">Aceptar</a>

  </div>
</div>
@endsection
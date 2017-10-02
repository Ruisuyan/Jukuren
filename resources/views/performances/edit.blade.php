@extends('layouts.app')
@section('title', 'Desempeños')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Editar Desempeño</h3>
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
             {{Form::open(['route' => ['desempenho.update',$performance->id],'class' => ' form-horizontal','method'=>'put'])}}            
            
            <div class="form-group">
                {{Form::label('Descripción: *',null,['class'=>'control-label col-md-4 col-sm-3 col-xs-12'])}}
                <div class="col-md-4">
                    {{Form::textarea('descripcion',$performance->descripcion,['class'=>'form-control', 'required', 'maxlength' => 500])}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    {{Form::submit('Guardar', ['class'=>'btn btn-success pull-right'])}}
                    <a class="btn btn-default pull-right" href="{{ route('desempenho.index') }}">Cancelar</a>
                </div>
            </div>
            {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection
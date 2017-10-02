@extends('welcome')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Iniciar Sesion</div>
                <div class="panel-body">
                    {{Form::open(['route' => 'session.store','class' => 'form-horizontal','id'=>'formSuggestion'])}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Correo</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>                            
                        </div>

                        @include('layouts.errors')
                        
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
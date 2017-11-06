@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Bienvenido a SEC - Sistema de Evaluacion por Competencias
                            </h1>
                            <div class="panel-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                Inicio de sesión exitoso
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

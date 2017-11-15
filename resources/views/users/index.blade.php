@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="page-title">    
		    <h3>Lista de Usuarios</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Usuarios</h3>
            </div>
            <div class="panel-body">
                {{--  <div class="row">   
                    <div class="col-md-12">
                        <a href="{{route('usuario.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nuevo Usuario',['class'=>'btn btn-success pull-right'])}}
                        </a>
                    </div>
                    
                </div>  --}}
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Nombre</th>                                                        
                            <th class="column-title">Correo</th>
                            <th class="column-title">Rol</th>                            
                            <th class="column-title">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr> 
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if(is_null($user->role_id))
                                    <td>Invitado</td>
                                @else                                    
                                    <td>{{$user->role->nombre}}</td>
                                @endif  
                                
                                <td class="centered">
                                    <a href="{{route('usuario.edit',$user->id)}}" title="Editar" class="btn btn-primary btn-xs view-group">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-xs delete-group" title="Eliminar" data-toggle="modal" data-target="#{{$user->id}}">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        //Validar formulario
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        //Crear y guardar el usuario
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        //iniciar sesion
        auth()->login($user);        
        //Redirigir a la pagina inicial
        return redirect()->home();
    }

    
}

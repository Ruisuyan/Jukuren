<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct() {
        $this->middleware('guest',['except' => 'destroy']);
    }


    public function create()
    {
        return view('sessions.create');
    }

    public function store(){
        //Intentar registrar        
        if (! auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
                'message' => 'Revisa tus datos e intenta de nuevo.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('session.create');
    }

}

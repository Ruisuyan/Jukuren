<?php

namespace App\Http\Controllers;

use App\Competence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompetenceController extends Controller
{
    public function __construct() {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $competences = Competence::all();        
        $data = [
            'competences' => $competences,
        ];
        return view('competences.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try{
            $competence = new Competence;            
            $competence->nombre = $request['nombre'];
            $competence->descripcion = $request['descripcion'];
            $competence->tipo = $request['tipo'];
            $competence->save();

            return redirect()->route('competencia.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function show(Competence $competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competence = Competence::find($id);
        $data = [
            'competence' => $competence,
        ];
        return view('competences.edit',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $competence = Competence::find($id);
            $competence->nombre = $request['nombre'];            
            $competence->descripcion = $request['descripcion'];                        
            $competence->tipo = $request['tipo'];
            $competence->save();
            return redirect()->route('competencia.index',$id)->with('success', 'yay');
        } catch (Exception $e) {
            return redirect()->back()->with('warning', 'doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $competence = Competence::find($id);
            $competence->delete();
            return redirect()->route('competencia.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }
}

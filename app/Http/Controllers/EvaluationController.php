<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Competence;
use App\Question;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::all();        
        $data = [
            'evaluations' => $evaluations,
        ];
        return view('evaluations.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competences = Competence::all();
        $questions = Question::all();
        $data = [
            'questions' => $questions,
            'competences' => $competences->pluck('nombre','id'),
        ];
        return view('evaluations.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            dd($request);
            $evaluation = new Evaluation;
            $evaluation->nombre = $request['nombre'];            
            $evaluation->descripcion = $request['descripcion'];
            $evaluation->fechaInicio = $request['fechaInicio'];                        
            $evaluation->fechaFin = $request['fechaFin'];
            $evaluation->duracion = $request['duracion'];
            $evaluation->peso = $request['peso'];
            $evaluation->estado = 1;
            $evaluation->competence_id = $request['competencia'];                        
            $evaluation->save();

            return redirect()->route('evaluacion.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluation  $evaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $evaluation = Evaluation::find($id);
            $evaluation->delete();
            return redirect()->route('evaluacion.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }
}


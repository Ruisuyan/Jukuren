<?php

namespace App\Http\Controllers;

use App\OnlineEvaluation;
use App\Competence;
use App\Performance;
use App\Question;
use Illuminate\Http\Request;

class OnlineevaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlineEvaluation = OnlineEvaluation::all();        
        $data = [
            'onlineEvaluation' => $onlineEvaluation,
        ];
        return view('onlineEvaluations.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competences = Competence::all();
        $performances = Performance::all();
        $questions = Question::all();
        $data = [
            'questions' => $questions,
            'competences' => $competences->pluck('nombre','id'),
            'performances' => $performances->pluck('nombre','id'),
        ];
        return view('onlineEvaluations.create',$data);
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
            //dd($request);
            $onlineEvaluation = new Onlineevaluation;
            $onlineEvaluation->nombre = $request['nombre'];            
            $onlineEvaluation->descripcion = $request['descripcion'];
            $onlineEvaluation->fechaInicio = $request['fechaInicio'];                        
            $onlineEvaluation->fechaFin = $request['fechaFin'];
            $onlineEvaluation->duracion = $request['duracion'];
            $onlineEvaluation->peso = $request['peso'];
            $onlineEvaluation->estado = 1;
            $onlineEvaluation->competence_id = $request['competencia'];                        
            $onlineEvaluation->save();
            //registrar las preguntas
            //OJO ver tambien si alguna pregunta ya se uso antes!!
            foreach($request['checks'] as $n => $questionId){
                $question = Question::where('id',$questionId)->get()->first();                
                $question->onlineEvaluation_id = $onlineEvaluation->id;               
                $question->save();
            }

            return redirect()->route('evaluacionenlinea.index')->with('success','yay');
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
            $onlineEvaluation = OnlineEvaluation::find($id);
            $onlineEvaluation->delete();
            return redirect()->route('evaluacionenlinea.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }
}


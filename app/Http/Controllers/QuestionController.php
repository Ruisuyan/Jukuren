<?php

namespace App\Http\Controllers;

use App\Question;
use App\Competence;
use App\Alternative;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        //dd($question);
        $data = [
            'questions' => $question,
        ];
        return view('questions.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competences = Competence::all();
        $data = [
            'competences' => $competences->pluck('nombre','id'),
        ];
        return view('questions.create',$data);
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
            $question = new Question;
            dd($request['tipo']);
            $question->tipo = $request['tipo'];            
            $question->utilizado = 1;
            $question->proporcion = $request['proporcion'];
            $question->competence_id = $request['competencia'];            
            if($request['tipo']==2){
                $question->respuestaCerrada = $request['respuestaCerrada'];
            }
            $question->save();
            //Alternatives
            if($request['tipo'] == 2){                
                foreach ($request['clave'] as $numero => $descripcion) {
                    $alternative = new Alternative;                   
                    $alternative->descripcion = $descripcion;
                    $alternative->question_id = $question->id;
                    $alternative->save();
                }                
            }
            return redirect()->route('pregunta.index')->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $competences = Competence::all();       
        $data = [
            'question' => $question,
            'competences' => $competences->pluck('nombre','id'),
        ];
        return view('questions.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $question = Question::find($id);
            $question->tipo = $request['tipo'];
            $question->enunciado = $request['enunciado'];
            $question->tiempo = $request['tiempo'];
            $question->puntaje = $request['puntaje'];
            $question->competence_id = $request['competencia'];  
            $question->save();
            return redirect()->route('pregunta.index',$id)->with('success','yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning','doh');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $question = Question::find($id);
            $question->delete();
            return redirect()->route('pregunta.index')->with('success', 'yay');
        }catch(Exception $e){
            return redirect()->back()->with('warning', 'doh');
        }
    }
}

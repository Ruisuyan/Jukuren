<?php

namespace App\Http\Controllers;

use App\OnlineEvaluation;
use App\Evaluation;
use App\Competence;
use App\Performance;
use App\Question;
use App\Poll;
use App\Answer;
use App\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OnlineevaluationController extends Controller
{

    public function infoPoll($id)
    {        
        $evaluation = Evaluation::where('id',$id)->first();        
        $data = [
            'evaluation' => $evaluation,     
        ];
        return view('onlineEvaluations.infoPoll',$data);
    }
    public function solvePollGet($id)
    {
        $poll = Poll::where('evaluation_id',$id)->with('questions')->first();
        $evaluation = Evaluation::where('id',$id)->first();
        $data = [
            'evaluation' => $evaluation,
            'poll' => $poll,            
        ];        
        return view('onlineEvaluations.solvePoll',$data);
    }

    public function solvePollPost(Request $request)
    {
        $evaluationId = $request['evaluationId'];        //idevaluacion profesor horario
        $student = Student::where('user_id',auth()->user()->id)->first();//alumno evaluado
        $poll = Poll::where('evaluation_id',$evaluationId)->with('questions')->first();//encuesta usada
        //nuevo registro de evaluacion
        $onlineEvaluation = new OnlineEvaluation;
        $onlineEvaluation->poll_id = $poll->id;
        $onlineEvaluation->estado = 1;
        $onlineEvaluation->fechaResolucion = Carbon::now();
        $onlineEvaluation->student_id = $student->id;
        $onlineEvaluation->save();
        foreach ($request['arrQuestion'] as $idQuestion => $questionAnswered) {
            $question = Question::where('id',$idQuestion)->first();
            $answer = new Answer;
            $answer->onlineevaluation_id = $onlineEvaluation->id;
            $answer->questionId = $idQuestion;
            if($question->tipo == 1){//si es abierta
                $answer->respuestaAbierta = $questionAnswered;
            }
            else if ($question->tipo == 2){//si es cerrada
                $answer->respuestaCerrada = $questionAnswered;
                //se corrige
                $correcta = $question->respuestaCerrada;
                if( ($questionAnswered=="0") || ($questionAnswered != $correcta)  ){//no se marco ninguna alternativa o es incorrecta
                    $answer->puntaje = 0;
                }
                else {
                    $answer->puntaje = $question->proporcion; //se le asigna el puntaje completo
                    //se suma al acumulado dependiendo de su competencia                    
                }
            }
            $answer->save();
            
        }  
                
        return redirect()->route('home');
    }

    public function pollsIndex($id)
    {
        $poll = Poll::where('evaluation_id',$id)->first();
        $onlineEvaluations = OnlineEvaluation::where('poll_id',$poll->id)->get();
        //dd($evidences);
        $data = [
            'onlineEvaluations' => $onlineEvaluations,
        ];
        return view('onlineEvaluations.pollsIndex',$data);
    }

    public function checkPollGet($id)
    {
        $onlineEvaluation = OnlineEvaluation::where('id',$id)->with('answers')->first();
        $poll = Poll::where('id',$onlineEvaluation->poll_id)->with(['questions', 'evaluation'])->first();
              
        $data = [
            'onlineEvaluation' => $onlineEvaluation,        
            'poll' => $poll,
        ];
        
        return view('onlineEvaluations.checkPoll',$data);
    }    

    public function checkPollPost(Request $request)
    {
        //$evaluationId = $request['evaluationId'];//idevaluacion profesor horario
        //$student = Student::where('user_id',auth()->user()->id)->first();//alumno evaluado
        //$poll = Poll::where('evaluation_id',$evaluationId)->with('questions')->first();//encuesta usada
        //nuevo registro de evaluacion
        $onlineEvaluation = OnlineEvaluation::where('id',$request['$onlineevaluationId'])->first();        
        $onlineEvaluation->estado = 2;
        //$onlineEvaluation->save();
        $scoreOpenAnswers = $request['arrScore'];
        foreach ($request['arrObservation'] as $idAnswer => $observation) {
            //$question = Question::where('id',$idQuestion)->first();
            $answer = Answer::where('id',$idAnswer);
            $answer->observaciones = $observation;            
            if($question->tipo == 2){//si es cerrada
                $answer->puntaje = $scoreOpenAnswers[$idAnswer];                
            }
            $answer->save();            
        }  
                
        return redirect()->route('home');

        // try{
        //     $evidence = Evidence::where('id',$id)->first();            
        //     $evidence->observaciones = $request['observaciones'];
        //     $evidence->puntaje = $request['puntaje'];
        //     $evidence->save();
        //     return redirect()->route('home');
        // }catch(Exception $e){
        //     return redirect()->back();
        // }
    }
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

